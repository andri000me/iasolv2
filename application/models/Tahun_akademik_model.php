<?php
class Tahun_akademik_model extends CI_Model {

  // pagination
  public function getTahun_akademik($limit,$mulai,$keyword = null) {
    if($keyword) {
      $this->db->like('tahun_akademik',$keyword);
      $this->db->or_like('semester',$keyword);
      $this->db->or_like('status',$keyword);
    }
    return $this->db->get('tahun_akademik',$limit,$mulai)->result_array();
  }

  public function tambahTahun_akademik() {
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'tahun_akademik' => $this->input->post('tahun_akademik', TRUE),
      'semester' => $this->input->post('semester', TRUE),
      'status' => $this->input->post('status', TRUE)
    ];

    $this->db->insert('tahun_akademik',$data);
  }

  public function hapus($id,$table) {
    // $this->db->where('id',$id); baris ini sdh digantikan dg array di bawah
    $this->db->delete($table,['id_th' => $id]);
  }

  public function getById($id,$table) {
    return $this->db->get_where('tahun_akademik',['id_th' => $id])->row_array(); // row_array bisa diganti dg row() saja tp nnt jadiny object, bukan array.. sbnrny lbh simple object sih
  }

  public function editTahun_akademik() {
    $data = [
      // parameter TRUE utk mengamankan dr cross site scripting spt (htmlspecialchars) pd phpmvc
      'tahun_akademik' => $this->input->post('tahun_akademik', TRUE),
      'semester' => $this->input->post('semester', TRUE),
      'status' => $this->input->post('status', TRUE)
    ];

    $this->db->where('id_th',$this->input->post('id_th'));
    $this->db->update('tahun_akademik',$data);
  }

}
