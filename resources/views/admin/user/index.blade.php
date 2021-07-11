@extends('admin.main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User</h1>
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
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <strong class="card-title">Kuisioner</strong> --}}
                        <a class="btn btn-success bt-sm" href="/admin/user/tambah"><i class="fa fa-plus-circle"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>NIM</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </thead>
                                <?php $no=1;?>
                                <tbody>
                                    <tr>
                                    </tr>
                                @foreach ($mahasiswa as $no=>$m)
                                    <tr>
                                    </tr>
                                    <td>{{$mahasiswa->firstItem()+$no}}</td>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->nim}}</td>
                                    <td>{{$m->id_role}}</td>
                                    <td style="text-align:center">
                                        <a  class="btn btn-primary bt-sm "href="admin/user/edit/{{ $m->id_mahasiswa }}"><i class="fa fa-edit"></i> Edit</a>
                                        <a  class="btn btn-danger bt-sm "href="admin/user/hapus/{{ $m->id_mahasiswa      }}"><i class="fa fa-trash-o"></i> Hapus</a>
                                    </td>
                
                                  
                                    <?php $no++?>
                
                                 @endforeach
                                </tr>            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection