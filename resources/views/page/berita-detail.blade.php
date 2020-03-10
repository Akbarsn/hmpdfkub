@extends('layouts.apps')

@section('body')

<section id="news-detail">
    <link rel="stylesheet" href="{{asset("css/berita-detail.css")}}">
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="left">
                <div class="wrapper">
                    <span class="header">
                        {{$news->title}}
                    </span>

                    <div class="detail-image">
                        <img src="{{url('/')}}/{{$news->image_path}}" class="img-fluid">
                    </div>

                    <div class="news-tag">
                        {{$news->created_at}}
                    </div>

                    <div class="isi-detail">
                        {{$news->content}}
                    </div>
                </div>
            </div>
            <div class="col-md-3" id="right">

                @if (count($recommendedNews)>3)
                @foreach ($recommendedNews as $news)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <p class="card-text">
                            <?php
                            $temp = explode(" ", $news->content);
                            $desc = "";
                            if (count($temp) > 4) {
                                for ($i = 0; $i < 4; $i++) {
                                    $desc .= $temp[$i] . " ";
                                }
                            } else {
                                $desc = $news->content;
                            }
                            echo $desc . "..."
                            ?>
                        </p>
                        <a href="{{url("berita")}}/{{$new->id}}" class="card-link">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endsection