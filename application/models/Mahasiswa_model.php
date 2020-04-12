<?php
class Mahasiswa_model extends CI_Model {

  // ini ga kepake lg
  public function tampil($table) {
    return $this->db->get($table)->result_array(); // SELECT * FROM $table;
    // result_array() membuat data di table mahasiswa menjadi array_associative
    // tanpa result_array(), data akan jd object.. sbnrny lbh simple object sih
  }

  public function tampilProdi($table) {
    $this->db->select('nama_prodi');
    return $this->db->get($table)->result_array(); // SELECT * FROM $table;
    // result_array() membuat data di table mahasiswa menjadi array_associative
    // tanpa result_array(), data akan jd object.. sbnrny lbh simple object sih
  }

  public function tambahMahasiswa() {
    $data = [
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'nim' => $this->input->post('nim', true),
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'alamat' => $this->input->post('alamat', true),
      'email' => $this->input->post('email', true),
      'telp' => $this->input->post('telp', true),
      'tempat_lahir' => $this->input->post('tempat_lahir', true),
      'tgl_lahir' => $this->input->post('tgl_lahir', true),
      'jenis_kel' => $this->input->post('jenis_kel', true),
      'nama_prodi' => $this->input->post('nama_prodi', true)
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
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'nim' => $this->input->post('nim', true),
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'alamat' => $this->input->post('alamat', true),
      'email' => $this->input->post('email', true),
      'telp' => $this->input->post('telp', true),
      'tempat_lahir' => $this->input->post('tempat_lahir', true),
      'tgl_lahir' => $this->input->post('tgl_lahir', true),
      'jenis_kel' => $this->input->post('jenis_kel', true),
      'nama_prodi' => $this->input->post('nama_prodi', true)
    ];

    $this->db->where('id',$this->input->post('id'));
    $this->db->update('mahasiswa',$data);
  }

  public function cariMahasiswa($limit,$start) {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nim',$keyword);
    $this->db->or_like('nama_lengkap',$keyword);
    $this->db->or_like('alamat',$keyword);
    $this->db->or_like('email',$keyword);
    $this->db->or_like('telp',$keyword);
    $this->db->or_like('tempat_lahir',$keyword);
    $this->db->or_like('tgl_lahir',$keyword);
    $this->db->or_like('jenis_kel',$keyword);
    $this->db->or_like('nama_prodi',$keyword);
    return $this->db->get('mahasiswa',$limit,$start)->result_array();
  }

  // pagination
  public function getMahasiswa($limit,$start,$keyword = null) {
    if($keyword) {
      $this->db->like('nim',$keyword);
      $this->db->or_like('nama_lengkap',$keyword);
    }
    return $this->db->get('mahasiswa',$limit,$start)->result_array();
  }

  // ini ga kepake lg
  public function hitung($table) {
    return $this->db->get($table)->num_rows();
  }

}
