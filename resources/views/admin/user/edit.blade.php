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
                        <input type="hidden" name="id_mahasiswa" value="{{ $b   [0]->id_mahasiswa }}"> <br/>
                        <input type="text" id="name" name="name" value="{{ $b[0]->name }}" placeholder="Nama Mahasiswa" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">NIM</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="nim" name="nim" value="{{ $b[0]->nim }}" placeholder="NIM Mahasiswa" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="password" name="password" value="{{ $b[0]->password }}" placeholder="Password" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Role</label></div>
                    <div class="col-12 col-md-9">
                        <select name="id_role"  id="id_role" class="form-control">
                            <option value="">Pilih Role</option>
                            <option  value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update </button>
                    </div>
                </div>
@endsection