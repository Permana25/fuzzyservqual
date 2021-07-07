
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>sistem Pengukuran Kepuasan Mahasiswa Terhadap Layanan Mengunakan Metode Fuzzy Service Quality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="http://kpm.polindra.ac.id/images/kpm.polindra.ac.id16072020205857-POLINDRA.png" type="image/x-icon">
 <link rel="stylesheet" href="http://kpm.polindra.ac.id/assets/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://kpm.polindra.ac.id/assets/bootstrap/css/main.css">
 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
        <img src="" height="100" class="pull-left desktop">
        <h1 class="desktop">SISTEM PENGUKURAN KEPUASAN</h1>

        <img src="http://kpm.polindra.ac.id/images/kpm.polindra.ac.id16072020205857-POLINDRA.png" height="50"  class="pull-left mobile">
        <h3 class="mobile">SISTEM PENGUKURAN KEPUASAN</h3>
        
        Jl. Raya Lohbener Lama No. 08 Indramayu 45252 <span class='desktop'>Telp. (0234) 5746464 Email info@polindra.ac.id</span>        
        </div>
        <div class="col-sm-4 desktop" style="text-align: right;">
          Jum'at, 4 Juni 2021          <p class="folow">
           {{-- <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a> --}}
          </p>
        </div>
      </div>
    </div>
  </div>

    <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://kpm.polindra.ac.id"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://kpm.polindra.ac.id/page/Tentang-Kami">Tentang Kami</a></li><li><a href="http://kpm.polindra.ac.id/kuesioner">Kuesioner</a></li><li><a href="http://kpm.polindra.ac.id/analisis">Hasil Analisis</a></li>      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="box-baner desktop">
      <div class="baner bgFill" style="background-image: url(http://kpm.polindra.ac.id/images/)">
          <h2 style="display: none"><span>Analisis Kepuasan Mahasiswa Terhadap Layanan Mengunakan Metode Fuzzy Service Quality</span></h2>
      </div>
      </div>
    <div class="container">
<h2 class="title">Kuesioner</h2>
<p class="alert alert-warning">Proses pengumpulan data sudah selesai</p>
</div>

<div class="footer">
  <div class="container">
    <div class="isi-footer">
      <img src="http://kpm.polindra.ac.id/images/kpm.polindra.ac.id16072020205857-POLINDRA.png" height="60"><br>
        <h3>SISTEM PENGUKURAN KEPUASAN</h3>
        Jl. Raya Lohbener Lama No. 08 Indramayu 45252 <span class='desktop'>Telp. (0234) 5746464 Email info@polindra.ac.id</span>        <p class="folow">
           {{-- <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a> --}}
          </p>
    </div>
  </div>
</div>
<script src="http://kpm.polindra.ac.id/assets/bootstrap/js/jquery.min.js"></script>
<script src="http://kpm.polindra.ac.id/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript"> 
 $(document).ready(function() { 
    $("#cariMhs").click(function(){
      var nim = $("#nim1").val();
      var lahir = $("#lahir1").val();
      $.ajax({ 
                          type: "GET",
                          url: "http://kpm.polindra.ac.id/views/mahasiswa_search.php?key=0da0ee7cd68d3d6dab82c32c27039984&nim="+nim+"&tgl="+ lahir, 
                          dataType: "json", 
                          success: function(result) { 
                              $("#nim").val(result[0].mahasiswa_nim);
                              $("#nama").val(result[0].mahasiswa_nama);
                              $("#jurusan").val(result[0].jurusan_nama);

                              $("#nim1").val(result[0].mahasiswa_nim);
                              $("#nim1").attr("disabled","TRUE");
                          	  $("#lahir1").attr("disabled","TRUE");
                              $("#nama1").val(result[0].mahasiswa_nama);
                              $("#nama1").attr("disabled","TRUE");
                              $("#kelas1").val(result[0].kelas_kode);
                              $("#kelas1").attr("disabled","TRUE");
                              $("#prodi1").val(result[0].program_studi_nama);
                              $("#prodi1").attr("disabled","TRUE");
                              $("#jurusan1").val(result[0].jurusan_nama);
                              $("#jurusan1").attr("disabled","TRUE");
                            },
                            error: function(){
                              swal({
                                title: "NIM Tidak Ditemukan",
                                text: "Silahkan masukan Nomor Induk Mahasiswa (NIM) dengan benar",
                                icon: "warning"
                              });

                            } 
                        }); 
    });
}); 

</script>
<script type="text/javascript">
 $(document).ready(function(){
 
    // hide messages 
    $("#loading").hide();
    $("#show_message").hide();
    
    
    // on submit...
    $('#ajax-form').submit(function(){
        // ajax
        $.ajax({
            type:"POST",
            url: "http://kpm.polindra.ac.id/views/simpan-data.php",
            data: $(this).serialize(), // get all form field value in serialize form
            beforeSend: function() {
                $('#loading').show(); 
                $('#kuesioner').hide();    
            },
            success: function(data){
               swal({
                      title: data[0],
                      text: data[2],
                      icon: data[1],
                  }).then(function() {
                          window.location = "http://kpm.polindra.ac.id/kuesioner";
                      });
              $("#loading").hide();
              $('#ajax-form').each(function(){
                  this.reset();
              });
            },
            error: function(){
              swal({
                      title: "Gagal",
                      text: "Gagal menyimpan data",
                      icon: "warning",
                  });
              $('#loading').hide();
              $('#kuesioner').show();
            }

        });
        
    });
    });  
 
  
</script>

</body>
</html>

