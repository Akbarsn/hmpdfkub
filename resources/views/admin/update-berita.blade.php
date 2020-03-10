@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/update.css")}}">
<section id="update">
    <div class="header">
        Update Berita
    </div>
    <div class="container">
        <form action="{{url("admin/berita/update/send/")}}/{{$news->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="inputJudul" name="title" value="{{$news->title}}">
            </div>

            <div class="form-group">
                <label for="inputDeskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputDeskripsi" name="content">{{$news->content}}</textarea>
            </div>

            <div class="form-group">
                <label for="inputFile">Upload File</label>
                <input type="file" id="inputFile" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Rubah">
        </form>
    </div>
</section>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endsection