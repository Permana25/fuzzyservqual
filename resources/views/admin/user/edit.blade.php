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
            <strong>User</strong>
        </div>
        <div class="card-body card-block">
            <form action="/admin/user/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                    <div class="col-12 col-md-9"> 
                        <input type="hidden" name="id_pengguna" value="{{ $p   [0]->id_pengguna }}"> <br/>
                        <input type="text" id="nama" name="nama" value="{{ $p[0]->nama }}" placeholder="Nama Mahasiswa" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">NIM</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="nim" name="nim" value="{{ $p[0]->nim }}" placeholder="NIM Mahasiswa" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="{{ $p[0]->password }}" placeholder="Password" class="form-control"></div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-save"></i> Update </button>
                    </div>
                </div>
@endsection