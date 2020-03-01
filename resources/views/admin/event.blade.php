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
                            Event
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
                                <th scope="col">Nama Event</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" class="center"></th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (count($event)>0)
                            @foreach ($event as $e)
                            <tr>
                                <td>{{$e->id}}</td>
                                <td>{{$e->name}}</td>
                                <td>
                                    <?php 
                                    $temp = explode(" ",$e->description);
                                    $desc = "";
                                    for ($i=0; $i < 10; $i++) { 
                                    $desc .= $temp[$i] . " ";    
                                    }
                                    echo $desc . "..."
                                ?>
                                </td>
                                <td>{{$e->date}}</td>
                                <td class="action-group">
                                    <a href="{{url("admin/event/delete/")}}/{{$e->id}}" class="action delete"><i
                                            class="fas fa-times"></i></a>
                                    <a href="{{url("admin/event/done/")}}/{{$e->id}}" class="action check"><i
                                            class="fas fa-check"></i></a>
                                    <a href="{{url("admin/event/update/")}}/{{$e->id}}" class="action edit"><i
                                            class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Event not found</td>
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
                        <h5 class="modal-title" id="addModal">Tambahkan Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url("admin/event/tambah")}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="inputNamaEvent">Nama Event</label>
                                <input type="text" class="form-control" id="inputNamaEvent" name="name">
                            </div>

                            <div class="form-group">
                                <label for="inputDeskripsi">Deskripsi</label>
                                <textarea type="text" class="form-control" id="inputDeskripsi"
                                    name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputTanggal">Tanggal Dilaksanakan</label>
                                <input type="date" class="form-control" id="inputTanggal" name="date">
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
