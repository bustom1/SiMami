@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1><a href="{{ route('admin.magang.index') }}" class="text-dark">Create Magang</a></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.magang.index') }}">Lowongan Magang</a></li>
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

                        <h4 class="card-title">Create Magang</h4>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputPosisi" class="col-sm-4 col-xxl-2 col-form-label">Posisi Magang</label>
                                <div class="col-sm-12 col-xxl-4">
                                    <input id="inputPosisi" type="text" class="form-control">
                                </div>
                                <label for="inputJmlMagang" class="col-sm-5 col-xxl-2 col-form-label">Jumlah Peserta Magang</label>
                                <div class="col-sm-12 col-xxl-4">
                                    <input id="inputJmlMagang" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="startMagang" class="col-sm-4 col-xxl-2 col-form-label">Tanggal Magang</label>
                                <div class="col-xxl-4 mb-sm-3 col-sm-12">
                                    <input id="startMagang" type="date" class="form-control">
                                </div>

                                <label for="endMagang" class="col-sm-5 col-xxl-2 col-form-label ">Tanggal Selesai Magang</label>
                                <div class="col-xxl-4 col-sm-12">
                                    <input id="endMagang" type="date" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputAbout" class="col-sm-3 col-xxl-2 col-form-label">Kriteria Magang</label>
                                <div class="col-sm-12 col-xxl-10">
                                    <textarea id="inputAbout" class="form-control" style="height: 100px" placeholder="Sebutkan Kriteria Pendaftar Magang "></textarea>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="inputWeb" class="col-sm-4 col-xxl-1 col-form-label">Website</label>
                                <div class="col-sm-11 col-xxl-11">
                                    <input id="inputWeb" type="text" class="form-control"
                                        placeholder="Link Website Perusahaan">
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-3 col-xxl-2 col-form-label">Minimal Semester</label>
                                <div class="col-sm-12 col-xxl-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>

                                <label for="expLowongan" class="col-sm-5 col-xxl-2 col-form-label ">Tanggal Tutup Pendafar</label>
                                <div class="col-xxl-4 col-sm-12">
                                    <input id="expLowongan" type="date" class="form-control">
                                </div>                                
                            </div>

                            <div class="row mb-3 pb-4 justify-content-center">
                                <label class=" col-form-label"></label>
                                <div class="col-sm-3 col-xxl-3 ps-5 me-4 pb-4 ">
                                    <a href="{{ route('admin.magang.index') }}" class="btn btn-secondary">Kembali</a>
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
