<h2>Edit Tahun Akademik</h2>

<form action="" method="post">

  <input type="hidden" name="id_th" value="<?php echo $tahun_akademik['id_th']; ?>">

  <label for="tahun_akademik">Tahun Akademik</label>
  <input type="text" name="tahun_akademik" value="<?php echo $tahun_akademik['tahun_akademik']; ?>">
  <div class="error">
    <?php echo form_error('tahun_akademik'); ?>
  </div>

  <label for="semester">Semester</label>
  <div class="select">
    <select name="semester">
      <option value="<?php echo $tahun_akademik['semester'] ?>"><?php echo $tahun_akademik['semester'] ?></option>
      <?php if ($tahun_akademik['semester'] == 'Ganjil'): ?>
        <option value="Genap">Genap</option>
      <?php else: ?>
        <option value="Ganjil">Ganjil</option>
      <?php endif; ?>
    </select>
  </div>

  <label for="status">Status</label>
  <div class="select">
    <select name="status">
      <option value="<?php echo $tahun_akademik['status'] ?>"><?php echo $tahun_akademik['status'] ?></option>
      <?php if ($tahun_akademik['status'] == 'Aktif'): ?>
        <option value="Tidak Aktif">Tidak Aktif</option>
      <?php else: ?>
        <option value="Aktif">Aktif</option>
      <?php endif; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Edit</button>
</form>

<a class="btn-primary kembali" href="<?php echo base_url() ?>admin/tahun_akademik">Kembali</a>
