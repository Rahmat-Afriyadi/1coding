<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-1 pb-1 pr-5 fixed-top">
    <a class="navbar-brand" href="#"></a>
    <h2 class="text-white">SMK 1 Coding |</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"> <h4>Home</h4> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kejuruan.php"><h4>Kejuruan</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h4>Ekstrakurikuler</h4></a>
        </li>
      </ul>
    </div>
    <div id="MyClockDisplay" class="clock" onload="showTime()" style="background-color: <?php 

      date_default_timezone_set("Asia/Jakarta");
      $hari = (int)date("w");
      $jam = (int)date("H");
      if ($hari >  5) {        
        echo ($jam > 17)  ? "#fc1a0a":"#0fe800";
      } elseif (date("w") > 6 ) {
        echo "#fc1a0a";
      }else {
        echo ($jam > 21)  ? "#fc1a0a":"#0fe800";
      }
    ?>"></div>
</nav> 