@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/update.css")}}">
<section id="update">
    <div class="header">
        Update Proker
    </div>
    <div class="container">
        <form action="{{url("admin/proker/update/send/")}}/{{$proker->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="inputJudul" name="title" value="{{$proker->title}}">
            </div>

            <div class="form-group">
                <label for="inputDeskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputDeskripsi" name="description">{{$proker->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="inputJudul">Bidang</label>
                <select class="custom-select" name="bidang_id">
                    <option value="1">PAK</option>
                    <option value="2">ASK</option>
                    <option value="3">PSDM</option>
                    <option value="4">TIK</option>
                    <option value="5">PENGMAS</option>
                    <option value="6">KDR</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Rubah">
        </form>
    </div>
</section>

@endsection
