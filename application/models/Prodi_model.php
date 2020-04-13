<?php
class Prodi_model extends CI_Model {

  public function tampilFakultas($table) {
    $this->db->select('nama_fakultas');
    return $this->db->get($table)->result_array(); // SELECT * FROM $table;
    // result_array() membuat data di table mahasiswa menjadi array_associative
    // tanpa result_array(), data akan jd object.. sbnrny lbh simple object sih
  }

  public function tambahProdi() {
    $data = [
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_prodi' => $this->input->post('kode_prodi', true),
      'nama_prodi' => $this->input->post('nama_prodi', true),
      'nama_fakultas' => $this->input->post('nama_fakultas', true)
    ];

    $this->db->insert('prodi',$data);
  }

  public function hapus($id,$table) {
    // $this->db->where('id',$id); baris ini sdh digantikan dg array di bawah
    $this->db->delete($table,['id_prodi' => $id]);
  }

  public function getById($id,$table) {
    return $this->db->get_where('prodi',['id_prodi' => $id])->row_array(); // row_array bisa diganti dg row() saja tp nnt jadiny object, bukan array.. sbnrny lbh simple object sih
  }

  public function editProdi() {
    $data = [
      // parameter true utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_prodi' => $this->input->post('kode_prodi', true),
      'nama_prodi' => $this->input->post('nama_prodi', true),
      'nama_fakultas' => $this->input->post('nama_fakultas', true)
    ];

    $this->db->where('id_prodi',$this->input->post('id_prodi'));
    $this->db->update('prodi',$data);
  }

  // pagination
  public function getProdi($limit,$start,$keyword = null) {
    if($keyword) {
      $this->db->like('kode_prodi',$keyword);
      $this->db->or_like('nama_prodi',$keyword);
    }
    return $this->db->get('prodi',$limit,$start)->result_array();
  }

}
