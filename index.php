<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/gambar/favicon.ico" type="image/x-icon">
  <title>SMK 1 Coding</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    li {
      color: white;
    }
    .carousel .item {
      height: 500px !important;
    }

    .item img {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        min-height: 400px !important;
    }
  </style>
</head>
<body>
  
<?php include 'navbar.php'; ?>
<br>
<br>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/gambar/caraousel/homejadi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">      
      <img src="assets/gambar/caraousel/kepsek.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <br>
      <img src="assets/gambar/caraousel/banner.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="jumbotron p-5 pr-5 bg-info mb-0">
  <h1><font color ="white"> SMK 1 CODING</font></h1>
    <font color="white"> &emsp; &emsp;  Selamat datang di website SMK 1 CODING Sebagai media informasi dan komunikasi web SMK 1 CODING dibangun dan
        dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik, orang tua, masyarakat dan stakeholder.
        Melaksanakan amanah sebagai pimpinan di SMK 1 CODING, harapan untuk menjadikan sekolah besar dengan bertabur
        prestasi baik akademik maupun non akademik terus meningkat. Sekolah yang akan melahirkan generasi yang kreatif,
        inovatif, religius yang berwawasan lingkungan serta mengabdi kepada bangsa dan negara. Mendorong terus berkembangnya
        inovasi dan kreasi warga sekolah. Meningkatkan kekeluargaan dan kerjasama dengan seluruh komponen berlandaskan
        semangat 5S (senyum, sapa, salam, sopan dan santun). Dari lubuk hati yang dalam, saya mengajak seluruh warga
        sekolah,orang tua, masyarakat dan stakeholder, marilah kita bergandeng tangan dan berkolaborasi untuk menciptakan
        sekolah yang nyaman, aman dan menyenangkan bagi putra-putri kita dalam menuntut ilmu. Tetap mempertahankan image
        SMK 1 CODING sebagai sekolah unggulan baik di Jakarta Barat, DKI Jakarta maupun Indonesia
      </font>
</div>

<!-- <div class="container pl-5">
    <h2>Program Keahlian</h2>
    <p>Program Keahlian yang ada di SMK 1 CODING ini ada 4:</p>
    <li>Akuntansi<br>
    <li>Komputer dan Jaringan<br>
    <li>Otomotif<br>
    <li>Rekayasa Perangkat Lunak
</div> -->

<br>

  <div class="jumbotron bg-info mb-0">
    <center><h3><font color="white">VISI</font></h3>
    <font color="white">MENJADI SMK UNGGULAN YANG ENGHASILKAN SUMBER DAYA MANUSIA BERMUTU DAN BERDAYA SAING TINGGI</font> 
    <br>
    <br>
    <h3> <font color="white">MISI</font></h3>
    <li>Membangun siswa yang menjunjung tinggi norma agama, budaya bangsa dan budi pekerti luhur.<br>
    <li>Menghasilkan siswa yang cerdas, terampil, kompetitif, inovatif, kreatif, dan mandiri serta memiliki jiwa kewirausahaan.<br>
    <li>Menyiapkan siswa menjadi tenaga kerja tangguh yang mampu bersaing di tingkat regional maupun global.<br>
    <li>Menumbuh kembangkan budaya kerja industri yang berwawasan lingkungan.<br>
    <li>Meningkatkan pelayanan pendidikan dan pengelolaan sekolah melalui layanan prima </center>
  </div>

  <div class="bg-dark text-light p-2">
    <center> 
      SMK 1 Coding
      2020-2021
    </center>
  </div>

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/jam.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>