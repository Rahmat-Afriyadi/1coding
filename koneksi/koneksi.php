<?php 

$conn = mysqli_connect('localhost', 'root', '','1coding');

function query($query) {
  global $conn;

  $result = mysqli_query($conn, $query);
  $data = [];

  while ($rows = mysqli_fetch_assoc($result)){

    $data[] = $rows;

  }
  return $data;
}

?>