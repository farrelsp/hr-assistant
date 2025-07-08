@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">

            @if (Auth::user()->role == 'admin')

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                    <div class="card-body">
                    <h5 class="card-title">Total Applicant<span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{$candidate}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                        <span class="text-muted small pt-2 ps-1">Applicants</span>

                        </div>
                    </div>
                    </div>

                </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                    <h5 class="card-title">Candidate Accepted<span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-check"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{$candidateAccepted}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                        <span class="text-muted small pt-2 ps-1">Candidates</span>

                        </div>
                    </div>
                    </div>

                </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-4">

                <div class="card info-card customers-card">

                    <div class="card-body">
                    <h5 class="card-title">Candidate Rejected<span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-x"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{$candidateRejected}}</h6>
                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}
                        <span class="text-muted small pt-2 ps-1">Candidates</span>

                        </div>
                    </div>

                    </div>
                </div>

                </div><!-- End Customers Card -->

            @elseif (Auth::user()->role == 'user')

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                        <h5 class="card-title">My Application<span>| All Time</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                            <h6>{{ $application }}</h6>
                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                            <span class="text-muted small pt-2 ps-1">Applications</span>

                            </div>
                        </div>
                        </div>

                    </div>
                </div>

            @endif

            <!-- Reports -->
            <div class="col-12">
            <div class="card">

                <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
                </div>

                {{-- <div class="card-body">
                <h5 class="card-title">Reports <span>/Year</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                        name: 'Sales',
                        data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                        name: 'Revenue',
                        data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                        name: 'Customers',
                        data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                            show: false
                        },
                        },
                        markers: {
                        size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                        type: "gradient",
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                        }
                        },
                        dataLabels: {
                        enabled: false
                        },
                        stroke: {
                        curve: 'smooth',
                        width: 2
                        },
                        xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                        x: {
                            format: 'dd/MM/yy HH:mm'
                        },
                        }
                    }).render();
                    });
                </script>
                <!-- End Line Chart -->

                </div>

            </div>
            </div><!-- End Reports --> --}}

        </div>
        </div><!-- End Left side columns -->

    </div>

    </section>

@endsection