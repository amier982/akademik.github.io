<?php
$connect = mysqli_connect("localhost", "root", "", "data");


if (!$connect) {
  die("Koneksi gagal: " . mysqli_connect_error());
};
