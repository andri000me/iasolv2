<h2>Edit Matkul</h2>

<form action="" method="post">

  <label for="kode_matkul">Kode Matkul</label>
  <input type="text" name="kode_matkul" value="<?php echo $matkul['kode_matkul']; ?>">
  <div class="error">
    <?php echo form_error('kode_matkul'); ?>
  </div>

  <label for="nama_matkul">Nama Matkul</label>
  <input type="text" name="nama_matkul" value="<?php echo $matkul['nama_matkul']; ?>">
  <div class="error">
    <?php echo form_error('nama_matkul'); ?>
  </div>

  <label for="sks">SKS</label>
  <input type="text" name="sks" value="<?php echo $matkul['sks']; ?>">
  <div class="error">
    <?php echo form_error('sks'); ?>
  </div>

  <label for="smt">Semester</label>
  <input type="text" name="smt" value="<?php echo $matkul['smt']; ?>">
  <div class="error">
    <?php echo form_error('smt'); ?>
  </div>

  <label for="nama_prodi">Nama Prodi</label>
  <div class="select">
    <select name="nama_prodi">
      <option value="<?php echo $matkul['nama_prodi']; ?>"><?php echo $matkul['nama_prodi']; ?></option>
      <?php foreach ($nama_prodi as $prd): ?>
        <option value="<?php echo $prd['nama_prodi']; ?>"><?php echo $prd['nama_prodi']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Edit</button>
</form>

<a class="btn-primary kembali" href="<?php echo base_url() ?>admin/matkul">Kembali</a>
