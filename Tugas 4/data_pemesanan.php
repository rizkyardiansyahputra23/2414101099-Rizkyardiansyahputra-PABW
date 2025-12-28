<?php include "../config/database.php";
$data=mysqli_query($conn,"SELECT * FROM pemesanan"); ?>
<!DOCTYPE html><html><head><link rel="stylesheet" href="../assets/style.css"></head><body>
<section style="padding:60px"><h2 class="title">Data Pemesanan</h2>
<table border="1" cellpadding="8">
<tr><th>Nama</th><th>Paket</th><th>Aksi</th></tr>
<?php while($d=mysqli_fetch_array($data)){ ?>
<tr><td><?=$d['nama']?></td><td><?=$d['paket']?></td>
<td><a href="delete.php?id=<?=$d['id']?>">Hapus</a></td></tr>
<?php } ?>
</table></section></body></html>