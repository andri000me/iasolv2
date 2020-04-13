<h2>Tambah Prodi</h2>

<form action="" method="post">

  <label for="kode_prodi">Kode Prodi</label>
  <input type="text" name="kode_prodi">
  <div class="error">
    <?php echo form_error('kode_prodi'); ?>
  </div>

  <label for="nama_prodi">Nama Prodi</label>
  <input type="text" name="nama_prodi">
  <div class="error">
    <?php echo form_error('nama_prodi'); ?>
  </div>

  <label for="nama_fakultas">Nama Fakultas</label>
  <div class="select">
    <select name="nama_fakultas">
      <?php foreach ($nama_fakultas as $fks): ?>
        <option value="<?php echo $fks['nama_fakultas'] ?>"><?php echo $fks['nama_fakultas'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Tambah</button>
</form>
