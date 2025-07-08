@extends('layouts.layout')

@section('title', 'Detail Candidate')

@section('content')

<div class="pagetitle">
    <h1>Detail Candidate</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Candidate</li>
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="/candidate" class="btn btn-secondary">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Detail Candidate</h5>
        
                    <div class="container-fluid">
                        <br><h4 class="card-text font-weight-bold">Profile Candidate</h4><br>
                        <div class="container-fluid">
                            <div class="form-group row">
                                <p class=" col-sm-3 font-weight-bold">Name</p>
                                <div class="col-sm-9">
                                    <p>: {{$candidate->first_name}} {{$candidate->last_name}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Gender</p>
                                <div class="col-sm-9">
                                    <p>: 
                                        @if ($candidate->gender == 'M')
                                            Male
                                        @else
                                            Female
                                        @endif
                                    </p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Date of Birth</p>
                                <div class="col-sm-9">
                                    <p>: {{$candidate->date_of_birth}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Address</p>
                                <div class="col-sm-9">
                                    <p>: {{$candidate->address}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Phone Number</p>
                                <div class="col-sm-9">
                                    <p>: {{$candidate->no_hp}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Position</p>
                                <div class="col-sm-9">
                                    <p>: {{$candidate->position}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">Summary Candidate</p>
                                <div class="col-sm-9">
                                    <p style="text-align: justify">: {{$candidate->tell_me_yourself}}</p>
                                </div>
                                <p class=" col-sm-3 font-weight-bold">File CV</p>
                                <div class="col-sm-9">
                                    <a href="/getfile/{{$candidate->id}}">: {{$candidate->cv}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container-fluid">
                        <h4 class="card-text font-weight-bold">Test Result</h4><br>
                        <div class="container-fluid">
                            <div class="form-group row">
                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <p class=" col-sm-3">Dominant Personality</p>
                                        <div class="col-sm-9">
                                            <p>: {{$candidate->personality}}</p>
                                        </div>
                                        <p class=" col-sm-3">Description</p>
                                        <div class="col-sm-9">
                                            <p style="text-align: justify">: 
                                                @if ($candidate->personality == 'Agreeableness')
                                                    Orang yang memiliki tingkat kesetujuan yang tinggi cenderung menjadi orang yang bersahabat, mudah bergaul, dan dapat dipercaya. Mereka cenderung memiliki empati yang tinggi terhadap orang lain dan lebih fokus pada hubungan interpersonal yang positif. Orang yang memiliki tingkat kesetujuan yang rendah cenderung lebih kritis dan skeptis terhadap orang lain, dan lebih fokus pada kepentingan pribadi.
                                                @elseif ($candidate->personality == 'Conscientiousness')
                                                    Orang yang memiliki tingkat konsientius yang tinggi cenderung menjadi orang yang dapat dipercaya, pekerja keras, dan bertanggung jawab. Mereka cenderung memiliki tujuan hidup yang jelas dan berusaha untuk mencapainya dengan cara yang terstruktur dan terorganisir. Orang yang memiliki tingkat konsientius yang rendah cenderung lebih santai, kurang teratur, dan kurang fokus pada tujuan hidup jangka panjang.
                                                @elseif ($candidate->personality == 'Extraversion')
                                                    Orang yang memiliki tingkat ekstroversi yang tinggi cenderung menjadi orang yang energik, antusias, dan bersosialisasi dengan mudah. Mereka cenderung menjadi pusat perhatian dalam sebuah kelompok dan lebih senang berada di lingkungan yang ramai. Orang yang memiliki tingkat ekstroversi yang rendah cenderung lebih introvert, pendiam, dan lebih senang berada di lingkungan yang tenang dan damai.
                                                @elseif ($candidate->personality == 'Neuroticism')
                                                    Orang yang memiliki tingkat neurotisme yang tinggi cenderung lebih cemas, rentan, dan mudah merasa tertekan. Mereka cenderung lebih sensitif terhadap perubahan dalam hidup mereka dan lebih rentan terhadap stres dan kecemasan. Orang yang memiliki tingkat neurotisme yang rendah cenderung lebih stabil emosinya dan lebih tenang dalam menghadapi tekanan dan tantangan hidup.
                                                @elseif ($candidate->personality == 'Openness')
                                                    Orang yang memiliki tingkat keterbukaan yang tinggi cenderung memiliki imajinasi yang kuat, kreatif, dan seringkali menjadi seniman atau penulis. Mereka cenderung memiliki minat yang beragam dan lebih mudah menerima hal baru dan berbeda. Orang yang memiliki tingkat keterbukaan yang rendah cenderung lebih tradisional, praktis, dan berorientasi pada keamanan.
                                                @endif
                                            </p>
                                        </div>
                                        <p class=" col-sm-3">Score</p>
                                        <div class="col-sm-9">
                                            <p>: </p>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <h6 class="card-text font-weight-bold">Test Scores</h6>
                                        <div class="row">
                                            <div id="pieChartContainer"></div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered" style="text-align: center">
                                                    <thead>
                                                        <tr>
                                                            <th width="20%">Agreeableness</th>
                                                            <th width="20%">Conscientiousness</th>
                                                            <th width="20%">Extraversion</th>
                                                            <th width="20%">Neuroticism</th>
                                                            <th width="20%">Openness</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$candidate->test_score_a}}</td>
                                                            <td>{{$candidate->test_score_c}}</td>
                                                            <td>{{$candidate->test_score_e}}</td>
                                                            <td>{{$candidate->test_score_n}}</td>
                                                            <td>{{$candidate->test_score_o}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="container-fluid">
                                        <h6 class="card-text font-weight-bold">Final Result (Combined with Candidate's Tweets)</h6>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" style="text-align: center">
                                                    <thead>
                                                        <tr>
                                                            <th width="20%">Agreeableness</th>
                                                            <th width="20%">Conscientiousness</th>
                                                            <th width="20%">Extraversion</th>
                                                            <th width="20%">Neuroticism</th>
                                                            <th width="20%">Openness</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$candidate->test_result_a}}</td>
                                                            <td>{{$candidate->test_result_c}}</td>
                                                            <td>{{$candidate->test_result_e}}</td>
                                                            <td>{{$candidate->test_result_n}}</td>
                                                            <td>{{$candidate->test_result_o}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="container-fluid">
                        {{-- <h4 class="card-text font-weight-bold">Selection</h4> --}}
                        
                        {{-- <form action="/selectionCandidate/{{$candidate->id}}" method="POST" class="needs-validation" novalidate>

                            @csrf --}}

                            <br>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-1">
                                    <a href="/rejectRegister/{{$candidate->id}}" class="btn btn-danger">
                                    {{-- <button type="submit" class="btn btn-danger"> --}}
                                        Reject
                                    {{-- </button> --}}
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    {{-- <button type="submit" class="btn btn-primary">Accept</button> --}}
                                    <a href="/acceptCandidate/{{$candidate->id}}" class="btn btn-success">
                                    {{-- <button type="submit" class="btn btn-danger"> --}}
                                        Accept
                                    {{-- </button> --}}
                                    </a>
                                </div>
                            </div>

                        {{-- </form> --}}

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection