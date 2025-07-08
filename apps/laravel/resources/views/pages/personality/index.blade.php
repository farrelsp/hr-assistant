@extends('layouts.layout')

@section('title', 'Profile Candidate')

@section('content')

<div class="pagetitle">
    <h1>Profile Candidate</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Personality</li>
            <li class="breadcrumb-item active">Profile Candidate</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile Candidate</h5>

                    <!-- General Form Elements -->
                    <form action="addCandidate" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="row mb-3">
                            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                            <input id="first_name" name="first_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                            <input id="last_name" name="last_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                            <select id="gender" name="gender" class="form-select" aria-label="Default select example">
                                <option selected>Choose Your Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-10">
                            <input id="date_of_birth" name="date_of_birth" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_hp" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                            <input id="no_hp" name="no_hp" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <textarea id="address" name="address" class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="position" class="col-sm-2 col-form-label">Position</label>
                            <div class="col-sm-10">
                                <select id="position" name="position" class="form-select" aria-label="Default select example">
                                    <option selected>Choose Your Position</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                    <option value="Data Engineer">Data Engineer</option>
                                    <option value="Data Scientist">Data Scientist</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tell_me_yourself" class="col-sm-2 col-form-label">Tell me about yourself</label>
                            <div class="col-sm-10">
                            <textarea id="tell_me_yourself" name="tell_me_yourself" class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cv" class="col-sm-2 col-form-label">CV</label>
                            <div class="col-sm-10">
                            <input id="cv" name="cv" class="form-control" type="file" id="cv">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Submit Button</label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection