@extends('layouts.app')

@section('title')
<h4 class="page-title">{{$data->judul}}</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Seputar Informasi Berita </li>
</ol>
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media m-b-30">
                    @if ($data->file == null)
                    <img class="d-flex align-self-start rounded shadow mr-3" src="/theme/assets/images/users/user-3.jpg"
                        alt="Generic placeholder image" height="264">
                    @else
                    <img class="d-flex align-self-start rounded shadow mr-3" src="/storage/{{$data->file}}"
                        alt="Generic placeholder image" height="264">
                    @endif
                    <div class="media-body">
                        <h5 class="mt-0 font-16">{{$data->judul}}</h5>
                        {!!$data->isi!!}<br />
                        <a href="#" class="btn btn-sm btn-secondary">Tgl : {{$data->created_at}}</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card m-b-30">
            <div class="card-body">
                <form class="" action="/artikel/detail/{{$data->id}}/komentar" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label>Isi Komentar</label>
                        <input type="text" class="form-control" name="isi" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="fas fa-save"></i> Kirim Komentar
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <div class="col-lg-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-5">Komentar Terbaru</h4>
                <div class="inbox-wid">
                    @foreach ($komentar as $item)
                    <a href="#" class="text-dark">
                        <div class="inbox-item">
                            <div class="inbox-item-img float-left mr-3"><img
                                    src="/theme/assets/images/users/user-icon.png" class="thumb-md rounded-circle"
                                    alt=""></div>
                            <h6 class="inbox-item-author mt-0 mb-1">{{$item->nama}}</h6>
                            <p class="inbox-item-text text-muted mb-0">{{$item->isi}}</p>
                            <p class="inbox-item-date text-muted">{{$item->created_at}}</p>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
<!--end row-->
@endsection