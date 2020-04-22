<h2>Detail Matkul</h2>

<a class="btn-primary" href="<?php echo base_url() ?>admin/matkul">Kembali</a>

<table>
  <tr>
    <th>Kode : </th>
    <td><?php echo $matkul['kode_matkul']; ?></td>
  </tr>
  <tr>
    <th>Nama : </th>
    <td><?php echo $matkul['nama_matkul']; ?></td>
  </tr>
  <tr>
    <th>SKS : </th>
    <td><?php echo $matkul['sks']; ?></td>
  </tr>
  <tr>
    <th>Semester : </th>
    <td><?php echo $matkul['smt']; ?></td>
  </tr>
  <tr>
    <th>Prodi : </th>
    <td><?php echo $matkul['nama_prodi']; ?></td>
  </tr>
</table>
