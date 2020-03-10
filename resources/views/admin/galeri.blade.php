@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/admin-page.css")}}">
<main>
    <section id="admin-page">
        <div class="container">
            <div class="admin-wrapper">
                <div class="admin-header">
                    <div class="center">
                        <span class="header">
                            Galeri
                        </span>
                    </div>
                </div>

                <div class="admin-content">
                    <div id="right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#tambah">
                            Tambah
                        </button>
                    </div>

                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (count($galeri)>0)
                            @foreach ($galeri as $g)
                            <tr>
                                <td>{{$g->id}}</td>
                                <td><img src="{{url('/')}}/{{$g->img_path}}" class="img" alt="{{$g->title}}"></td>
                                <td>{{$g->title}}</td>
                                <td>
                                    <a href="{{url("admin/galeri/delete/")}}/{{$g->id}}" class="action delete"><i
                                            class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4"><h3>Image Not Found</h3></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Tambahkan Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url("admin/galeri/tambah")}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="inputJudul">Judul</label>
                                <input type="text" class="form-control" id="inputJudul" name="image_title">
                            </div>

                            <div class="form-group">
                                <label for="inputFile">Upload File</label>
                                <input type="file" id="inputFile" name="image">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Tambahkan">
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
</main>
@endsection
