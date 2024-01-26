@extends('layouts.admin')

@section('main')
        <!-- Start Page Title -->
<div class="pagetitle">
    <h1>Perusahaan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Perusahaan</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->


<div class="container-fluid">
    <div class="row">
        <div class=" col-xxl-12 col-md-6 col-lg-12">
            <div class="card top-selling overflow-auto">
                
                <div class="card-body pb-0 table-responsive">
                    <div class="position-absolute top-0 end-0 mt-3 me-5">
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add Perusahaan</button>
                    </div>
                    

                    <h5 class="card-title">Daftar Perusahaan</h5>
                    

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">Logo</th>
                                <th scope="col" style="max-width: 40%;">Nama</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center" style="max-width: 30%;">Tentang</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-3.jpg') }}"
                                            alt="" class="img-fluid rounded-start" style="max-width: 100%;"></a></th>
                                <td >
                                    <a href="#" class="text-primary fw-bold">PT.Implora Jaya Indonesia</a>
                                </td>
                                <td class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing.</td>
                                <td class="text-center">Lorem@gmail.com</td>
                                <td class="text-center" style="word-wrap: break-word;"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta cum qui architecto excepturi, dolor accusantium?</p></td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-4.jpg') }}"
                                            alt="" style="max-width: 100%;"></a></th>
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Cv.Kacamata Indonesia</a>
                                    </td>
                                <td class="text-center">Lorem ipsum dolor sit amet.</td>
                                <td class="text-center">lorem@gmail.com</td>
                                <td class="text-center" style="word-wrap: break-word;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.ceat officiis!</p></td>
                                <td class="text-center">4</td>
                            </tr>

                            <tr>
                                <th scope="row" style="max-width: 100px;"><a href="#"><img
                                            src="{{ asset('admin/assets/img/product-5.jpg') }}"
                                            alt="" style="max-width: 100%;"></a></th>
                                    <td>
                                        <a href="#" class="text-primary fw-bold">Pt.Technology Global</a>
                                    </td>
                                <td class="text-center">Lorem ipsum dolor sit..</td>
                                <td class="text-center">lorem@gmail.com</td>
                                <td class="text-center" style="word-wrap: break-word;"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.ceat officiis!</p></td>
                                <td class="text-center">2</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection