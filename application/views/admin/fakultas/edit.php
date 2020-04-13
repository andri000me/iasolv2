<h2>Edit Fakultas</h2>

<form action="" method="post">

  <input type="hidden" name="id_fakultas" value="<?php echo $fakultas['id_fakultas']; ?>">

  <label for="kode_fakultas">Kode Fakultas</label>
  <input type="text" name="kode_fakultas" value="<?php echo $fakultas['kode_fakultas']; ?>">
  <div class="error">
    <?php echo form_error('kode_fakultas'); ?>
  </div>

  <label for="nama_fakultas">Nama Fakultas</label>
  <input type="text" name="nama_fakultas" value="<?php echo $fakultas['nama_fakultas']; ?>">
  <div class="error">
    <?php echo form_error('nama_fakultas'); ?>
  </div>

  <button type="submit" name="tambah" class="register">Edit</button>
</form>

<a class="btn-primary kembali" href="<?php echo base_url() ?>admin/fakultas">Kembali</a>
