<?php
  include 'connect.php';

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jns_kel = $_POST['jns_kel'];
  $tmpt_lhr = $_POST['tmpt_lhr'];
  $tgl_lhr = $_POST['tgl_lhr'];
  $almt = $_POST['almt'];
  $hobi = $_POST['hobi'];
  $email = $_POST['email'];
  $tlpn = $_POST['tlpn'];
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];

  $newimage = date('dmYHis').$gambar;

  $path_gambar = "images/".$newimage;

  move_uploaded_file($tmp, $path_gambar);

  $query = "INSERT INTO input_table(nim, nama, jns_kel, tmpt_lhr, tgl_lhr, almt, hobi, email, tlpn, gambar) VALUES ('$nim','$nama','$jns_kel','$tmpt_lhr','$tgl_lhr','$almt','$hobi','$email','$tlpn','$newimage')";
  mysqli_query($connect, $query);
  header("location:success.html");
?>
