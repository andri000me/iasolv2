<?php
class Krs_model extends CI_model {

  public function tampilTahunAkademik() {
    $this->db->distinct();
    $this->db->select('tahun_akademik, semester');
    return $this->db->get('tahun_akademik')->result_array(); // SELECT tahun_akademik, semester FROM tahun_akademik;
    // result_array() membuat data di table tahun_akademik menjadi array_associative
  }

}
