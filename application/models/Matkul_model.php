<?php
class Matkul_model extends CI_Model {

  public function tampilProdi($table) {
    $this->db->select('nama_prodi');
    return $this->db->get($table)->result_array(); // SELECT * FROM $table;
    // result_array() membuat data di table mahasiswa menjadi array_associative
    // tanpa result_array(), data akan jd object.. sbnrny lbh simple object sih
  }

  public function tambahMatkul() {
    $data = [
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_matkul' => $this->input->post('kode_matkul', true),
      'nama_matkul' => $this->input->post('nama_matkul', true),
      'sks' => $this->input->post('sks', true),
      'smt' => $this->input->post('smt', true),
      'nama_prodi' => $this->input->post('nama_prodi', true)
    ];

    $this->db->insert('matkul',$data);
  }

  public function hapus($id,$table) {
    // $this->db->where('id',$id); baris ini sdh digantikan dg array di bawah
    $this->db->delete($table,['kode_matkul' => $id]);
  }

  public function getById($id,$table) {
    return $this->db->get_where('matkul',['kode_matkul' => $id])->row_array(); // row_array bisa diganti dg row() saja tp nnt jadiny object, bukan array.. sbnrny lbh simple object sih
  }

  public function editMatkul() {
    $data = [
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_matkul' => $this->input->post('kode_matkul', TRUE),
      'nama_matkul' => $this->input->post('nama_matkul', TRUE),
      'sks' => $this->input->post('sks', true),
      'smt' => $this->input->post('smt', true),
      'nama_prodi' => $this->input->post('nama_prodi', true)
    ];

    $this->db->where('kode_matkul',$this->input->post('kode_matkul'));
    $this->db->update('matkul',$data);
  }

  // pagination
  public function getMatkul($limit,$start,$keyword = NULL) {
    if($keyword) {
      $this->db->like('kode_matkul',$keyword);
      $this->db->or_like('nama_matkul',$keyword);
      $this->db->or_like('nama_prodi',$keyword);
    }
    return $this->db->get('matkul',$limit,$start)->result_array();
  }

}
