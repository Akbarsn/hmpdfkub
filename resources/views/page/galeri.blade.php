@extends('layouts.apps')

@section('body')
    {{-- Isi sini gan --}}
    <section class="galeri">
        <div class="jumbotron jumbotron-fluid galeri__image-jumbotron">
        </div>
        <div class="jumbotron jumbotron-fluid galeri__custom-jumbotron">
            <div class="container galeri__custom-container">
                <div class="galeri__photo-container">
                    <div class="galeri__photo-line galeri__photo-line--1">
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="galeri image">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="galeri__photo-line galeri__photo-line--2">
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-5.jpg')}}" alt="">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="galeri__photo-line galeri__photo-line--3">
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                        </div>
                        <div class="galeri__photo-image">
                            <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection