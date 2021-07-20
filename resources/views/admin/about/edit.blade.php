@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>About</h1>
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
        <div class="card-header">About</div>
        <div class="card-body card-block">
            <form action="/admin/about/update" method="post" >
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul</label></div>
                    <input type="hidden" name="id_tentang" value="{{ $a   [0]->id_tentang }}"> <br/>
                    <input type="hidden" name="judul" value="{{ $a   [0]->judul }}"> <br/>
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul" name="judul" value="{{ $a[0]->judul }}" placeholder="Judul" class="form-control"></div>
                    </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                        <div class="col-12 col-md-9">
                            <textarea name="deskripsi" id="deskripsi" rows="9"  placeholder="Content..." class="form-control">{{ $a[0]->deskripsi }}</textarea></div>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection