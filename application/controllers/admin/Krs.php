<?php
class Krs extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Krs_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'KRS';
    $data = array(
      'nim' => set_value('nim'),
      'id_th' => set_value('id_th')
    );
    $data['tahun_akademik'] = $this->Krs_model->tampilTahunAkademik();

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/krs/index',$data);
    $this->load->view('admin_templates/footer');
  }

}
