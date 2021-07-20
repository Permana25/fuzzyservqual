@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kategori</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Kategori</strong>
        </div>
        <div class="card-body card-block">
            <form action="/admin/kategori/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kategori</label></div>
                    <input type="hidden" name="id_kategori" value="{{ $a   [0]->id_kategori }}"> <br/>
                    {{-- <input type="hidden" name="nama_kategori" value="{{ $a   [0]->nama_kategori }}"> <br/> --}}
                    <div class="col-12 col-md-9"><input type="text" id="nama_kategori" name="nama_kategori" value="{{ $a   [0]->nama_kategori }}" placeholder="Nama Kategori" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                        <div class="col-12 col-md-9">
                            <textarea name="deskripsi" id="deskripsi" rows="9"  placeholder="Content..." class="form-control">{{ $a[0]->deskripsi }}</textarea></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update</button>
                </div>
                </div>
@endsection