@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/update.css")}}">
<section id="update">
    <div class="header">
        Update Event
    </div>
    <div class="container">
        <form action="{{url("admin/event/update/send/")}}/{{$event->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputNamaEvent">Nama Event</label>
                <input type="text" class="form-control" id="inputNamaEvent" name="name" value="{{$event->name}}" required>
            </div>

            <div class="form-group">
                <label for="inputDeskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputDeskripsi" name="description" required> {{$event->description}} </textarea>
            </div>

            <div class="form-group">
                <label for="inputTanggal">Tanggal Dilaksanakan</label>
                <input type="date" class="form-control" id="inputTanggal" name="date" value="{{$event->date}}" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Rubah">
        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</section>
@endsection