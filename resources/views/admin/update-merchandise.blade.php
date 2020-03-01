@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/update.css")}}">
<section id="update">
    <div class="header">
        Update Merchandise
    </div>
    <div class="container">
        <form action="{{url("admin/merchandise/update/send/")}}/{{$merch->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="inputJudul" name="name" value="{{$merch->name}}">
            </div>

            <div class="form-group">
                <label for="inputDeskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputDeskripsi" name="description">{{$merch->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="inputHarga">Harga</label>
                <input type="number" class="form-control" id="inputHarga" name="price" value="{{$merch->price}}">
            </div>

            <div class="form-group">
                <label for="inputFile">Upload File</label>
                <input type="file" id="inputFile" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Rubah">
        </form>
    </div>
</section>

@endsection
