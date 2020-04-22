<h2>KRS</h2>

<form action="" method="post">

  <label for="nim">NIM</label>
  <input type="text" name="nim">
  <div class="error">
    <?php echo form_error('nim'); ?>
  </div>

  <label for="tahun_akademik">Tahun Akademik</label>
  <div class="select">
    <select name="tahun_akademik">
      <?php foreach ($tahun_akademik as $th): ?>
        <option value="<?php echo $th['tahun_akademik']; ?>"><?php echo $th['tahun_akademik']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <label for="semester">Semester</label>
  <div class="select">
    <select name="semester">
      <?php foreach ($tahun_akademik as $th): ?>
        <option value="<?php echo $th['semester']; ?>"><?php echo $th['semester']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" name="tambah" class="register">Proses</button>
</form>
