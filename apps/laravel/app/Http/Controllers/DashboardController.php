<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $candidate = Candidate::count();
            $candidateAccepted = Candidate::where('status','accepted')->count();
            $candidateRejected = Candidate::where('status','rejected')->count();
            $user = auth()->user();
            $userEmployee = User::with('employee')->find($user->id);
            // dd($userEmployee['employee']->position);

            return view('dashboard', compact(
                'candidate',
                'candidateAccepted',
                'candidateRejected',
                'userEmployee'
            ));
        } else {
            if (Auth::user()->candidate) {
                $user = Auth::user()->candidate;
                $userId = $user->id;

                // dd($userId);

                $application = Candidate::where('_id',$userId)->count();

                // dd($application);
                
                return view('dashboard', compact(['application']));
            } else {
                $application = '0';

                return view('dashboard', compact(['application']));
            }
        }
    }
}
