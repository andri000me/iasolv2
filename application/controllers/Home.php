<?php
class Home extends CI_Controller {
  public function index($seksien = '') {
    $data['judul'] = 'Home';
    $data['seksien'] = $seksien; // mengambil data dr url home/index/[seksien]
    $this->load->view('admin_templates/header', $data);
    $this->load->view('admin_templates/sidebar', $seksien);
    $this->load->view('admin_templates/footer');
  }
}
// class ini cm buat latihan aja
