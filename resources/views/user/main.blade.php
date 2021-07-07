
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>sistem Pengukuran Kepuasan Mahasiswa Terhadap Layanan Mengunakan Metode Fuzzy Service Quality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
 <link rel="stylesheet" href="http://kpm.polindra.ac.id/assets/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://kpm.polindra.ac.id/assets/bootstrap/css/main.css">
 <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" >
 <link rel="stylesheet" href="{{ asset('css/main.css') }}" >
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
        <img src="{{ asset('images/icon.png') }}" height="100" class="pull-left desktop">
        <h1 class="desktop">SISTEM PENGUKURAN KEPUASAN  </h1>

        <img src="{{ asset('images/icon.png') }}" height="50"  class="pull-left mobile">
        <h3 class="mobile">SISTEM PENGUKURAN KEPUASAN</h3>
        
        Jl. Raya Lohbener Lama No. 08 Indramayu 45252 <span class='desktop'>Telp. (0234) 5746464 Email info@polindra.ac.id</span>        
        </div>
        <div class="col-sm-4 desktop" style="text-align: right;">
          <?php date_default_timezone_set("Asia/Bangkok"); echo date('l, d / m / Y') ?><p class="folow">
          </p>
        </div>
      </div>
    </div>
  </div>

@include('user.layout.header')

<div class="container" style="min-height: 350px;">
    @yield('content')
</div>

@include('user.layout.footer')
{{-- style\vendors\jquery\dist --}}
<script src="{{ asset('style\vendors\jquery\dist\jquery.min.js') }}"></script>
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js') }}"></script>
<script src="http://kpm.polindra.ac.id/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/slideshow.js')}}"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
</body>
</html>

