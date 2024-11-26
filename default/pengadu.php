<?php
$sql = $koneksi->query("SELECT COUNT(id_pengaduan) as proses  from tb_pengaduan where status='Proses' and author='$data_id'");
while ($data = $sql->fetch_assoc()) {
	$proses = $data['proses'];
}

$sql = $koneksi->query("SELECT COUNT(id_pengaduan) as tanggapi  from tb_pengaduan where status='Tanggapi' and author='$data_id'");
while ($data = $sql->fetch_assoc()) {
	$tangan = $data['tanggapi'];
}

$sql = $koneksi->query("SELECT COUNT(id_pengaduan) as selesai  from tb_pengaduan where status='Selesai' and author='$data_id'");
while ($data = $sql->fetch_assoc()) {
	$sel = $data['selesai'];
}

?>
<hr>
<div>
	<center>
		<h1>Selamat Datang,
			Komandan Kapal -
			<?= $data_level ?>
		</h1>
	</center>
</div>
<hr>
<div class="col-md-3 col-sm-6 col-xs-6">
	<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-red set-icon">
			<i class="fa fa-bell"></i>
		</span>
		<div class="text-box">
			<h1>
				<?= $proses; ?>
			</h1>
			<p>Menunggu Perawatan</p>

		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-6">
	<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-green set-icon">
			<i class="fa fa-bell"></i>
		</span>
		<div class="text-box">
			<h1>
				<?= $tangan; ?>
			</h1>
			<p>Proses Perawatan</p>

		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-6">
	<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-blue set-icon">
			<i class="fa fa-bell"></i>
		</span>
		<div class="text-box">
			<h1>
				<?= $sel; ?>
			</h1>
			<p>Perawatan Selesai</p>

		</div>
	</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-6">
	<div class="panel panel-back noti-box">
		<span class="icon-box bg-color-custom set-icon">
			<a class="fa fa-plus" href="?page=aduan_tambah" style="color:white;"></a>
		</span>
		<div class="text-box">
			<h1>
				+
			</h1>
			<p>
				<a href="?page=aduan_tambah">Tambah Aduan</a>
			</p>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Copyrights -->
<footer>
	<div class="bg-light py-4">
		<div class="container text-center">
		<a target="blank">© 2023 - Zulman Topani, A.Md.,S.Pdi</a>
		</div>
	</div>
</footer>
<!-- End -->