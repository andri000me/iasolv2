<h2>Tambah Tahun Akademik</h2>

<form action="" method="post">

  <label for="tahun_akademik">Tahun Akademik</label>
  <input type="text" name="tahun_akademik">
  <div class="error">
    <?php echo form_error('tahun_akademik'); ?>
  </div>

  <label for="semester">Semester</label>
  <div class="select">
    <select name="semester">
      <option value="Ganjil">Ganjil</option>
      <option value="Genap">Genap</option>
    </select>
  </div>

  <label for="status">Status</label>
  <div class="select">
    <select name="status">
      <option value="Aktif">Aktif</option>
      <option value="Tidak Aktif">Tidak Aktif</option>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Tambah</button>
</form>
