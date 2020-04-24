<?php
class Mahasiswa_model extends CI_Model {

  public function tampilProdi($table) {
    $this->db->select('nama_prodi');
    return $this->db->get($table)->result_array(); // SELECT * FROM $table;
    // result_array() membuat data di table mahasiswa menjadi array_associative
    // tanpa result_array(), data akan jd object.. sbnrny lbh simple object sih
  }

  public function tambahMahasiswa() {

    // mengambil kode_prodi dr nama_prodi yg diinput di form
    $this->db->select('kode_prodi');
    $kode_prodi = $this->db->get_where('prodi',['nama_prodi' => $this->input->post('nama_prodi')])->row_array();

    // mengambil tahun angkatan dr 2 digit di tengah nim
    $query = $this->db->query('SELECT MID(nim,4,2) AS nims FROM mahasiswa HAVING nims = '.date("y")); // menampilkan table berisi mahasiswa yg mendaftar tahun ini
    $angkatan = $query->num_rows(); // menghitung jumlah baris di $query
    $lastdigit = sprintf("%'04d", $angkatan); // menghasilkan angka yg di awali 0000 di awal

    // nim berisi = kode_prodi + angkatan + jumlah siswa di angkatan & prodi itu
    $nim = $kode_prodi['kode_prodi'] . date("y") . $lastdigit;

    // membuat array yg akan dimasukkan ke database
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'nim' => $nim,
      'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
      'alamat' => $this->input->post('alamat', TRUE),
      'email' => $this->input->post('email', TRUE),
      'telp' => $this->input->post('telp', TRUE),
      'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
      'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
      'jenis_kel' => $this->input->post('jenis_kel', TRUE),
      'nama_prodi' => $this->input->post('nama_prodi', TRUE),
      'sks' => 24
    ];

    $this->db->insert('mahasiswa',$data);
  }

  public function hapus($id,$table) {
    // $this->db->where('id',$id); baris ini sdh digantikan dg array di bawah
    $this->db->delete($table,['id' => $id]);
  }

  public function getById($id,$table) {
    return $this->db->get_where('mahasiswa',['id' => $id])->row_array(); // row_array bisa diganti dg row() saja tp nnt jadiny object, bukan array.. sbnrny lbh simple object sih
  }

  public function editMahasiswa() {
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'nim' => $this->input->post('nim', TRUE),
      'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
      'alamat' => $this->input->post('alamat', TRUE),
      'email' => $this->input->post('email', TRUE),
      'telp' => $this->input->post('telp', TRUE),
      'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
      'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
      'jenis_kel' => $this->input->post('jenis_kel', TRUE),
      'nama_prodi' => $this->input->post('nama_prodi', TRUE)
    ];

    $this->db->where('id',$this->input->post('id'));
    $this->db->update('mahasiswa',$data);
  }

  // pagination
  public function getMahasiswa($limit,$start,$keyword = null) {
    if($keyword) {
      $this->db->like('nim',$keyword);
      $this->db->or_like('nama_lengkap',$keyword);
      $this->db->or_like('alamat',$keyword);
      $this->db->or_like('email',$keyword);
      $this->db->or_like('telp',$keyword);
      $this->db->or_like('tempat_lahir',$keyword);
      $this->db->or_like('tgl_lahir',$keyword);
      $this->db->or_like('jenis_kel',$keyword);
      $this->db->or_like('nama_prodi',$keyword);
    }
    return $this->db->get('mahasiswa',$limit,$start)->result_array();
  }

}
