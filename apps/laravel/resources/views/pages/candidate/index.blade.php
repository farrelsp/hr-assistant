@extends('layouts.layout')

@section('title', 'Candidate')

@section('content')

<div class="pagetitle">
    <h1>Candidate</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Candidate</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Candidates</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Position</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidate as $candidates)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td>{{$candidates->first_name}} {{$candidates->last_name}}</td>
                                    <td>{{$candidates->date_of_birth}}</td>
                                    <td>{{$candidates->position}}</td>
                                    <td>
                                        @if ($candidates->status == 'review')
                                            Pending
                                        @elseif ($candidates->status == 'accepted')
                                            <div style="color: greenyellow">Accepted</div>
                                        @elseif ($candidates->status == 'rejected')
                                            <div style="color: red">Rejected</div>
                                        @endif
                                    </td>
                                    <td align="center">
                                        {{-- <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$candidates['id']}}"><i class="bi bi-eye"></i></button> --}}
                                        {{-- <a href="{{$candidates->id}}/detailCandidate" class="btn btn-sm btn-primary" title="Detail"><i class="bi bi-eye"></i></a>
                                        <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$candidates['id']}}"><i class="bi bi-pencil-square"></i></button>
                                        <a href="{{$candidates->id}}/deleteCandidate" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a> --}}
                                        @if ($candidates->status == 'review')
                                        <a href="{{$candidates->id}}/detailCandidate" class="btn btn-success btn-sm" title="Review">
                                            {{-- <i class="bi bi-eye"></i> --}}Review
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
    
@endsection