<?php
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>|| Sistem Akademik Mahasiswa ||</title>
  <link rel="icon" type="image/x-icon" href="https://library.kissclipart.com/20180903/ctw/kissclipart-lcd-monitor-icon-png-clipart-computer-icons-comput-6e2a8bd3906387ac.jpg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--Style dari Bootstrap-->
  <link href="style/stylegetdata.css" rel="stylesheet">
  <!--Style tambahan sendiri-->
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Viga&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <center>
      </img src=/"http://www.pelitabangsa.ac.id/wp-content/uploads/2019/09/LOGO_UPB_NEW-1.png" width="150">
      <h4> MASUKAN NIM </h4>
    </center>
    <center>
      <form method="GET" action="search.php">
        <input type="number" name="nim" class="form-control" required>
    </center>
    <center><input type="submit" value="CARI" class="btn btn-primary "></center>
    </form>
  </div>
</body>

</html>