@extends('layouts.app')

@section('title')
<h4 class="page-title">Beranda</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">SELAMAT DATANG DI PORTAL WEB PT. GEOINFO TEKNOLOGI</li>
</ol>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            @if ($firstSlider->file == null)
                            <img src="/theme/noimage2.png" alt="..." width="100%" height="450px">
                            @else
                            <img src="/storage/{{$firstSlider->file}}" alt="..." width="100%" height="450px">
                            @endif
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="text-shadow: 0px 1px 5px #000, 0 0 15px #000;">{{$firstSlider->judul}}</h5>
                            </div>
                        </div>
                        @foreach ($slider->where('id', '!=', $firstSlider->id) as $item)
                        <div class="carousel-item">
                            @if ($item->file == null)
                            <img src="/theme/noimage2.png" alt="..." width="100%" height="450px">
                            @else
                            <img src="/storage/{{$item->file}}" alt="..." width="100%" height="450px">
                            @endif
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="text-shadow: 0px 1px 5px #000, 0 0 15px #000;">{{$item->judul}}</h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

<h4 class="m-t-20 m-b-30">Berita Terbaru</h4>
<div class="row">
    @foreach ($berita as $b)

    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            @if ($b->file == null)
            <img class="card-img-top img-fluid" src="/theme/noimage2.png" alt="Card image cap">
            @else
            <img class="card-img-top img-fluid" src="/storage/{{$b->file}}" alt="Card image cap" width="800px"
                height="533px">
            @endif
            <div class="card-body">
                <h4 class="card-title font-16 mt-0">{{$b->judul}}</h4>
                <p class="card-text">{{Str::limit($b->isi,250)}}</p>
                <a href="/artikel/detail/{{$b->id}}" class="btn btn-sm btn-primary">Selengkapnya...</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!-- end row -->
@endsection