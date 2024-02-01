@extends('layouts.user')

@section('main')
   <!-- Start Page Title -->
   <div class="pagetitle">
    <h1><a href="{{ route('user.magang.index') }}" class="text-dark">Lamaran</a></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Lamaran</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->
@endsection
