<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\User;

use GuzzleHttp\Client;

class PersonalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileCandidate()
    {
        return view('pages.personality.index');
    }

    public function personalityTest()
    {
        $user = auth()->user();
        $userCandidate = User::with('candidate')->find($user->id);

        return view('pages.personality.form', compact(['userCandidate']));
    }

    public function coverTest()
    {
        $user = auth()->user();
        $userCandidate = User::with('candidate')->find($user->id);

        return view('pages.personality.cover', compact(['userCandidate']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function predictPersonalityTest(Request $request)
    {
        $ExtraValue = 0;
        $AgreeValue = 0;
        $ConscientValue = 0;
        $NeuroValue = 0;
        $OpenValue = 0;
        $Extraversion = [$request->q1, $request->q6, $request->q11, $request->q16, $request->q21, $request->q26, $request->q31, $request->q36];
        $Agreeableness = [$request->q2, $request->q7, $request->q12, $request->q17, $request->q22, $request->q27, $request->q32, $request->q37, $request->q42];
        $Conscientiousness = [$request->q3, $request->q8, $request->q13, $request->q18, $request->q23, $request->q28, $request->q33, $request->q38, $request->q43];
        $Neuroticism = [$request->q4, $request->q9, $request->q14, $request->q19, $request->q24, $request->q29, $request->q34, $request->q39];
        $Openness = [$request->q5, $request->q10, $request->q15, $request->q20, $request->q25, $request->q30, $request->q35, $request->q40, $request->q41, $request->q44];
        
        $extraLength = count($Extraversion);
        for ($i=0; $i < $extraLength; $i++) { 
            if ($Extraversion[$i] > 3) {
                $ExtraValue += 1;
            }
        }
        $agreeLength = count($Agreeableness);
        for ($i=0; $i < $agreeLength; $i++) { 
            if ($Agreeableness[$i] > 3) {
                $AgreeValue += 1;
            }
        }
        $consientLength = count($Conscientiousness);
        for ($i=0; $i < $consientLength; $i++) { 
            if ($Conscientiousness[$i] > 3) {
                $ConscientValue += 1;
            }
        }
        $neuroLength = count($Neuroticism);
        for ($i=0; $i < $neuroLength; $i++) { 
            if ($Neuroticism[$i] > 3) {
                $NeuroValue += 1;
            }
        }
        $openLength = count($Openness);
        for ($i=0; $i < $openLength; $i++) { 
            if ($Openness[$i] > 3) {
                $OpenValue += 1;
            }
        }

        $finalExtra = $ExtraValue/($extraLength/10);
        $finalAgree = $AgreeValue/($agreeLength/10);
        $finalConscient = $ConscientValue/($consientLength/10);
        $finalNeuro = $NeuroValue/($neuroLength/10);
        $finalOpen = $OpenValue/($openLength/10);

        $username = $request->username;
        $finalValue = $finalExtra . ',' . $finalAgree . ',' . $finalConscient . ',' . $finalNeuro . ',' . $finalOpen;
        
        $userCandidate = Candidate::find($request->candidate_id);

        // dd($userCandidate);

        $userCandidate->update([
            'test_score_a' => $finalAgree,
            'test_score_c' => $finalConscient,
            'test_score_e' => $finalExtra,
            'test_score_n' => $finalNeuro,
            'test_score_o' => $finalOpen,
        ]);

        // dd($userCandidate);

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/predict-tweets', [
            'json' => [
                'username' => $username,
                'test_result' => $finalValue,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);

        // dd($data);

        $userCandidate->update([
            'personality' => $data['label'],
            'test_result_a' => $data['soft_class']['Agreeableness'],
            'test_result_c' => $data['soft_class']['Conscientiousness'],
            'test_result_e' => $data['soft_class']['Extraversion'],
            'test_result_n' => $data['soft_class']['Neuroticism'],
            'test_result_o' => $data['soft_class']['Openness'],
        ]);

        // dd($userCandidate);

        return redirect('/');
    }

    public function summarizeCandidate()
    {
        $candidateDescription = 'Farrel merupakan fresh graduate dari Universitas Brawijaya jurusan Teknik Elektro yang fokus pada Control Engineering dan mendapatkan predikat Cumlaude dengan IPK 3.86/4.00. Ia memiliki ketertarikan terhadap perkembangan teknologi khususnya di bidang mikrokontroler, robotika, dan computer vision dengan harapan dapat bekerja di salah satu perusahaan yang bergerak di bidang industri teknologi. Semasa kuliah, Farrel aktif mengikuti kegiatan dan organisasi yang berkaitan dengan kontrol dan robotika. Ia menjabat sebagai programmer senior di Tim Robotika Brawijaya selama tiga tahun dan telah menorehkan beberapa prestasi. Selain itu, beliau aktif mengajarkan praktikum kepada mahasiswa sekaligus menjadi asisten laboratorium di dua laboratorium yang berbeda. Pengalaman kerja terakhirnya sebagai software engineer di perusahaan startup yang bergerak di industri teknologi kesehatan dengan tanggung jawab mengelola aplikasi web yang berfungsi sebagai rekam medis pasien berbasis elektronik. Kemampuan proaktif, berorientasi pada detail, dan cepat belajar adalah sifat terbesarnya yang membuatnya mampu beradaptasi dengan baik di lingkungan apa pun.';

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/summ', [
            'json' => [
                'text' => $candidateDescription,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);

        dd($data);
        // dd($data['summary']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
