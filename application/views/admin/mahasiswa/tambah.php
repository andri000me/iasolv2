<h2>Tambah Mahasiswa</h2>

<form action="" method="post">

  <label for="nim">NIM</label>
  <input type="text" name="nim">
  <div class="error">
    <?php echo form_error('nim'); ?>
  </div>

  <label for="nama_lengkap">Nama Lengkap</label>
  <input type="text" name="nama_lengkap">
  <div class="error">
    <?php echo form_error('nama_lengkap'); ?>
  </div>

  <label for="alamat">Alamat</label>
  <textarea name="alamat" rows="8" cols="50" maxlength="255"></textarea>

  <label for="email">Email</label>
  <input type="text" name="email">
  <div class="error">
    <?php echo form_error('email'); ?>
  </div>

  <label for="telp">Telp</label>
  <input type="text" name="telp">
  <div class="error">
    <?php echo form_error('telp'); ?>
  </div>

  <label for="tempat_lahir">Tempat Lahir</label>
  <input type="text" name="tempat_lahir">

  <label for="tgl_lahir">Tanggal Lahir</label>
  <input type="date" name="tgl_lahir">

  <label for="jenis_kel">Jenis Kelamin</label>
  <div class="select">
    <select name="jenis_kel">
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
    </select>
  </div>

  <label for="nama_prodi">Nama Prodi</label>
  <div class="select">
    <select name="nama_prodi">
      <?php foreach ($nama_prodi as $prd): ?>
        <option value="<?php echo $prd['nama_prodi'] ?>"><?php echo $prd['nama_prodi'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Tambah</button>
</form>
