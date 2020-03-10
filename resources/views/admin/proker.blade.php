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
                            Program Kerja
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
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Bidang ke </th>
                                <th scope="col" class="center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (count($proker)>0)
                            <?php $itemCount = 1;?>
                            @foreach ($proker as $p)
                            <tr>
                                <td>{{$itemCount++}}</td>
                                <td>{{$p->title}}</td>
                                <td>
                                    <?php
                                    $temp = explode(" ", $p->description);
                                    $desc = "";
                                    if (count($temp) > 10) {
                                        for ($i = 0; $i < 10; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $p->description;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </td>
                                <td>{{$p->bidang_id}}</td>
                                <td class="action-group">
                                    <a href="{{url("admin/proker/delete/")}}/{{$p->id}}" class="action delete"><i class="fas fa-times"></i></a>
                                    <a href="{{url("admin/proker/update/")}}/{{$p->id}}" class="action edit"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else

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
                        <h5 class="modal-title" id="addModal">Tambahkan Proker</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url("admin/proker/tambah")}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="inputJudul">Judul</label>
                                <input type="text" class="form-control" id="inputJudul" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="inputDeskripsi">Deskripsi</label>
                                <textarea type="text" class="form-control" id="inputDeskripsi" required name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputJudul">Bidang</label>
                                <select class="custom-select" name="bidang_id" required>
                                    <option value="1">PAK</option>
                                    <option value="2">ASK</option>
                                    <option value="3">PSDM</option>
                                    <option value="4">TIK</option>
                                    <option value="5">PENGMAS</option>
                                    <option value="6">KDR</option>
                                </select>
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

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</main>
@endsection