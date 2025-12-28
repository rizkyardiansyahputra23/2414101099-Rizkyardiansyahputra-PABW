<?php $paket=$_GET['paket']??'';?>
<!DOCTYPE html><html><head><link rel="stylesheet" href="../assets/style.css"></head><body>
<section style="padding:60px"><div class="card">
<h2 class="title">Form Pemesanan</h2>
<form action="proses_tambah.php" method="POST">
<div class="form-group"><label>Nama</label><input name="nama"></div>
<div class="form-group"><label>Email</label><input name="email"></div>
<div class="form-group"><label>No HP</label><input name="no_hp"></div>
<div class="form-group"><label>Paket</label><input name="paket" value="<?=$paket?>" readonly></div>
<div class="form-group"><label>Jumlah</label><input name="jumlah"></div>
<div class="form-group"><label>Tanggal</label><input type="date" name="tanggal"></div>
<button class="btn">Pesan</button>
</form></div></section></body></html>