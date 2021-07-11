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
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <strong class="card-title">Kuisioner</strong> --}}
                        <a class="btn btn-success bt-sm" href="about/tambah/"><i class="fa fa-plus-circle"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </thead>
                                <?php $no=1;?>
                                <tbody>
                                    <tr>
                                    </tr>
                                @foreach ($pertanyaan as $no=>$p)
                                    <tr>
                                    </tr>
                                    <td>{{$pertanyaan->firstItem()+$no}}</td>
                                    <td>{{$p->pertanyaan}}</td>
                                    <td style="text-align:center">
                                        <a  class="btn btn-primary bt-sm "href="about/hapus/{{ $p->id_pertanyaan }}">Edit</a>
                                        <a  class="btn btn-danger bt-sm "href="about/hapus/{{ $p->id_pertanyaan      }}">Hapus</a>
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