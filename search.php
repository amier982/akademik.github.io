<?php
include "connect.php";

$name = $_GET['nim'];
$q = "SELECT * from input_table where nim = '$name' ";
$result = mysqli_query($connect, $q);
$data = mysqli_fetch_array($result);
if ($data <= 0) {
  header("location:data_notfound.php");
};
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>|| Sistem Akademik Mahasiswa ||</title>
  <link rel="icon" type="image/x-icon" href="https://library.kissclipart.com/20180903/ctw/kissclipart-lcd-monitor-icon-png-clipart-computer-icons-comput-6e2a8bd3906387ac.jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--Style dari Bootstrap-->
  <link href="style/stylesearch.css" rel="stylesheet">
  <!--Style tambahan sendiri-->
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Viga&display=swap" rel="stylesheet">
</head>
</body>
<div class="container">
  <center>
    </img class="logo" src=/"http://www.pelitabangsa.ac.id/wp-content/uploads/2019/09/LOGO_UPB_NEW-1.png" width="150">
    <h1>DATA MAHASISWA</h1>

  </center>
  <?php
  echo
  "
      <table border='1' cellspacing='0' cellpadding='3' align='center' id='tabel'>
      
        <tr>
        <td rowspan='12' align='right' class='image'><img src='images/" . $data['gambar'] . "' width='100' alt='Foto Pribadi'></td>
          <td class='td_h'>
            <label class='lbl'><b>NIM</b></label> :
          </td>
          <td class='td_b'>" . $data['nim'] . "</td>
          
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Nama Mahasiswa</b></label> :</td>
          <td class='td_b'>" . $data['nama'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Jenis Kelamin</b></label> :</td>
          <td class='td_b'>" . $data['jns_kel'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Tempat Lahir</b></label> :</td>
          <td class='td_b'>" . $data['tmpt_lhr'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Tanggal Lahir</b></label> :</td>
          <td class='td_b'>" . $data['tgl_lhr'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Alamat</b></label> :</td>
          <td class='td_b'>" . $data['almt'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Hobi</b></label> :</td>
          <td class='td_b'>" . $data['hobi'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Email</b></label> :</td>
          <td class='td_b'>" . $data['email'] . "</td>
        </tr>
        <tr>
          <td class='td_h'><label class='lbl'><b>Telpon</b></label> :</td>
          <td class='td_b'>" . $data['tlpn'] . "</td>
        </tr>";
  echo "</table>";
  ?>
  <center>
    <a class="btn btn-danger" href="delete_data.php?nim=<?php echo $data['nim']; ?>" onclick=" return confirm('yakin??');">HAPUS DATA</a>
    <a class="btn btn-info" href="edit_data.php?nim=<?php echo $data['nim']; ?>">EDIT DATA</a>
    <a class="btn btn-primary" href="getdata.php">HOME</a>
  </center>
</div>