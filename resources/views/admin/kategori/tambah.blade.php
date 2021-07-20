@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Home</h1>
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
            <form action="/admin/kategori/tambah/store" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kategori</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="Nama Kategori" name="Nama Kategori" placeholder="Kategori" class="form-control"></div>
                    </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                        <div class="col-12 col-md-9">
                            <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset</button>
                    </div>
                </div>
@endsection