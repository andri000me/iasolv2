<h2>Detail Mahasiswa</h2>

<a class="btn-primary" href="<?php echo base_url() ?>admin/mahasiswa">Kembali</a>

<table>
  <tr>
    <th>NIM : </th>
    <td><?php echo $mahasiswa['nim']; ?></td>
  </tr>
  <tr>
    <th>Nama : </th>
    <td><?php echo $mahasiswa['nama_lengkap']; ?></td>
  </tr>
  <tr>
    <th>Alamat : </th>
    <td><?php echo $mahasiswa['alamat']; ?></td>
  </tr>
  <tr>
    <th>Email : </th>
    <td><?php echo $mahasiswa['email']; ?></td>
  </tr>
  <tr>
    <th>Telp : </th>
    <td><?php echo $mahasiswa['telp']; ?></td>
  </tr>
  <tr>
    <th>Tempat Lahir : </th>
    <td><?php echo $mahasiswa['tempat_lahir']; ?></td>
  </tr>
  <tr>
    <th>Tanggal Lahir : </th>
    <td><?php echo $mahasiswa['tgl_lahir']; ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin : </th>
    <td><?php echo $mahasiswa['jenis_kel']; ?></td>
  </tr>
  <tr>
    <th>Nama Prodi : </th>
    <td><?php echo $mahasiswa['nama_prodi']; ?></td>
  </tr>
</table>
