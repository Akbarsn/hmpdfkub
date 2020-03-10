@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="{{ asset('css/bidang-kerja.css') }}">
<section class="bidang-kerja">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="img-wrapper">
                <img src="{{$bidangKerja->logo_img}}" class="img-fluid">
            </div>
        </div>
        <div class="bidang-kerja__container">
            <div class="bidang-kerja__bidang-info">
                <h2 class="bidang-kerja__nama-bidang">Bidang <span class="bidang-id">{{$bidangKerja->id}}</span></h2>
                <h2 class="bidang-kerja__nama-bidang">{{$bidangKerja->name}}</h2>
                <h2 class="bidang-kerja__nama-bidang">{{$bidangKerja->abbr}}</h2>
                <div class="bidang-kerja__desc-container">
                    <p class="bidang-kerja__desc">
                        &emsp;{{$bidangKerja->description}}
                    </p>
                </div>
            </div>
            <div class="container" id="staff">
                <div id="big">
                    <div class="col center">
                        <h3>Ketua Bidang</h3><br>
                        <img src="{{$bidangKerja->chief_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->chief_name}}</h5>
                    </div>
                    @if ($bidangKerja->staff_name != "-")
                    <div class="col center">
                        <h3>Staff Ahli</h3><br>
                        <img src="{{$bidangKerja->staff_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->staff_name}}</h5>
                    </div>
                    @endif
                    <div class="col center">
                        <h3>Sekretaris Bidang</h3><br>
                        <img src="{{$bidangKerja->vice_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->vice_name}}</h5>
                    </div>
                </div>
                <div id="mini">
                    <div class="col center">
                        <h3>Ketua Bidang</h3><br>
                        <img src="{{$bidangKerja->chief_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->chief_name}}</h5>
                    </div>
                    <div class="col center">
                        <h3>Sekretaris Bidang</h3><br>
                        <img src="{{$bidangKerja->vice_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->vice_name}}</h5>
                    </div>
                    @if ($bidangKerja->staff_name != "-")
                    <div class="col center">
                        <h3>Staff Ahli</h3><br>
                        <img src="{{$bidangKerja->staff_img_path}}" class="img-fluid img-staff">
                        <h5>{{$bidangKerja->staff_name}}</h5>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

    @if (count($proker)>0)
    <div class="container">
        <div class="bidang-kerja__proker">
            <div class="bidang-kerja__proker-header">
                <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--1">Program</h2>
                <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--2">Kerja</h2>
            </div>
        </div>
    </div>

    <div class="bidang-kerja__proker-carousel-container container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @for ($i = 1; $i < count($proker); $i++) <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}">
                    </li>
                    @endfor
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 bidang-kerja__proker-container">
                        <div class="isi-carousel">
                            <h3 class="bidang-kerja__proker-title">{{$proker[0]->title}}</h3>
                            <p class="bidang-kerja__proker-desc">{!!$proker[0]->description!!}</p>
                        </div>
                    </div>
                </div>

                @for ($i = 1; $i < count($proker); $i++) <div class="carousel-item">
                    <div class="d-block w-100 bidang-kerja__proker-container">
                        <div class="isi-carousel">
                            <h3 class="bidang-kerja__proker-title">{{$proker[$i]->title}}</h3>
                            <p class="bidang-kerja__proker-desc">{!!$proker[$i]->description!!}</p>
                        </div>
                    </div>
            </div>
            @endfor
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    @endif
</section>
@endsection