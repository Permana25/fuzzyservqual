@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kuisioner</h1>
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
            <strong>Kuisioner</strong>
        </div>
        <div class="card-body card-block">
            <form action="/admin/kuisioner/tambah/store" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pertanyaan</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="nama_pertanyaan" name="nama_pertanyaan" placeholder="Pertanyaan" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Pilih Kategori</label></div>
                    <div class="col-12 col-md-9">
                    <select name="id_kategori" id="id_kategori" class="form-control">
                    <option value="">Please select</option>
                    @foreach ($kategori as $r)
                    <option value="{{$r->id_kategori}}">{{$r->nama_kategori}}</option>
                    @endforeach
                    </select>
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