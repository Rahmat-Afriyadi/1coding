<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  body {
    overflow-y: hidden !important;
  }
  </style>
</head>
<body>
  
<?php include 'navbar.php'; ?>

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
      <img src="assets/gambar/caraousel/banner1.jpg" class="d-block w-100" alt="...">
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

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/jam.js"></script>
</body>
</html>