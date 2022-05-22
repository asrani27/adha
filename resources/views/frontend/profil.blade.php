@extends('layouts.app')

@section('title')
<h4 class="page-title">Profil Perusahaan</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Profil Perusahaan </li>
</ol>
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title mb-5">Nama Perusahaan :
                    {{$profil->nama == null ? '': $profil->nama}}</h4>
                <h4 class="mt-0 header-title mb-5">Deskripsi :
                    {{$profil->deskripsi == null ? '': $profil->deskripsi}} </h4>
                <h4 class="mt-0 header-title mb-5">Email :
                    {{$profil->email == null ? '': $profil->email}}</h4>
                <h4 class="mt-0 header-title mb-5">Telp:
                    {{$profil->telp == null ? '': $profil->telp}}</h4>
            </div>

        </div>
    </div>
</div>
<!--end row-->
@endsection