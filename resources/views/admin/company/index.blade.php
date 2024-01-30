@extends('layouts.admin')

@section('main')
    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>Perusahaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
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
                            <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add
                                Perusahaan</button>
                        </div>


                        <h5 class="card-title">Daftar Perusahaan</h5>


                        <table class="table table-hover table-striped datatable">
                            <thead>
                                <tr>
                                    <th scope="col" style="max-width: 40%;">Nama Perusahaan</th>
                                    <th scope="col" class="text-center">Alamat</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Kategori</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex fw-semibold ">
                                            <span class="avatar avatar-sm me-2">
                                                <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                    src="{{ asset('admin/assets/img/transTv.png') }}" alt=""
                                                    srcset="">
                                            </span>
                                            <a href="#" class="text-primary fw-bold">PT.TransTv</a>
                                        </div></td>
                                    <td class="text-center">Jl.Pasuruan No.29</td>
                                    <td class="text-center">Lorem@gmail.com</td>
                                    <td class="text-center">Media</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary rounded me-2 "><i
                                                    class="ri-edit-2-fill"></i></button>
                                            <button class="btn btn-secondary rounded ms-2 me-2"><i
                                                    class="ri-delete-bin-5-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex fw-semibold ">
                                            <span class="avatar avatar-sm me-2">
                                                <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                    src="{{ asset('admin/assets/img/dicoding.png') }}" alt=""
                                                    srcset="">
                                            </span>
                                            <a href="#" class="text-primary fw-bold">PT.Dicoding Indonesia</a>
                                        </div></td>
                                    <td class="text-center">Jl.Surabaya Indonesia.</td>
                                    <td class="text-center">lorem@gmail.com</td>
                                    <td class="text-center">Edukasi</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary rounded me-2 "><i
                                                    class="ri-edit-2-fill"></i></button>
                                            <button class="btn btn-secondary rounded ms-2 me-2"><i
                                                    class="ri-delete-bin-5-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex fw-semibold ">
                                            <span class="avatar avatar-sm me-2">
                                                <img style="width: 35px; height: 35px;" class="rounded-circle"
                                                    src="{{ asset('admin/assets/img/coding.png') }}" alt=""
                                                    srcset="">
                                            </span>
                                            <a href="#" class="text-primary fw-bold">Cv.Technology Global</a>
                                        </div></td>
                                    
                                    <td class="text-center">Jl.Wakhid Hasim Jawa Timur.</td>
                                    <td class="text-center">lorem@gmail.com</td>
                                    <td class="text-center">Teknologi Informasi</td>
                                    <td class="text-center">
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
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            var limitedTextList = document.querySelectorAll(".limitedText");
            var seeMoreLinkList = document.querySelectorAll(".see-more");
    
            for (var i = 0; i < limitedTextList.length; i++) {
                var limitedText = limitedTextList[i];
                var seeMoreLink = seeMoreLinkList[i];
    
                if (limitedText && seeMoreLink) {
                    var text = limitedText.innerText;
                    var words = text.split(" ");
                    var maxWords = 7;
    
                    if (words.length > maxWords) {
                        limitedText.innerText = words.slice(0, maxWords).join(" ") + "...";
                        seeMoreLink.style.display = "inline";
                    }
    
                    seeMoreLink.addEventListener("click", function (e) {
                        e.preventDefault();
                        limitedText.innerText = text;
                        seeMoreLink.style.display = "none";
                    });
                }
            }
        });
    </script> --}}
    
@endsection
