@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset("css/merch.css")}}">
<section id="jumbotron">
</section>

<section id="isi-merch">
    <div class="container">
        <div class="d-flex justify-content-around flex-wrap">
            @if (count($merch)>0)
            @foreach ($merch as $m)
            <div class="card" style="width: 22rem;" id="card{{$m->id}}">
                <img src="{{$m->img_path}}" class="card-img-top img" id="img{{$m->id}}">
                <div class="item" id="item{{$m->id}}">
                    <span class="item-head">{{$m->name}}</span><br>
                    <span class="item-price">Rp. {{number_format($m->price, 0, ",", ".")}}</span><br>
                    <span class="item-description">
                        {{$m->description}}
                    </span>
                </div>
            </div>

            <?php
                echo "<style>";
                echo "#card".$m->id.":hover #img".$$m->id."{opacity: 0.2;}";
                echo "#card".$$m->id.":hover #item".$$m->id." {opacity: 1;}";
                echo "</style>";
            ?>
            @endforeach
            @else
            <span class="header" style="color:white; font-family:var(--font-head); font-size: 48px">Merchandise Not Found</span>
            @endif
        </div>
</section>
@endsection
