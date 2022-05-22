@extends('layouts.app')

@section('title')
<h4 class="page-title">Administrator</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Administrator</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-20">
            <div class="card-body">
                <form class="" action="/data/administrator/add" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                    </div>
                    <div class="form-group">
                        <label>Jkel</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <label>Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="telp" required>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card m-b-20">
            <div class="card-body">
                <table class="table table-striped table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jkel</th>
                            <th>Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $item)
                        <tr style="padding:5px 12px;">
                            <td style="padding:5px 12px;">{{$no++}}</td>
                            <td style="padding:5px 12px;">{{$item->nama}}</td>
                            <td style="padding:5px 12px;">{{$item->jkel}}</td>
                            <td style="padding:5px 12px;">{{$item->telp}}</td>
                            <td style="padding:5px 12px;">
                                <a href="/data/administrator/edit/{{$item->id}}"
                                    class="btn btn-sm btn-success waves-effect waves-light"><i
                                        class="fas fa-edit"></i></a>
                                <a href="/data/administrator/delete/{{$item->id}}"
                                    class="btn btn-sm btn-danger waves-effect waves-light"
                                    onclick="return confirm('Yakin ingin menghapus data ini?');"><i
                                        class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{$data->links()}}
            </div>
        </div>
    </div>
</div>
@endsection