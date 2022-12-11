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

    mysqli_query($connect, "UPDATE input_table SET nim='$nim', nama='$nama', jns_kel='$jns_kel', tmpt_lhr='$tmpt_lhr', tgl_lhr='$tgl_lhr', almt='$almt', hobi='$hobi', email='$email', tlpn='$tlpn', gambar='$newimage' WHERE nim='$nim'");
 ?>