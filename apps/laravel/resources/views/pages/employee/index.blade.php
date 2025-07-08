@extends('layouts.layout')

@section('title', 'Employee')

@section('content')

<div class="pagetitle">
    <h1>Employee</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Employee</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Employees</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employees)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td>{{$employees->first_name}} {{$employees->last_name}}</td>
                                    <td>{{$employees->position}}</td>
                                    <td>{{$employees->address}}</td>
                                    <td align="center">
                                        <button class="btn btn-sm btn-primary" title="Detail" data-toggle="modal" data-target="#detailData{{$employees['id']}}"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-warning" title="Edit" data-toggle="modal" data-target="#editData{{$employees['id']}}"><i class="bi bi-pencil-square"></i></button>
                                        <a href="{{$employees->id}}/deleteEmployee" class="btn btn-sm btn-danger hapusData" title="Hapus"><i class="bi bi-trash"></i></a>
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