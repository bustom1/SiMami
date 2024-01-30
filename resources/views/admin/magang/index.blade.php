@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Lowongan Magang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Lowongan Magang</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->


    <div class="container-fluid">
        <div class="row">
            <div class=" col-xxl-12 col-md-6">
                <div class="card top-selling overflow-auto">

                    <div class="card-body pb-0 table-responsive">
                        <div class="position-absolute top-0 end-0 mt-3 me-5">
                            <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add
                                Magang</button>
                        </div>


                        <h5 class="card-title">Lowongan Magang Perusahaan</h5>


                        <table class="table table-hover table-striped datatable">
                            <thead>
                                <tr>
                                    <th scope="col" style="max-width: 30%;">Nama Perusahaan</th>
                                    <th scope="col" class="text-center">Posisi</th>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Lowongan</th>
                                    <th scope="col" class="text-center">Expired</th>
                                    <th scope="col" class="text-center">Pendaftar</th>
                                    <th scope="col" class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="word-wrap: break-word;">
                                        <a href="#" class="text-primary fw-bold">PT.Sepatu ID</a>
                                        <p>Jl.Jakarta No.10 Indonesia</p>
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
                                    <td class="fw-bold text-center align-middle text-danger">9</td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary rounded me-2 "><i
                                                    class="ri-edit-2-fill"></i></button>
                                            <button class="btn btn-secondary rounded ms-2 me-2"><i
                                                    class="ri-delete-bin-5-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Cv.Jam Tangan</a>
                                        <p>Jawa Timur Surabaya Rt.04 Rw.04 </p>
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
                                    <td class="fw-bold text-center text-success align-middle">6</td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary rounded me-2 "><i
                                                    class="ri-edit-2-fill"></i></button>
                                            <button class="btn btn-secondary rounded ms-2 me-2"><i
                                                    class="ri-delete-bin-5-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Pt.Kacamata</a>
                                        <p>Jl. Malang</p>
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
                                    <td class="fw-bold text-center text-warning align-middle">3</td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary rounded me-2 "><i
                                                    class="ri-edit-2-fill"></i></button>
                                            <button class="btn btn-secondary rounded ms-2 me-2"><i
                                                    class="ri-delete-bin-5-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
