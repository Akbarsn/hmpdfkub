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
                <div class="d-flex justify-content-around flex-wrap">
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
    <div class="bidang-kerja__proker-carousel-container">
        <div id="prokerCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators bidang-kerja__carousel-indicators">
                @for ($i = 0; $i < count($proker); $i++)
                <li data-target="#prokerCarousel" data-slide-to="{{$i}}"
                class="bidang-kerja__carousel-indicators-list active"></li>
                @endfor
            </ol>

            <div class="carousel-inner bidang-kerja__carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 bidang-kerja__proker-container">
                        <h3 class="bidang-kerja__proker-title">{{$proker[0]->title}}</h3>
                        <p class="bidang-kerja__proker-desc">{{$proker[0]->description}}</p>
                    </div>
                </div>

                @for ($i = 1; $i < count($proker); $i++) <div class="carousel-item">
                    <div class="d-block w-100 bidang-kerja__proker-container">
                        <h3 class="bidang-kerja__proker-title">{{$proker[$i]->title}}</h3>
                        <p class="bidang-kerja__proker-desc">{{$proker[$i]->description}}</p>
                    </div>
                    @endfor
            </div>

        </div>
        <a class="carousel-control-prev bidang-kerja__proker-prev" href="#prokerCarousel" role="button"
            data-slide="prev">
            <span class="carousel-control-prev-icon bidang-kerja__carousel-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next bidang-kerja__proker-next" href="#prokerCarousel" role="button"
            data-slide="next">
            <span class="carousel-control-next-icon bidang-kerja__carousel-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    @endif
</section>
@endsection

{{-- <div class="bidang-kerja__pengurus d-flex justify-content-around">
  <div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--1">
  <img src="{{$bidangKerja->chief_img_path}}">
<h3>{{$bidangKerja->chief_name}}</h3>
</div>
<div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--2">
    <img>
    <h3>Nama</h3>
</div>
</div> --}}
