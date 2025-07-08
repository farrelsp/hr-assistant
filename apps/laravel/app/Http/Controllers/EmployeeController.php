<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employee'] = Employee::get();
        $user = auth()->user();
        $userEmployee = User::with('employee')->find($user->id);
        
        // dd($data);

        return view('pages.employee.index', $data, compact(['userEmployee']));
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
        $first_name = 'Haikal';
        $last_name = 'Limansah';
        $gender = 'Laki-laki';
        $address = 'Kuningan';
        $date_of_birth = '09-09-1999';
        $no_hp = '081223334444';
        $position = 'HRD';
        
        $employee = Employee::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'address' => $address,
            'date_of_birth' => $date_of_birth,
            'no_hp' => $no_hp,
            'position' => $position
        ]);

        dd($employee);
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
