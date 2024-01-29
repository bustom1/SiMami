@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
<div class="pagetitle">
    <h1>Magang</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Magang</li>
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
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add Magang</button>
                    </div>
                    

                    <h5 class="card-title">Daftar Magang Perusahaan</h5>
                    

                    <table class="table table-hover table-striped datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="max-width: 30%;">Nama Perusahaan</th>
                                <th scope="col" class="text-center">Posisi</th>
                                <th scope="col" class="text-center">Keterangan</th>
                                <th scope="col" class="text-center">Waktu</th>
                                <th scope="col" class="text-center">Lowongan</th>
                                <th scope="col" class="text-center">Magang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-1.jpg') }}"
                                            alt="" class="img-fluid rounded-start" style="max-width: 100%;"></a></th> --}}
                                <td style="word-wrap: break-word;">
                                    <a href="#" class="text-primary fw-bold">PT.Sepatu ID</a>
                                    <p>Lorem, ipsum dolor.</p>
                                </td>
                                <td class="text-center">Developer</td>
                                <td style="word-wrap: break-word;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.ceat officiis!</p></td>
                                <td class="text-center">2 Bulan</td>
                                <td class="text-center">4</td>
                                <td class="fw-bold text-center">4</td>
                            </tr>
                            <tr>
                                {{-- <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-2.jpg') }}"
                                            alt="" style="max-width: 100%;"></a></th> --}}
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Cv.Jam Tangan</a>
                                        <p>Lorem, ipsum dolor.</p>
                                    </td>
                                <td class="text-center">Content Creator</td>
                                <td style="word-wrap: break-word;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.ceat officiis!</p></td>

                                <td class="text-center">5 Bulan</td>
                                <td class="text-center">6</td>
                                <td class="fw-bold text-center">5</td>
                            </tr>

                            <tr>
                                {{-- <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-4.jpg') }}"
                                            alt="" style="max-width: 100%;"></a></th> --}}
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Pt.Kacamata</a>
                                        <p>Lorem, ipsum dolor.</p>
                                    </td>
                                <td class="text-center">Cyber Security</td>
                                <td style="word-wrap: break-word;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.ceat officiis!</p></td>
                                <td class="text-center">3 Bulan</td>
                                <td class="text-center">2</td>
                                <td class="fw-bold text-center">2</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection