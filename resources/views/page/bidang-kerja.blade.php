@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{ URL::asset('css/bidang-kerja.css') }}">
<section class="bidang-kerja">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h1 class="bidang-kerja__header">bidang kerja HMPD</h1>
        </div>
        <div class="bidang-kerja__container">
            <div class="bidang-kerja__bidang-info">
                <h2 class="bidang-kerja__nama-bidang">Bidang</h2>
                <h2 class="bidang-kerja__nama-bidang">PAK</h2>
                <div class="bidang-kerja__desc-container">
                    <p class="bidang-kerja__desc">
                        &emsp;Bidang yang memfasilitasi dan membantu mahasiswa dalam berbagai kegiatan akademik dan keilmuan
                        seperti perlombaan kedokteran, pembentukan kelompok belajar, dan lain sebagainya.
                    </p>
                </div>
            </div>
            <div class="bidang-kerja__pengurus d-flex justify-content-around">
                <div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--1">
                </div>
                <div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--2">
                </div>
            </div>
            <div class="bidang-kerja__proker">
                <div class="bidang-kerja__proker-header">
                    <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--1">Program</h2>
                    <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--2">Kerja</h2>
                </div>
                <div class="bidang-kerja__proker-carousel-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                          </div>
                        </div>
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
        </div>
    </div>
</section>
@endsection