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
            <form action="/admin/about/tambah/store" method="post" >
                @csrf
                {{-- <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                    </div> --}}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                        <div class="col-12 col-md-9">
                            <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                        </div>
                        {{-- <input type="text" id="deskripsi" name="deskripsi"  row="9" class="form-control"> --}}
                    </div>
                </div>
              
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection