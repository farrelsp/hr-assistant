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
                    <h4 class="card-title" style="text-align: center">Personality Test</h4>

                    <div class="container-fluid">
                        <h5>Instruksi Umum:</h5><br>
                        <div class="container-fluid">
                            {{-- <ul class="list-unstyled"> --}}
                                <li class="list-item">Tes ini tidak ada benar dan salah, mohon diisi dengan sungguh-sungguh sesuai dengan keadaan diri Anda saat ini.</li>
                                <li class="list-item">Tes ini bersifat rahasia dan dijamin kerahasiaan data pribadi.</li>
                                <li class="list-item">Usahakan Anda mengerjakan tes ini dalam kondisi tenang dan fokus.</li>
                            {{-- </ul> --}}
                        </div>
                        <br><br>
                        <h5>Instruksi Tes:</h5><br>
                        <div class="container-fluid">
                            {{-- <ul class="list-unstyled"> --}}
                                <li class="list-item">Cara mengerjakan personality test ini dapat dilakukan dengan memilih salah satu jawaban dengan rentang nilai 1-5 berdasarkan pernyataan yang diberikan.</li>
                                <li class="list-item">Berikut penjelasan mengenai opsi jawaban yang diberikan:</li>
                                    <ul>
                                        <div>- 1 = Sangat Tidak Setuju</div>
                                        <div>- 2 = Tidak Setuju</div>
                                        <div>- 3 = Netral</div>
                                        <div>- 4 = Setuju</div>
                                        <div>- 5 = Sangat Setuju</div>
                                    </ul>
                                <li class="list-item">Pastikan Anda mengisi semuanya, jangan sampai ada yang terlewat.</li>
                            {{-- </ul> --}}
                        </div>
                        <br><br><br>
                        <center>
                            <a href="/personalityTest" class="btn btn-primary btn-sm" title="Start Test">
                                Mulai Tes
                            </a>
                        </center>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection