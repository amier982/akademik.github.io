<?php
include "connect.php";

$name = $_GET['nim'];
$q = "SELECT * from input_table where nim = '$name' ";
$result = mysqli_query($connect, $q);
$data = mysqli_fetch_array($result);
?>

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
        <h1>Silahkan Edit dan Perbaiki Data Anda</h1>
        <hr />
        <hr />
        <div class="container">
            <div class="box">
                <center>
                    </img src=/"http://www.pelitabangsa.ac.id/wp-content/uploads/2019/09/LOGO_UPB_NEW-1.png" width="150px">

                </center>
                <form method="POST" action="update_data.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <table>
                            <tr>
                                <td>NIM</td>
                                <td>
                                    <input type="number" class="form-control" name="nim" value="<?php echo $data['nim'] ?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="text" class="form-control" name="jns_kel" value="<?php echo $data['jns_kel'] ?>" checked>
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>
                                    <input type="text" class="form-control" name="tmpt_lhr" value="<?php echo $data['tmpt_lhr'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>
                                    <input type="date" class="form-control" name="tgl_lhr" required value="<?php echo $data['tgl_lhr'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                    <textarea name="almt" class="form-control" required><?php echo $data['almt']; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>
                                    <input type="text" name="hobi" class="form-control" value="<?php echo $data['hobi'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor Telpon</td>
                                <td>
                                    <input type="number" name="tlpn" class="form-control tlp" value="<?php echo $data['tlpn'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload Foto</td>
                                <td>
                                    <input type="file" name="gambar" class="form-control-file" value="<?php echo $data['gambar'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        <a class="btn btn-danger" href="search.php?nim=<?php echo $data['nim']; ?>" onclick=" return confirm('yakin??');">BATAL</a>
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