@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset("css/home.css")}}">
<main>
    <section id="jumbotron">
        <div class="jumbotron-fluid">
            <img src="{{asset('image/home.png')}}" class="img-fluid">
        </div>
    </section>

    <section id="about_us">
        <div class="d-flex justify-content-around flex-wrap content">
            <div class="col-lg-6" id="about-us-left">
                <img src="{{asset("image/about-us.svg")}}" id="about-us-image">
            </div>
            <div class="col-lg-6" id="about-us-right">
                <span class="header">Tentang Kami</span>
                <span class="paragraph"><br>
                    Himpunan Mahasiswa Pendidikan Dokter memiliki fungsi sebagai wadah pengembangan kepribadian
                    luhur, wadah pergerakan
                    ,mahasiswa, sarana kaderisasi, dan sarana informasi, komunikasi, dan penguat rasa kekeluargaan
                    antar mahasiswa Pendidikan Dokter FKUB dan memiliki salah satu tujuannya yaitu terbentuknya para
                    pemimpin yang berasal dari Program Studi Pendidikan Dokter FKUB baik dalam lokal, regional,
                    maupun nasional.
                </span>
            </div>
        </div>
    </section>

    @if (count($news)>=6)
    <section id="what_new">
        <div class="container">
            <div class="mx-auto header" id="head">Berita Terbaru</div>
            <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[0]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[0]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[0]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[0]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[0]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[1]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[1]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[1]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[1]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[1]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[2]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[2]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[2]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[2]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[2]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[3]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[3]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[3]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[3]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[3]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[4]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[4]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[4]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[4]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[4]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$news[5]->image_path}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$news[5]->title}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $news[5]->content);
                                            $desc = "";
                                            if (count($temp) > 8) {
                                                for ($i = 0; $i < 8; $i++) {
                                                    $desc .= $temp[$i] . " ";
                                                }
                                            } else {
                                                $desc = $news[5]->content;
                                            }
                                            echo $desc . "...";
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url(berita)}}/{{$news[5]->id}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev" style="left:-7vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next" style="right:-7vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="cardCarouselMini" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$news[0]->image_path}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$news[0]->title}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $news[0]->content);
                                        $desc = "";
                                        if (count($temp) > 8) {
                                            for ($i = 0; $i < 8; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                        } else {
                                            $desc = $news[0]->content;
                                        }
                                        echo $desc . "...";
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url(berita)}}/{{$news[0]->id}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$news[1]->image_path}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$news[1]->title}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $news[1]->content);
                                        $desc = "";
                                        if (count($temp) > 8) {
                                            for ($i = 0; $i < 8; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                        } else {
                                            $desc = $news[1]->content;
                                        }
                                        echo $desc . "...";
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url(berita)}}/{{$news[1]->id}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$news[2]->image_path}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$news[2]->title}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $news[2]->content);
                                        $desc = "";
                                        if (count($temp) > 8) {
                                            for ($i = 0; $i < 8; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                        } else {
                                            $desc = $news[2]->content;
                                        }
                                        echo $desc . "...";
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url(berita)}}/{{$news[2]->id}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarouselMini" role="button" data-slide="prev" style="left:-5vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarouselMini" role="button" data-slide="next" style="right:-5vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="mx-auto header" id="button">
                <a class="btn btn-primary isi-button">Lebih Lanjut</a>
            </div>
        </div>
    </section>
    @endif


    @if (count($event)>=3)
    <section id="upcoming_event">
        <div class="container">
            <div class="mx-auto header" id="head">Upcoming Event</div>
            <div class="d-flex justify-content-around flex-wrap">

                @foreach ($event as $e)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$e->name}}</h5>
                            <p class="card-text">{{$e->description}}.</p>
                            <p class="card-text"><small class="text-muted">{{$e->date}}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section id="bidang_kerja">
        <div class="container">
            <div class="mx-auto header" id="head">Bidang Kerja</div>
            <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[0]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[0]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[0]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/1")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[1]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[1]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[1]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/2")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[2]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[2]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[2]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/3")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[3]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[3]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[3]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/4")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[4]->logo_img}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$bidangKerja[4]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[4]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/4")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[5]->logo_img}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$bidangKerja[5]->name}}</h4>
                                        <p class="card-text">
                                            <?php
                                            $temp = explode(" ", $bidangKerja[5]->description);
                                            $desc = "";
                                            for ($i = 0; $i < 12; $i++) {
                                                $desc .= $temp[$i] . " ";
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/6")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev" style="left:-7vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next" style="right:-7vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="cardCarouselMini" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[0]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[0]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[0]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/1")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[1]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[1]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[1]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/2")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[2]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[2]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[2]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/3")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[3]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[3]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[3]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/4")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[4]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[4]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[4]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/5")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{$bidangKerja[5]->logo_img}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$bidangKerja[5]->name}}</h4>
                                    <p class="card-text">
                                        <?php
                                        $temp = explode(" ", $bidangKerja[5]->description);
                                        $desc = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                        echo $desc . "..."
                                        ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{url("/bidang-kerja/6")}}">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarouselMini" role="button" data-slide="prev" style="left:-5vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarouselMini" role="button" data-slide="next" style="right:-5vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection