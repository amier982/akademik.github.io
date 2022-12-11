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
  <link href="style/styleform.css" rel="stylesheet">
  <!--Style tambahan sendiri-->
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Viga&display=swap" rel="stylesheet">
</head>

<body>
  <div>
    <tr>
    <tr>


      <hr />
      <div class="container">
        <div class="box">
          <center>
            </img src/="http://www.pelitabangsa.ac.id/wp-content/uploads/2019/09/LOGO_UPB_NEW-1.png" width="150px">
            <h4> MASUKAN DATA ANDA </h4>
          </center>
          <form method="POST" action="save.php" enctype="multipart/form-data">
            <div class="form-group">
              <table>
                <tr>
                  <td>NIM</td>
                  <td>
                    <input type="number" class="form-control" name="nim" required>
                  </td>
                </tr>
                <tr>
                  <td>Nama Lengkap</td>
                  <td>
                    <input type="text" class="form-control" name="nama" required>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <input type="radio" class="check" name="jns_kel" value="Laki - Laki" checked> Laki - Laki
                    <input type="radio" class="check" name="jns_kel" value="Perempuan"> Perempuan
                  </td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td>
                    <input type="text" class="form-control" name="tmpt_lhr" required>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>
                    <input type="date" class="form-control" name="tgl_lhr" required>
                  </td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>
                    <textarea name="almt" class="form-control" required></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Hobi</td>
                  <td>
                    <input type="text" name="hobi" class="form-control" required>
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>
                    <input type="email" name="email" class="form-control" required>
                  </td>
                </tr>
                <tr>
                  <td>Nomor Telpon</td>
                  <td>
                    <input type="number" name="tlpn" class="form-control tlp" required>
                  </td>
                </tr>
                <tr>
                  <td>Upload Foto</td>
                  <td>
                    <input type="file" name="gambar" class="form-control-file" value="Upload Foto Anda" required>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <center>
                      <button type="submit" class="btn btn-primary">KIRIM</button>
                      <button type="reset" class="btn btn-secondary">RESET</button>
                    </center>
                  </td>
                </tr>

              </table>
            </div>
          </form>
        </div>
      </div>
  </div>
</body>

</html>