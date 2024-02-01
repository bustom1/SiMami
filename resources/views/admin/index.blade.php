@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">

                    <!-- Magang Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Lowongan Magang</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Magang Card -->

                    <!-- Gatau Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Lamaran Magang</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check-square-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>32</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Revenue Card -->

                    <!-- Mahasiswa Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">Mahasiswa Magang</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>44</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Mahasiswa Card -->


                    <!-- Mahasiswa Magang  -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <h5 class="card-title">Mahasiswa Magang</h5>

                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">7</a></th>
                                            <td>Kevin Anderson</td>
                                            <td><a href="#" class="text-primary">Informatika</a></td>
                                            <td>4</td>
                                            <td><span class="badge bg-danger">Ditolak</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">2</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">Akutansi</a></td>
                                            <td>7</td>
                                            <td><span class="badge bg-warning">Melamar</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">3</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">Manajemen</a></td>
                                            <td>4</td>
                                            <td><span class="badge bg-success">Magang</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">1</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">Informatika</a></td>
                                            <td>4</td>
                                            <td><span class="badge bg-warning">Melamar</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">5</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="#" class="text-primary">Informatika</a></td>
                                            <td>4</td>
                                            <td><span class="badge bg-success">Magang</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">6</a></th>
                                            <td>Nice Lehner</td>
                                            <td><a href="#" class="text-primary">Informatika</a></td>
                                            <td>2</td>
                                            <td><span class="badge bg-danger">Ditolak</span></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent -->

                    <!-- Daftar Perusahaan -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-0">
                                <h5 class="card-title">Daftar Lowongan Magang</h5>

                                <table class="table table-hover table-striped datatable">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">Icon</th> --}}
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col" class="text-center">Posisi</th>
                                            <th scope="col" class="text-center">Waktu</th>
                                            <th scope="col" class="text-center">Lowongan</th>
                                            <th scope="col" class="text-center">Expired</th>
                                            <th scope="col" class="text-center">Pendaftar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="word-wrap: break-word;">
                                                <div class="d-flex fw-semibold align-items-center " >
                                                    <span class="avatar avatar-sm me-2 ">
                                                        <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                            src="{{ asset('admin/assets/img/product-1.jpg') }}" alt=""
                                                            srcset="">
                                                    </span>
                                                    <div class="d-flex row">
                                                        <a href="#" class="text-primary fw-bold">PT.Sepatu ID</a>
                                                        <p>Jl.Jakarta No.10 Indonesia</p>
                                                    </div>
                                                </div>
                                                
                                            </td>
                                            <td class="text-center align-middle center">Developer</td>
                                            <td class="text-center align-middle">
                                                <div class="d-xxl-flex flex-column">
                                                    <div>19 Januari 2024</div>
                                                    <div>2 Maret 2024</div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle ">4</td>
                                            <td class="text-center align-middle ">10 Januari 2024</td>
                                            <td class="fw-bold text-center align-middle "><a class="bg-danger ps-3 pe-3 pb-2 pt-2 text-light rounded">9</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex fw-semibold align-items-center " >
                                                    <span class="avatar avatar-sm me-2 ">
                                                        <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                            src="{{ asset('admin/assets/img/product-2.jpg') }}" alt=""
                                                            srcset="">
                                                    </span>
                                                    <div class="d-flex row">
        
                                                        <a href="#" class="text-primary fw-bold">Cv.Jam Tangan</a>
                                                        <p>Jawa Timur Surabaya Rt.04 Rw.04 </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">Content Creator</td>
                                            <td class="text-center align-middle">
                                                <div class="d-xxl-flex flex-column">
                                                    <div>5 Januari 2024</div>
                                                    <div>25 Februari 2024</div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">6</td>
                                            <td class="text-center align-middle">1 Januari 2024</td>
                                            <td class="fw-bold text-center align-middle "><a class="bg-info ps-3 pe-3 pb-2 pt-2 text-dark rounded">6</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex fw-semibold align-items-center " >
                                                    <span class="avatar avatar-sm me-2 ">
                                                        <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                            src="{{ asset('admin/assets/img/product-4.jpg') }}" alt=""
                                                            srcset="">
                                                    </span>
                                                    <div class="d-flex row">
                                                        <a href="#" class="text-primary fw-bold">Pt.Kacamata</a>
                                                        <p>Jl. Malang</p>
                                                    </div>
                                                </div>
        
                                            </td>
                                            <td class="text-center align-middle">Cyber Security</td>
                                            <td class="text-center align-middle">
                                                <div class="d-xxl-flex flex-column">
                                                    <div>28 Januari 2024</div>
                                                    <div>7 April 2024</div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">12</td>
                                            <td class="text-center align-middle">21 Januari 2024</td>
                                            <td class="fw-bold text-center align-middle "><a class="bg-warning ps-3 pe-3 pb-2 pt-2 text-dark rounded">4</a></td>
                                        </tr>
        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- End Daftar Perusahaan -->

                </div>
            </div><!-- End Left side columns -->


        </div>
    </section>
@endsection

@section('css')
@endsection

@section('js')
    <script src="assets/js/main.js"></script>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    top: '5%',
                    left: 'center'
                },
                series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [{
                            value: 1048,
                            name: 'Search Engine'
                        },
                        {
                            value: 735,
                            name: 'Direct'
                        },
                        {
                            value: 580,
                            name: 'Email'
                        },
                        {
                            value: 484,
                            name: 'Union Ads'
                        },
                        {
                            value: 300,
                            name: 'Video Ads'
                        }
                    ]
                }]
            });
        });
    </script>
@endsection
