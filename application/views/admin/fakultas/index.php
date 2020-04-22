<h2>Daftar Fakultas</h2>

<!-- ini untuk menampilkan flashdata, ketika fakultas yg dicari tdk ada -->
<?php if (empty($fakultas)): ?>
  <div class="danger">
    <p>Data fakultas tidak ditemukan.</p>
  </div>
<?php endif; ?>

<!-- flashdata div diganti jd flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<!-- ini untuk menampilkan flashdata, ketika data sukses diubah, ditambahkan, dihapus -->
<?php if ($this->session->flashdata('flash')): ?>
  <!-- <div class="success">
    <p>
      <?php // echo $this->session->flashdata('flash'); ?>
    </p>
  </div> -->
<?php endif; ?>

<div class="cari">
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="Cari fakultas" autofocus>
    <button type="submit">Cari</button>
  </form>
  <a href="<?php echo base_url(); ?>admin/fakultas/tambah" class="btn-primary">Tambah Fakultas</a>
</div>

<h5>Hasil: <?php echo $total_rows; ?></h5>
<table>
  <tr>
    <th>No.</th>
    <th>Kode Fakultas</th>
    <th>Nama Fakultas</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($fakultas as $fks): ?>
    <tr>
        <td><?php echo ++$mulai; ?></td>
        <td><?php echo $fks['kode_fakultas']; ?></td>
        <td><?php echo $fks['nama_fakultas']; ?></td>
        <td>
          <a class="btn-primary" href="<?php echo base_url(); ?>admin/fakultas/edit/<?php echo $fks['id_fakultas']; ?>">edit</a>
          <a class="btn-danger" href="<?php echo base_url(); ?>admin/fakultas/hapus/<?php echo $fks['id_fakultas']; ?>">hapus</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links(); ?>
