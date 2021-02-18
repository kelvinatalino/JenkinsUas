<?php

$conn = mysqli_connect("172.19.0.2", "root", "root", "Trucorp");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT id, Nama, Kantor FROM users";
$result = mysqli_query($conn, $query);

$count=0;

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    $count++;
   }
    echo "Jumlah: " . $count . "user(s)";
} else {
  echo "Jumlah: " . $count . "user";
}

mysqli_close($conn);
?>
