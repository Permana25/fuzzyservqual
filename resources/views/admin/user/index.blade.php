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
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Password</th>
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
                                @foreach ($pengguna as $no=>$p)
                                    <tr>
                                    </tr>
                                    <td>{{$pengguna->firstItem()+$no}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->nim}}</td>
                                    <td>{{$p->password}}</td>
                                    <td style="text-align:center">
                                        <a  class="btn btn-primary bt-sm "href="admin/user/edit/{{ $p->id_pengguna }}"><i class="fa fa-edit"></i> Edit</a>
                                        <a  class="btn btn-danger bt-sm "href="admin/user/hapus/{{ $p->id_pengguna      }}"><i class="fa fa-trash-o"></i> Hapus</a>
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