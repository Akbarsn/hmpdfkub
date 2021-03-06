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
                            Merchandise
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
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (count($merch)>0)
                            <?php $itemCount = 1; ?>
                            @foreach ($merch as $m)
                            <tr>
                                <td>{{$itemCount++}}</td>
                                <td><img src="{{url('/')}}/{{$m->img_path}}" class="img" alt="{{$m->name}}"></td>
                                <td>{{$m->name}}</td>
                                <td>
                                    <?php
                                    $temp = explode(" ", $m->description);
                                    $desc = "";
                                    if (count($temp) > 10) {
                                        for ($i = 0; $i < 10; $i++) {
                                            $desc .= $temp[$i] . " ";
                                        }
                                    } else {
                                        $desc = $m->description;
                                    }
                                    echo $desc . "..."
                                    ?>
                                </td>
                                <td>Rp. {{number_format($m->price,0,",",".")}}</td>
                                <td class="action-group">
                                    <a href="{{url("admin/merchandise/delete/")}}/{{$m->id}}" class="action delete"><i class="fas fa-times"></i></a>
                                    <a href="{{url("admin/merchandise/update/")}}/{{$m->id}}" class="action edit"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">Merchandise Not Found</td>
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
                        <h5 class="modal-title" id="addModal">Tambahkan Merchandise</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url("admin/merchandise/tambah")}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="inputJudul">Judul</label>
                                <input type="text" class="form-control" id="inputJudul" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="inputDeskripsi">Deskripsi</label>
                                <textarea type="text" class="form-control" id="inputDeskripsi" name="description" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputHarga">Harga</label>
                                <input type="number" class="form-control" id="inputHarga" name="price" required>
                            </div>

                            <div class="form-group">
                                <label for="inputFile">Upload File</label>
                                <input type="file" id="inputFile" name="image" required>
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