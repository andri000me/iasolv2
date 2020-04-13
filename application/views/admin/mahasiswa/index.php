<h2>Daftar Mahasiswa</h2>

<!-- ini untuk menampilkan flashdata, ketika mahasiswa yg dicari tdk ada -->
<?php if (empty($mahasiswa)): ?>
  <div class="danger">
    <p>Data mahasiswa tidak ditemukan.</p>
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
    <input type="text" name="keyword" placeholder="Cari mahasiswa" autofocus>
    <button type="submit">Cari</button>
  </form>
  <a href="<?php echo base_url(); ?>admin/mahasiswa/tambah" class="btn-primary">Tambah Mahasiswa</a>
</div>

<h5>Hasil: <?php echo $total_rows; ?></h5>
<table>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($mahasiswa as $mhs): ?>
    <tr>
        <td><?php echo ++$mulai; ?></td>
        <td><?php echo $mhs['nama_lengkap']; ?></td>
        <td><?php echo $mhs['nim']; ?></td>
        <td><?php echo $mhs['nama_prodi']; ?></td>
        <td>
          <a class="btn-success" href="<?php echo base_url(); ?>admin/mahasiswa/detail/<?php echo $mhs['id']; ?>">detail</a>
          <a class="btn-primary" href="<?php echo base_url(); ?>admin/mahasiswa/edit/<?php echo $mhs['id']; ?>">edit</a>
          <a class="btn-danger" href="<?php echo base_url(); ?>admin/mahasiswa/hapus/<?php echo $mhs['id']; ?>">hapus</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links(); ?>
