<?php include "../config/database.php";
mysqli_query($conn,"INSERT INTO pemesanan(nama,email,no_hp,paket,jumlah,tanggal)
VALUES('$_POST[nama]','$_POST[email]','$_POST[no_hp]','$_POST[paket]','$_POST[jumlah]','$_POST[tanggal]')");
header("location:data_pemesanan.php"); ?>