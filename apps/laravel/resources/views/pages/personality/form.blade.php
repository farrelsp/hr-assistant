@extends('layouts.layout')

@section('title', 'Personality Test')

@section('content')

<div class="pagetitle">
    <h1>Personality Test</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Personality</li>
            <li class="breadcrumb-item active">Personality Test</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personality Test</h5>

                    <!-- General Form Elements -->
                    <form action="predictPersonality" method="POST" class="needs-validation" novalidate>
                        
                        @csrf

                        <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ $userCandidate['candidate']->id }}">
                        {{-- <div id="timer">00:00:00</div> --}}
                        <span id="timer" style="font-size: 24px; position: absolute; top: 10px; right: 10px;"></span>
                        <div id="section1">
                            {{-- QUESTION 1 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">1. Saya melihat diri sendiri sebagai orang yang banyak berbicara.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="1">
                                        <label class="form-check-label" for="q1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="2">
                                        <label class="form-check-label" for="q1">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="3">
                                        <label class="form-check-label" for="q1">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="4">
                                        <label class="form-check-label" for="q1">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q1" id="q1" value="5">
                                        <label class="form-check-label" for="q1">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 2 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">2. Saya sering mencari kesalahan orang lain.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="1">
                                        <label class="form-check-label" for="q2">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="2">
                                        <label class="form-check-label" for="q2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="3">
                                        <label class="form-check-label" for="q2">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="4">
                                        <label class="form-check-label" for="q2">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q2" id="q2" value="5">
                                        <label class="form-check-label" for="q2">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 3 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">3. Saya mengerjakan pekerjaan dengan teliti.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="1">
                                        <label class="form-check-label" for="q3">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="2">
                                        <label class="form-check-label" for="q3">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="3">
                                        <label class="form-check-label" for="q3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="4">
                                        <label class="form-check-label" for="q3">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q3" id="q3" value="5">
                                        <label class="form-check-label" for="q3">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 4 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">4. Saya melihat diri saya sebagai orang yang sedang depresi dan selalu sedih.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="1">
                                        <label class="form-check-label" for="q4">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="2">
                                        <label class="form-check-label" for="q4">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="3">
                                        <label class="form-check-label" for="q4">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="4">
                                        <label class="form-check-label" for="q4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q4" id="q4" value="5">
                                        <label class="form-check-label" for="q4">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 5 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">5. Dalam pikiran saya selalu muncul ide baru dan original.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="1">
                                        <label class="form-check-label" for="q5">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="2">
                                        <label class="form-check-label" for="q5">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="3">
                                        <label class="form-check-label" for="q5">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="4">
                                        <label class="form-check-label" for="q5">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q5" id="q5" value="5">
                                        <label class="form-check-label" for="q5">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="next1" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section2">
                            {{-- QUESTION 6 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">6. Saya melihat diri saya sebagai orang yang pendiam.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="1">
                                        <label class="form-check-label" for="q6">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="2">
                                        <label class="form-check-label" for="q6">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="3">
                                        <label class="form-check-label" for="q6">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="4">
                                        <label class="form-check-label" for="q6">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q6" id="q6" value="5">
                                        <label class="form-check-label" for="q6">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 7 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">7. Saya senang membantu dan tidak egois terhadap orang lain.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="1">
                                        <label class="form-check-label" for="q7">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="2">
                                        <label class="form-check-label" for="q7">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="3">
                                        <label class="form-check-label" for="q7">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="4">
                                        <label class="form-check-label" for="q7">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q7" id="q7" value="5">
                                        <label class="form-check-label" for="q7">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 8 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">8. Saya bisa menjadi orang yang agak ceroboh.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="1">
                                        <label class="form-check-label" for="q8">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="2">
                                        <label class="form-check-label" for="q8">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="3">
                                        <label class="form-check-label" for="q8">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="4">
                                        <label class="form-check-label" for="q8">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q8" id="q8" value="5">
                                        <label class="form-check-label" for="q8">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 9 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">9. Saya orang yang santai, bisa menangani stres dengan baik.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="1">
                                        <label class="form-check-label" for="q9">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="2">
                                        <label class="form-check-label" for="q9">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="3">
                                        <label class="form-check-label" for="q9">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="4">
                                        <label class="form-check-label" for="q9">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q9" id="q9" value="5">
                                        <label class="form-check-label" for="q9">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 10 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">10. Saya orang yang ingin tahu tentang banyak hal yang berbeda.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="1">
                                        <label class="form-check-label" for="q10">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="2">
                                        <label class="form-check-label" for="q10">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="3">
                                        <label class="form-check-label" for="q10">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="4">
                                        <label class="form-check-label" for="q10">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q10" id="q10" value="5">
                                        <label class="form-check-label" for="q10">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back1" class="btn btn-primary">Back</div>
                                        <div id="next2" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section3">
                            {{-- QUESTION 11 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">11. Saya orang yang penuh dengan semangat.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="1">
                                        <label class="form-check-label" for="q11">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="2">
                                        <label class="form-check-label" for="q11">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="3">
                                        <label class="form-check-label" for="q11">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="4">
                                        <label class="form-check-label" for="q11">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q11" id="q11" value="5">
                                        <label class="form-check-label" for="q11">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 12 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">12. Saya orang yang memulai pertengkaran dengan orang lain.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="1">
                                        <label class="form-check-label" for="q12">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="2">
                                        <label class="form-check-label" for="q12">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="3">
                                        <label class="form-check-label" for="q12">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="4">
                                        <label class="form-check-label" for="q12">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q12" id="q12" value="5">
                                        <label class="form-check-label" for="q12">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 13 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">13. Saya adalah pekerja yang dapat diandalkan.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="1">
                                        <label class="form-check-label" for="q13">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="2">
                                        <label class="form-check-label" for="q13">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="3">
                                        <label class="form-check-label" for="q13">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="4">
                                        <label class="form-check-label" for="q13">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q13" id="q13" value="5">
                                        <label class="form-check-label" for="q13">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 14 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">14. Saya termasuk orang mudah tegang.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="1">
                                        <label class="form-check-label" for="q14">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="2">
                                        <label class="form-check-label" for="q14">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="3">
                                        <label class="form-check-label" for="q14">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="4">
                                        <label class="form-check-label" for="q14">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q14" id="q14" value="5">
                                        <label class="form-check-label" for="q14">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 15 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">15. Saya orang yang cerdik, pemikir yang mendalam.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="1">
                                        <label class="form-check-label" for="q15">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="2">
                                        <label class="form-check-label" for="q15">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="3">
                                        <label class="form-check-label" for="q15">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="4">
                                        <label class="form-check-label" for="q15">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q15" id="q15" value="5">
                                        <label class="form-check-label" for="q15">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back2" class="btn btn-primary">Back</div>
                                        <div id="next3" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section4">
                            {{-- QUESTION 16 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">16. Saya menunjukkan banyak antusiasme pada suatu hal.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="1">
                                        <label class="form-check-label" for="q16">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="2">
                                        <label class="form-check-label" for="q16">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="3">
                                        <label class="form-check-label" for="q16">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="4">
                                        <label class="form-check-label" for="q16">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q16" id="q16" value="5">
                                        <label class="form-check-label" for="q16">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 17 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">17. Saya memiliki sifat yang pemaaf.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="1">
                                        <label class="form-check-label" for="q17">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="2">
                                        <label class="form-check-label" for="q17">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="3">
                                        <label class="form-check-label" for="q17">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="4">
                                        <label class="form-check-label" for="q17">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q17" id="q17" value="5">
                                        <label class="form-check-label" for="q17">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 18 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">18. Saya orang yang cenderung tidak teratur.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="1">
                                        <label class="form-check-label" for="q18">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="2">
                                        <label class="form-check-label" for="q18">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="3">
                                        <label class="form-check-label" for="q18">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="4">
                                        <label class="form-check-label" for="q18">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q18" id="q18" value="5">
                                        <label class="form-check-label" for="q18">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 19 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">19. Saya sering khawatir berlebihan.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q19" id="q19" value="1">
                                        <label class="form-check-label" for="q19">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q19" id="q19" value="2">
                                        <label class="form-check-label" for="q19">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q19" id="q19" value="3">
                                        <label class="form-check-label" for="q19">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q19" id="q19" value="4">
                                        <label class="form-check-label" for="q19">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q19" id="q19" value="5">
                                        <label class="form-check-label" for="q19">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 20 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">20. Saya memiliki imajinasi tinggi.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q20" id="q20" value="1">
                                        <label class="form-check-label" for="q20">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q20" id="q20" value="2">
                                        <label class="form-check-label" for="q20">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q20" id="q20" value="3">
                                        <label class="form-check-label" for="q20">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q20" id="q20" value="4">
                                        <label class="form-check-label" for="q20">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q20" id="q20" value="5">
                                        <label class="form-check-label" for="q20">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back3" class="btn btn-primary">Back</div>
                                        <div id="next4" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section5">
                            {{-- QUESTION 21 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">21. Saya orang yang tenang dan pendiam.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q21" id="q21" value="1">
                                        <label class="form-check-label" for="q21">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q21" id="q21" value="2">
                                        <label class="form-check-label" for="q21">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q21" id="q21" value="3">
                                        <label class="form-check-label" for="q21">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q21" id="q21" value="4">
                                        <label class="form-check-label" for="q21">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q21" id="q21" value="5">
                                        <label class="form-check-label" for="q21">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 22 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">22. Saya cenderung mudah percaya sesuatu.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q22" id="q22" value="1">
                                        <label class="form-check-label" for="q22">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q22" id="q22" value="2">
                                        <label class="form-check-label" for="q22">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q22" id="q22" value="3">
                                        <label class="form-check-label" for="q22">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q22" id="q22" value="4">
                                        <label class="form-check-label" for="q22">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q22" id="q22" value="5">
                                        <label class="form-check-label" for="q22">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 23 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">23. Saya cenderung orang yang pemalas.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q23" id="q23" value="1">
                                        <label class="form-check-label" for="q23">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q23" id="q23" value="2">
                                        <label class="form-check-label" for="q23">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q23" id="q23" value="3">
                                        <label class="form-check-label" for="q23">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q23" id="q23" value="4">
                                        <label class="form-check-label" for="q23">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q23" id="q23" value="5">
                                        <label class="form-check-label" for="q23">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 24 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">24. Saya stabil secara emosi, tidak mudah kesal.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q24" id="q24" value="1">
                                        <label class="form-check-label" for="q24">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q24" id="q24" value="2">
                                        <label class="form-check-label" for="q24">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q24" id="q24" value="3">
                                        <label class="form-check-label" for="q24">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q24" id="q24" value="4">
                                        <label class="form-check-label" for="q24">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q24" id="q24" value="5">
                                        <label class="form-check-label" for="q24">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 25 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">25. Saya orang yang senang menciptakan hal baru.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q25" id="q25" value="1">
                                        <label class="form-check-label" for="q25">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q25" id="q25" value="2">
                                        <label class="form-check-label" for="q25">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q25" id="q25" value="3">
                                        <label class="form-check-label" for="q25">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q25" id="q25" value="4">
                                        <label class="form-check-label" for="q25">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q25" id="q25" value="5">
                                        <label class="form-check-label" for="q25">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back4" class="btn btn-primary">Back</div>
                                        <div id="next5" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section6">
                            {{-- QUESTION 26 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">26. Saya memiliki kepribadian yang asertif atau tegas.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q26" id="q26" value="1">
                                        <label class="form-check-label" for="q26">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q26" id="q26" value="2">
                                        <label class="form-check-label" for="q26">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q26" id="q26" value="3">
                                        <label class="form-check-label" for="q26">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q26" id="q26" value="4">
                                        <label class="form-check-label" for="q26">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q26" id="q26" value="5">
                                        <label class="form-check-label" for="q26">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 27 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">27. Saya pribadi yang dingin dan senang menyendiri.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q27" id="q27" value="1">
                                        <label class="form-check-label" for="q27">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q27" id="q27" value="2">
                                        <label class="form-check-label" for="q27">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q27" id="q27" value="3">
                                        <label class="form-check-label" for="q27">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q27" id="q27" value="4">
                                        <label class="form-check-label" for="q27">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q27" id="q27" value="5">
                                        <label class="form-check-label" for="q27">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 28 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">28. Saya sangat gigih dan tekun dalam mengerjakan pekerjaan sampai selesai.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q28" id="q28" value="1">
                                        <label class="form-check-label" for="q28">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q28" id="q28" value="2">
                                        <label class="form-check-label" for="q28">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q28" id="q28" value="3">
                                        <label class="form-check-label" for="q28">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q28" id="q28" value="4">
                                        <label class="form-check-label" for="q28">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q28" id="q28" value="5">
                                        <label class="form-check-label" for="q28">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 29 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">29. Saya bisa menjadi sangat moody (suasana hati yang berubah-ubah).</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q29" id="q29" value="1">
                                        <label class="form-check-label" for="q29">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q29" id="q29" value="2">
                                        <label class="form-check-label" for="q29">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q29" id="q29" value="3">
                                        <label class="form-check-label" for="q29">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q29" id="q29" value="4">
                                        <label class="form-check-label" for="q29">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q29" id="q29" value="5">
                                        <label class="form-check-label" for="q29">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 30 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">30. Saya sangat memperhatikan nilai seni, dan menghargai pengalaman estetika.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q30" id="q30" value="1">
                                        <label class="form-check-label" for="q30">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q30" id="q30" value="2">
                                        <label class="form-check-label" for="q30">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q30" id="q30" value="3">
                                        <label class="form-check-label" for="q30">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q30" id="q30" value="4">
                                        <label class="form-check-label" for="q30">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q30" id="q30" value="5">
                                        <label class="form-check-label" for="q30">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back5" class="btn btn-primary">Back</div>
                                        <div id="next6" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section7">
                            {{-- QUESTION 31 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">31. Saya pemalu, sehingga kadang tidak bisa bertingkah biasa didepan umum.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q31" id="q31" value="1">
                                        <label class="form-check-label" for="q31">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q31" id="q31" value="2">
                                        <label class="form-check-label" for="q31">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q31" id="q31" value="3">
                                        <label class="form-check-label" for="q31">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q31" id="q31" value="4">
                                        <label class="form-check-label" for="q31">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q31" id="q31" value="5">
                                        <label class="form-check-label" for="q31">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 32 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">32. Saya bersikap penuh perhatian dan baik kepada hampir semua orang.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q32" id="q32" value="1">
                                        <label class="form-check-label" for="q32">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q32" id="q32" value="2">
                                        <label class="form-check-label" for="q32">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q32" id="q32" value="3">
                                        <label class="form-check-label" for="q32">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q32" id="q32" value="4">
                                        <label class="form-check-label" for="q32">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q32" id="q32" value="5">
                                        <label class="form-check-label" for="q32">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 33 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">33. Saya melakukan banyak hal secara efisien.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q33" id="q33" value="1">
                                        <label class="form-check-label" for="q33">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q33" id="q33" value="2">
                                        <label class="form-check-label" for="q33">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q33" id="q33" value="3">
                                        <label class="form-check-label" for="q33">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q33" id="q33" value="4">
                                        <label class="form-check-label" for="q33">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q33" id="q33" value="5">
                                        <label class="form-check-label" for="q33">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 34 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">34. Saya bisa tetap tenang meski dalam situasi tegang.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q34" id="q34" value="1">
                                        <label class="form-check-label" for="q34">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q34" id="q34" value="2">
                                        <label class="form-check-label" for="q34">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q34" id="q34" value="3">
                                        <label class="form-check-label" for="q34">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q34" id="q34" value="4">
                                        <label class="form-check-label" for="q34">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q34" id="q34" value="5">
                                        <label class="form-check-label" for="q34">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 35 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">35. Saya lebih memilih mengerjakan sesuatu yang dilakukan secara rutin.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q35" id="q35" value="1">
                                        <label class="form-check-label" for="q35">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q35" id="q35" value="2">
                                        <label class="form-check-label" for="q35">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q35" id="q35" value="3">
                                        <label class="form-check-label" for="q35">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q35" id="q35" value="4">
                                        <label class="form-check-label" for="q35">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q35" id="q35" value="5">
                                        <label class="form-check-label" for="q35">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back6" class="btn btn-primary">Back</div>
                                        <div id="next7" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section8">
                            {{-- QUESTION 36 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">36. Saya orang yang mudah bergaul dan senang bergaul.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q36" id="q36" value="1">
                                        <label class="form-check-label" for="q36">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q36" id="q36" value="2">
                                        <label class="form-check-label" for="q36">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q36" id="q36" value="3">
                                        <label class="form-check-label" for="q36">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q36" id="q36" value="4">
                                        <label class="form-check-label" for="q36">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q36" id="q36" value="5">
                                        <label class="form-check-label" for="q36">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 37 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">37. Saya terkadang kasar kepada orang lain.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q37" id="q37" value="1">
                                        <label class="form-check-label" for="q37">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q37" id="q37" value="2">
                                        <label class="form-check-label" for="q37">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q37" id="q37" value="3">
                                        <label class="form-check-label" for="q37">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q37" id="q37" value="4">
                                        <label class="form-check-label" for="q37">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q37" id="q37" value="5">
                                        <label class="form-check-label" for="q37">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 38 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">38. Saya senang membuat rencana dan menjalankannya sesuai dengan rencana tersebut.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q38" id="q38" value="1">
                                        <label class="form-check-label" for="q38">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q38" id="q38" value="2">
                                        <label class="form-check-label" for="q38">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q38" id="q38" value="3">
                                        <label class="form-check-label" for="q38">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q38" id="q38" value="4">
                                        <label class="form-check-label" for="q38">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q38" id="q38" value="5">
                                        <label class="form-check-label" for="q38">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 39 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">39. Saya orang yang mudah gugup.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q39" id="q39" value="1">
                                        <label class="form-check-label" for="q39">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q39" id="q39" value="2">
                                        <label class="form-check-label" for="q39">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q39" id="q39" value="3">
                                        <label class="form-check-label" for="q39">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q39" id="q39" value="4">
                                        <label class="form-check-label" for="q39">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q39" id="q39" value="5">
                                        <label class="form-check-label" for="q39">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 40 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">40. Saya senang berhayal dan bermain dengan ide.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q40" id="q40" value="1">
                                        <label class="form-check-label" for="q40">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q40" id="q40" value="2">
                                        <label class="form-check-label" for="q40">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q40" id="q40" value="3">
                                        <label class="form-check-label" for="q40">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q40" id="q40" value="4">
                                        <label class="form-check-label" for="q40">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q40" id="q40" value="5">
                                        <label class="form-check-label" for="q40">5</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back7" class="btn btn-primary">Back</div>
                                        <div id="next8" class="btn btn-primary">Next</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="section9">
                            {{-- QUESTION 41 --}}
                            <div class="d-flex justify-content-center">
                                <ul class="list-group list-group-horizontal border-0 mx-auto">
                                    <li class="list-group-item border-0 fw-bold">1 (Sangat Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">2 (Tidak Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">3 (Netral)</li>
                                    <li class="list-group-item border-0 fw-bold">4 (Setuju)</li>
                                    <li class="list-group-item border-0 fw-bold">5 (Sangat Setuju)</li>
                                </ul>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">41. Saya hanya memiliki sedikit minat dalam bidang artistik.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q41" id="q41" value="1">
                                        <label class="form-check-label" for="q41">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q41" id="q41" value="2">
                                        <label class="form-check-label" for="q41">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q41" id="q41" value="3">
                                        <label class="form-check-label" for="q41">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q41" id="q41" value="4">
                                        <label class="form-check-label" for="q41">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q41" id="q41" value="5">
                                        <label class="form-check-label" for="q41">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 42 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">42. Saya senang bekerjasama dengan orang lain.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q42" id="q42" value="1">
                                        <label class="form-check-label" for="q42">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q42" id="q42" value="2">
                                        <label class="form-check-label" for="q42">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q42" id="q42" value="3">
                                        <label class="form-check-label" for="q42">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q42" id="q42" value="4">
                                        <label class="form-check-label" for="q42">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q42" id="q42" value="5">
                                        <label class="form-check-label" for="q42">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 43 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">43. Konsentrasi saya mudah terganggu.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q43" id="q43" value="1">
                                        <label class="form-check-label" for="q43">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q43" id="q43" value="2">
                                        <label class="form-check-label" for="q43">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q43" id="q43" value="3">
                                        <label class="form-check-label" for="q43">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q43" id="q43" value="4">
                                        <label class="form-check-label" for="q43">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q43" id="q43" value="5">
                                        <label class="form-check-label" for="q43">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- QUESTION 44 --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">44. Saya handal dalam bidang seni, musik, dan sastra.</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q44" id="q44" value="1">
                                        <label class="form-check-label" for="q44">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q44" id="q44" value="2">
                                        <label class="form-check-label" for="q44">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q44" id="q44" value="3">
                                        <label class="form-check-label" for="q44">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q44" id="q44" value="4">
                                        <label class="form-check-label" for="q44">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="q44" id="q44" value="5">
                                        <label class="form-check-label" for="q44">5</label>
                                    </div>
                                </div>
                            </div>

                            {{-- Username Twitter --}}
                            <div class="mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label">Silahkan masukkan username Twitter Anda.</label>
                                <div class="col-sm-5">
                                    <input id="username" name="username" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="mb-3">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div id="back8" class="btn btn-primary">Back</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- SUBMIT BUTTON --}}
                        <div id="sectionSubmit">
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('js')
    <script>
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
            event.preventDefault();
            return false;
            }
        });
        $( document ).ready(function() {
            $('#section1').show();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        });

        $("#next1").click(function () {
            $('#section1').hide();
            $('#section2').show();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next2").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').show();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next3").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').show();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next4").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').show();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next5").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').show();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next6").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').show();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next7").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').show();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#next8").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').show();
            $('#sectionSubmit').show();
        })

        $("#back1").click(function () {
            $('#section1').show();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back2").click(function () {
            $('#section1').hide();
            $('#section2').show();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back3").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').show();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back4").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').show();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back5").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').show();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back6").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').show();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back7").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').show();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })

        $("#back8").click(function () {
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').show();
            $('#section9').hide();
            $('#section10').hide();
            $('#sectionSubmit').hide();
        })
    </script>
@endpush

<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    window.onload = function () {
        var duration = 60 * 15; // durasi timer dalam detik (25 menit)
        var display = document.querySelector('#timer');
        startTimer(duration, display);
    };
</script>