<h2>Tambah Fakultas</h2>

<form action="" method="post">

  <label for="kode_fakultas">Kode Fakultas</label>
  <input type="text" name="kode_fakultas">
  <div class="error">
    <?php echo form_error('kode_fakultas'); ?>
  </div>

  <label for="nama_fakultas">Nama Fakultas</label>
  <input type="text" name="nama_fakultas">
  <div class="error">
    <?php echo form_error('nama_fakultas'); ?>
  </div>

  <button type="submit" name="tambah" class="register">Tambah</button>
</form>
