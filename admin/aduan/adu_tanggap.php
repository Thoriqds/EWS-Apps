<div class="panel panel-info">
  <div class="panel-heading">
    <i class="glyphicon glyphicon-book"></i>
    <b>Data Aduan</b>
  </div>
  <div class="panel-body">

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th>No</th>
            <th>Pengadu</th>
            <th>No Telp</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Tanggal Masuk</th>
            <th>Foto</th>
            <th>status</th>
            <th>Aksi</th>

          </tr>

        </thead>
        <tbody>
          <?php
          $no = 1;
          $sql = $koneksi->query("select a.id_pengaduan, a.judul, a.no_telpon, a.foto, a.alamat, a.status, j.jenis, p.nama_pengadu, p.no_hp
						from tb_pengaduan a join tb_jenis j on a.jenis=j.id_jenis
						join tb_pengadu p on a.author=p.id_pengadu where status='Tanggapi'");
          while ($data = $sql->fetch_assoc()) {
          ?>
            <tr>
              <td>
                <?php echo $no++; ?>
              </td>
              <td>
                <?php echo $data['nama_pengadu']; ?>
              </td>
              <td>
                <?php echo $data['no_telpon']; ?>
              </td>
              <td>
                <?php echo $data['judul']; ?>
              </td>
              <td>
                <?php echo $data['jenis']; ?>
              </td>
              <td>
                <?php echo $data['alamat']; ?>
              </td>
              <td>
                <img src="foto/<?php echo $data['foto']; ?>" width="100px" onClick="window.open(this.src)" role="button" tabIndex="0" />
              </td>
              <td>
                <?php $stt = $data['status']  ?>
                <?php if ($stt == 'Proses') { ?>
                  <span class="label label-warning">menunggu</span>
                <?php } elseif ($stt == 'Tanggapi') { ?>
                  <span class="label label-success">Di Proses</span>
                <?php } else { ?>
                  <span class="label label-primary">Selesai</span>
              </td>
            <?php } ?>

            <td>

              <a href="?page=aduan_kelola&kode=<?php echo $data['id_pengaduan']; ?>" title="Tanggapi" class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-check"></i>
              </a>
              <a href="https://api.whatsapp.com/send?phone=<?php echo $data['no_telpon']; ?>&text=Sdr/i%20<?php echo $data['nama_pengadu']; ?>,
								%20Kapal%20 <?php echo $data['jenis']; ?>%20Sedang di proses untuk dilakukan%20perawatan kapal"
								 target=" _blank" title="Pesan WhatsApp" class="btn btn-success">
									<b>WA</b>
								</a>
            </td>

            </tr>

          <?php
          }
          ?>
        </tbody>
    </div>
  </div>
</div>