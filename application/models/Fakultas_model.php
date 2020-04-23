<?php
class Fakultas_model extends CI_Model {

  public function tambahFakultas() {
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_fakultas' => $this->input->post('kode_fakultas', TRUE),
      'nama_fakultas' => $this->input->post('nama_fakultas', TRUE)
    ];

    $this->db->insert('fakultas',$data);
  }

  public function hapus($id,$table) {
    // $this->db->where('id',$id); baris ini sdh digantikan dg array di bawah
    $this->db->delete($table,['id_fakultas' => $id]);
  }

  public function getById($id,$table) {
    return $this->db->get_where('fakultas',['id_fakultas' => $id])->row_array(); // row_array bisa diganti dg row() saja tp nnt jadiny object, bukan array.. sbnrny lbh simple object sih
  }

  public function editFakultas() {
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'kode_fakultas' => $this->input->post('kode_fakultas', TRUE),
      'nama_fakultas' => $this->input->post('nama_fakultas', TRUE)
    ];

    $this->db->where('id_fakultas',$this->input->post('id_fakultas'));
    $this->db->update('fakultas',$data);
  }

  // pagination
  public function getFakultas($limit,$start,$keyword = NULL) {
    if($keyword) {
      $this->db->like('kode_fakultas',$keyword);
      $this->db->or_like('nama_fakultas',$keyword);
    }
    return $this->db->get('fakultas',$limit,$start)->result_array();
  }

}
