@extends('layouts.apps')

@section('body')

<link rel="stylesheet" href="{{asset("css/berita.css")}}">
@if (count($latestNews)>4)
<section id="news-carousel">
    <div id="jumbotron-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#jumbotron-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="1"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="2"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{$latestNews[0]->image_path}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>{{$latestNews[0]->title}}</h1>

                                <p>
                                    <?php
                                    $temp = explode(" ", $latestNews[0]->content);
                                    $desc = "";
                                    if (count($temp) > 12) {
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $latestNews[0]->created_at;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{$latestNews[1]->image_path}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>{{$latestNews[1]->title}}</h1>

                                <p>
                                    <?php
                                    $temp = explode(" ", $latestNews[1]->content);
                                    $desc = "";
                                    if (count($temp) > 12) {
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $latestNews[1]->created_at;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{$latestNews[2]->image_path}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>{{$latestNews[2]->title}}</h1>

                                <p>
                                    <?php
                                    $temp = explode(" ", $latestNews[2]->content);
                                    $desc = "";
                                    if (count($temp) > 12) {
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $latestNews[2]->created_at;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{$latestNews[3]->image_path}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>{{$latestNews[3]->title}}</h1>

                                <p>
                                    <?php
                                    $temp = explode(" ", $latestNews[3]->content);
                                    $desc = "";
                                    if (count($temp) > 12) {
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $latestNews[3]->created_at;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section id="news-grid">
    <div class="container">
        <div class="news-header">
            <h1><span class="header">News</span></h1>
        </div>
        <div class="d-flex justify-content-around flex-wrap">
            @if (count($news)>0)
            @foreach ($news as $new)
            <div class="card">
                <img src="{{$new->image_path}}" class="card-img-top" alt="{{$new->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$new->title}}</h5>
                    <p class="card-text">
                        <?php
                        $temp = explode(" ", $new->content);
                        $desc = "";
                        if (count($temp) > 12) {
                            for ($i = 0; $i < 12; $i++) {
                                $desc .= $temp[$i] . " ";
                            }
                        } else {
                            $desc = $new->content;
                        }
                        echo $desc . "..."
                        ?>
                    </p>
                    <a href="{{url("berita")}}/{{$new->id}}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @endforeach
            @else
            <h1 class="header" style="color:white">No News Found</h1>
            @endif

            {{$news->links()}}
        </div>
    </div>
</section>

@endsection
