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
        <div class="card-header">About</div>
        <div class="card-body card-block">
            <form action="/admin/about/tambah/store" method="post" >
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Deskripsi</div>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                        {{-- <div class="input-group-addon"><i class="fa fa-user"></i></div> --}}
                    </div>
                </div>
              
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection