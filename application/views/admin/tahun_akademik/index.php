<h2>Daftar Tahun Akademik</h2>

<!-- ini untuk menampilkan flashdata, ketika tahun_akademik yg dicari tdk ada -->
<?php if (empty($tahun_akademik)): ?>
  <div class="danger">
    <p>Data tahun akademik tidak ditemukan.</p>
  </div>
<?php endif; ?>

<!-- flashdata div diganti jd flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<div class="cari">
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="Cari tahun akademik" autofocus>
    <button type="submit">Cari</button>
  </form>
  <a href="<?php echo base_url(); ?>admin/tahun_akademik/tambah" class="btn-primary">Tambah Tahun Akademik</a>
</div>

<h5>Hasil: <?php echo $total_rows; ?></h5>
<table>
  <tr>
    <th>No.</th>
    <th>Tahun Akademik</th>
    <th>Semester</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($tahun_akademik as $th): ?>
    <tr>
        <td><?php echo ++$mulai; ?></td>
        <td><?php echo $th['tahun_akademik']; ?></td>
        <td><?php echo $th['semester']; ?></td>
        <td><?php echo $th['status']; ?></td>
        <td>
          <a class="btn-primary" href="<?php echo base_url(); ?>admin/tahun_akademik/edit/<?php echo $th['id_th']; ?>">edit</a>
          <a class="btn-danger" href="<?php echo base_url(); ?>admin/tahun_akademik/hapus/<?php echo $th['id_th']; ?>">hapus</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php echo $this->pagination->create_links(); ?>
