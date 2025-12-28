<?php include "../config/database.php";
mysqli_query($conn,"DELETE FROM pemesanan WHERE id='$_GET[id]'");
header("location:data_pemesanan.php"); ?>