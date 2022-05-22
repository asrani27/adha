@extends('layouts.app')

@section('title')
<h4 class="page-title">Laporan Administrator</h4>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Administrator</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="btn-toolbar p-3" role="toolbar">
                <div class="col-md-10">

                    <div class="btn-group">
                        <a href="/laporan/administrator/cetak" target="_blank"
                            class="btn btn-primary waves-light waves-effect"><i class="mdi mdi-newspaper"></i> Export
                            PDF</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">

            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
</div>
@endsection