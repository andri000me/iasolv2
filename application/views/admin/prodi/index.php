<h2>Daftar Prodi</h2>

<!-- ini untuk menampilkan flashdata, ketika prodi yg dicari tdk ada -->
<?php if (empty($prodi)): ?>
  <div class="danger">
    <p>Data prodi tidak ditemukan.</p>
  </div>
<?php endif; ?>

<!-- flashdata div diganti jd flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<div class="cari">
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="Cari prodi" autofocus>
    <button type="submit">Cari</button>
  </form>
  <a href="<?php echo base_url(); ?>admin/prodi/tambah" class="btn-primary">Tambah Prodi</a>
</div>

<h5>Hasil: <?php echo $total_rows; ?></h5>
<table>
  <tr>
    <th>No.</th>
    <th>Kode Prodi</th>
    <th>Nama Prodi</th>
    <th>Nama Fakultas</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($prodi as $prd): ?>
    <tr>
        <td><?php echo ++$mulai; ?></td>
        <td><?php echo $prd['kode_prodi']; ?></td>
        <td><?php echo $prd['nama_prodi']; ?></td>
        <td><?php echo $prd['nama_fakultas']; ?></td>
        <td>
          <a class="btn-primary" href="<?php echo base_url(); ?>admin/prodi/edit/<?php echo $prd['id_prodi']; ?>">edit</a>
          <a class="btn-danger" href="<?php echo base_url(); ?>admin/prodi/hapus/<?php echo $prd['id_prodi']; ?>">hapus</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links(); ?>
