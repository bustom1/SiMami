@extends('layouts.user')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1><a class="text-dark">Daftar Lowongan Magang</a></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Lowongan Magang</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->


    <div class="card container-fluid">
        <div class="fw-semibold fs-2 pt-3 text-center ">Daftar Lowongan Magang</div>
        <div class="row justify-content-evenly ">
            <div class="col-xxl-10 col-sm-12 pt-3 pb-5 ">
                <div class="row gy-2 justify-content-around">

                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3">
                                        <img src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Cyber Security</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">Pt.Data Cloud</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3">
                                        <img src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Melissa Blue</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">MANAGER CHO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3">
                                        <img src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Kiara Advain</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CEO OF EMPIRO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3">
                                        <img src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Jhonson Smith</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CHIEF SECRETARY MBIO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3"> <img
                                            src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Dwayne Stort</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CEO ARMEDILLO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3"> <img
                                            src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Jasmine Kova</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">AGGENT AMIO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3"> <img
                                            src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Dolph MR</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CEO MR BRAND</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3"> <img
                                            src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Brenda Simpson</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CEO AIBMO</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3 mt-3"> <span
                                        class="avatar avatar-md avatar-rounded me-3"> <img
                                            src="{{ asset('admin/assets/img/favicon.png') }}" alt=""> </span>
                                    <div>
                                        <p class="mb-0 fw-semibold fs-14 text-primary">Julia Sams</p>
                                        <p class="mb-0 fs-10 fw-semibold text-muted">CHIEF SECRETARY BHOL</p>
                                    </div>
                                </div>
                                <div class="mb-3"> <span class="text-muted">- Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Earum autem quaerat distinctio</span> </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">Jumlah : </span>
                                        <span class="text-dark d-block ms-1">
                                            3
                                        </span>
                                    </div>
                                    <div class="float-end fs-12 fw-semibold text-muted text-end"> <span>12 Pelamar</span>
                                        <span class="d-block fw-normal fs-12 text-success"><i>2 Maret 2024 </i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
