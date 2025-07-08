<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

// Login
Route::get('/login', function () {
    return view('pages.login.login');
})->name('login');
Route::post('/postLogin', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Register
Route::get('/register', function () {
    return view('pages.login.register');
});
Route::post('/registerAccount', [AuthController::class, 'register']);

// Candidate
Route::get('/candidate', [CandidateController::class, 'index'])->middleware('auth');
Route::post('/addCandidate', [CandidateController::class, 'store'])->middleware('auth');
Route::get('{id}/detailCandidate', [CandidateController::class, 'show'])->middleware('auth');
Route::get('/rejectRegister/{id}', [CandidateController::class, 'rejectCandidate'])->middleware('auth');
Route::get('/acceptCandidate/{id}', [CandidateController::class, 'acceptCandidate'])->middleware('auth');
Route::get('/getfile/{id}', [CandidateController::class, 'getFile'])->middleware('auth');

// Employee
Route::get('/employee', [EmployeeController::class, 'index'])->middleware('auth');
Route::post('/addEmployee', [EmployeeController::class, 'store'])->middleware('auth');

// Personality
Route::get('/profileCandidate', [PersonalityController::class, 'profileCandidate'])->middleware('auth');
Route::get('/coverTest', [PersonalityController::class, 'coverTest'])->middleware('auth');
Route::get('/personalityTest', [PersonalityController::class, 'personalityTest'])->middleware('auth');
Route::post('/predictPersonality', [PersonalityController::class, 'predictPersonalityTest'])->middleware('auth');
Route::get('/summarizeCandidate', [PersonalityController::class, 'summarizeCandidate'])->middleware('auth');

