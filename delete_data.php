<?php
    include "connect.php";

    $name = $_GET['nim'];
    $q = "DELETE from input_table where nim='$name' ";
    mysqli_query($connect, $q);

    header("location:succes_del.html");

?>