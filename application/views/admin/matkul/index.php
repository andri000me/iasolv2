<h2>Daftar Matkul</h2>

<!-- ini untuk menampilkan flashdata, ketika matkul yg dicari tdk ada -->
<?php if (empty($matkul)): ?>
  <div class="danger">
    <p>Data matkul tidak ditemukan.</p>
  </div>
<?php endif; ?>

<!-- flashdata div diganti jd flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<div class="cari">
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="Cari matkul" autofocus>
    <button type="submit">Cari</button>
  </form>
  <a href="<?php echo base_url(); ?>admin/matkul/tambah" class="btn-primary">Tambah Matkul</a>
</div>

<h5>Hasil: <?php echo $total_rows; ?></h5>
<table>
  <tr>
    <th>No.</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($matkul as $mtk): ?>
    <tr>
        <td><?php echo ++$mulai; ?></td>
        <td><?php echo $mtk['kode_matkul']; ?></td>
        <td width="200px"><?php echo $mtk['nama_matkul']; ?></td>
        <td><?php echo $mtk['nama_prodi']; ?></td>
        <td>
          <a class="btn-success" href="<?php echo base_url(); ?>admin/matkul/detail/<?php echo $mtk['kode_matkul']; ?>">detail</a>
          <a class="btn-primary" href="<?php echo base_url(); ?>admin/matkul/edit/<?php echo $mtk['kode_matkul']; ?>">edit</a>
          <a class="btn-danger" href="<?php echo base_url(); ?>admin/matkul/hapus/<?php echo $mtk['kode_matkul']; ?>">hapus</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links(); ?>
