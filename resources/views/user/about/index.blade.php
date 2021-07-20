@extends('user.main')

@section('content')
</nav>
  <div class="box-baner desktop">
    </div>
   <div class="container">
      <article>
        <p><h2>{{$a[0]->judul}}</h2>
          <div class="row">
            {{-- <div class="col-sm-8"><span class="glyphicon glyphicon-calendar"></span> 17 Juli 2020, 18:30  <span class="glyphicon glyphicon-tag"></span> Tentang Kami</div> --}}
            <div class="col-sm-4">
              <div class="sosmed" style="text-align: right;">
              </div>
            </div>
          </div>
          
        <p>
        <p>
        <p>{{$a[0]->deskripsi}}</p><p><br></p>          </p>
      </article>
</div>
@endsection