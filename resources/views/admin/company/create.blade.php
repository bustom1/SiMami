@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1><a href="{{ route('admin.company.index') }}" class="text-dark">Create Perusahaan</a></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.company.index') }}">Perusahaan</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-md-6 col-lg-12">
                <div class="card top-selling overflow-auto">
                    <div class="card-body pb-0 table-responsive">

                        <h4 class="card-title">Create Perusahaan</h4>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputLogo" class="col-sm-4 col-xxl-1 col-form-label">Profile</label>
                                <div class="col-sm-11">
                                    <input id="inputLogo" class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNama" class="col-sm-4 col-xxl-1 col-form-label">Nama</label>
                                <div class="col-sm-11">
                                    <input id="inputNama" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-4 col-xxl-1 col-form-label">Email</label>
                                <div class="col-sm-11">
                                    <input id="inputEmail" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAlamat" class="col-sm-4 col-xxl-1 col-form-label">Alamat</label>
                                <div class="col-sm-11">
                                    <input id="inputAlamat" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-4 col-xxl-1 col-form-label">Password</label>
                                <div class="col-sm-11">
                                    <input id="inputPassword" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhone" class="col-sm-4 col-xxl-1 col-form-label">No Hp</label>
                                <div class="col-sm-11">
                                    <input id="inputPhone" type="number" class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputAbout" class="col-sm-3 col-xxl-1 col-form-label">About Us</label>
                                <div class="col-sm-11">
                                    <textarea id="inputAbout" class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-xxl-1 col-form-label">Kategori</label>
                                <div class="col-sm-11">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Kategori</option>
                                        <option value="1">Keuangan</option>
                                        <option value="2">Ritel</option>
                                        <option value="3">Manufaktur</option>
                                        <option value="4">Jasa</option>
                                        <option value="5">Edukasi</option>
                                        <option value="6">Media</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputWeb" class="col-sm-4 col-xxl-1 col-form-label">Website</label>
                                <div class="col-sm-11 col-xxl-11">
                                    <input id="inputWeb" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="card row mb-3 ms-3 ps-2 pb-5 pt-2 me-3">
                                <div class="fs-3 fw-semibold mb-3">Sosial Media</div>

                                <div class="row col-sm-4 col-xxl-12">
                                    <div class="col">
                                        <label for="inputFacebook" class="col-form-label">Facebook <i
                                                class="bi bi-facebook"></i></label>
                                        <input id="inputFacebook" type="number" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="inputInstagram" class="col-form-label">Instagram <i
                                                class="bi bi-instagram"></i></label>
                                        <input id="inputInstagram" type="number" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="inputTwitter" class="col-form-label">Twitter <i
                                                class="bi bi-twitter"></i></label>
                                        <input id="inputTwitter" type="number" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="inputLinkedi" class="col-form-label">Linkedin <i
                                                class="bi bi-linkedin"></i></label>
                                        <input id="inputLinkedi" type="number" class="form-control">
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-3 pt-3 pb-4 justify-content-center">
                                <label class=" col-form-label"></label>
                                <div class="col-sm-3 col-xxl-3 ps-5 me-4 pb-4 ">
                                    <a href="{{ route('admin.company.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                                <div class="col-sm-3 col-xxl-2 ms-4">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form>
                        <!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
