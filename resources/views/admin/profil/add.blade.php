@extends('layouts.app')

@section('title')
<h4 class="page-title">Profil Perusahaan</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Profil Perusahaan</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <form method="POST" action="/data/profil/add" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Nama Perusahaan" name="nama"
                                id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input-lg" class="col-sm-2 col-form-label">Tentang Perusahaan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-lg" name="deskripsi" rows=5></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Email" name="email"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Telp</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Telp" name="telp"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input-lg" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection