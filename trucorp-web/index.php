<?php

$conn = mysqli_connect("172.19.0.2", "root", "root", "Trucorp");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT id, Nama, Kantor FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Nama: " . $row["Nama"]. " - Kantor(Pusat / Cabang): " . $row["Kantor"]. "<br>";
  }
} else {
  echo "No Users";
}

mysqli_close($conn);
?>
