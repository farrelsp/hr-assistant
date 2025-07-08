<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\User;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['candidate'] = Candidate::get();
        $user = auth()->user();
        $userEmployee = User::with('employee')->find($user->id);
        
        // dd($data);

        return view('pages.candidate.index', $data, compact(['userEmployee']));
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
    public function store(Request $request)
    {
        // $first_name = 'Randy';
        // $last_name = 'Cahya';
        // $gender = 'Laki-laki';
        // $address = 'Kuningan';
        // $date_of_birth = '17-08-1999';
        // $no_hp = '081234567890';
        // $position = 'Data Scientist';
        // $test_score = '3.9';
        // $test_result = '4.1';
        // $personality = 'Extraversion';

        $client = new Client([
            'base_uri' => 'http://localhost:5000', // Ganti dengan URL Flask API
            // 'timeout'  => 2.0,
        ]);

        $response = $client->get('/summ', [
            'json' => [
                'text' => $request->tell_me_yourself,
            ]
        ]);
        
        $data = $response->getBody()->getContents();

        $data = json_decode($data, true);

        $userCandidate = User::find($request->user_id);

        // dd($userCandidate);

        // Menyimpan Data File kedalam Variabel
        $file = $request->file('cv');
        $filename = time()."_".$file->getClientOriginalName();
        $filext = $file->getClientOriginalExtension();
        $filesize = $file->getSize();

        // Menentukan Storage Materi Pendampingan
        $path = 'storage';
        $file->move($path, $filename);
        
        $candidate = Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'no_hp' => $request->no_hp,
            'position' => $request->position,
            'cv' => $filename,
            'status' => 'review',
            'tell_me_yourself' => $data['summary'],
            'test_score_a' => '-',
            'test_score_c' => '-',
            'test_score_e' => '-',
            'test_score_n' => '-',
            'test_score_o' => '-',
            'test_result_a' => '-',
            'test_result_c' => '-',
            'test_result_e' => '-',
            'test_result_n' => '-',
            'test_result_o' => '-',
            'personality' => '-'
        ]);

        $userCandidate->candidate()->save($candidate);

        // dd($userCandidate['candidate']->position);

        return redirect('/profileCandidate')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find Data by Id
        $candidate = Candidate::find($id);
        $user = auth()->user();
        $userEmployee = User::with('employee')->find($user->id);

        return view('pages.candidate.detailCandidate', compact('candidate','userEmployee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rejectCandidate($id)
    {
        $candidate = Candidate::find($id);

        $candidate->update([
            'status' => 'rejected'
        ]);

        return redirect('/candidate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function acceptCandidate($id)
    {
        $candidate = Candidate::find($id);

        $candidate->update([
            'status' => 'accepted'
        ]);

        return redirect('/candidate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getFile($id)
    {
        $file = Candidate::find($id);

        $pathFile = storage_path('../public/storage/' . $file->cv);

        return response()->download($pathFile);
    }
}
