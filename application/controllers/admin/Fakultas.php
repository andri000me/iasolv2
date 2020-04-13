<?php
class Fakultas extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Fakultas_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'Fakultas';
    // $data['fakultas'] = $this->Fakultas_model->tampil('fakultas');

    // load library pagination
    $this->load->library('pagination');

    // jika kotak pencarian diisi
    if($this->input->post('keyword')) {
      $data['keyword'] = $this->input->post('keyword'); // $keyword diisi dg keyword di kotak pencarian
      $this->session->set_userdata('keyword',$data['keyword']); // membuat session dg nama keyword, yg diisi dg $keyword.. ini spy pagination berjalan
    } else {
      $data['keyword'] = $this->session->userdata('keyword'); // ini utk pagination & menangani jika tdk ada keyword yg diketik
    }

    // pagination config singkat, sisanya ada di pagination.php
    $this->db->like('kode_fakultas',$data['keyword']);
    $this->db->or_like('nama_fakultas',$data['keyword']);
    $this->db->from('fakultas');
    $config['total_rows'] = $this->db->count_all_results(); // menghitung jumlah baris dr query terakhir yg dilakukan
    $config['per_page'] = 10;

    // initialize pagination
    $this->pagination->initialize($config);

    // menampilkan pagination
    $data['mulai'] = $this->uri->segment(4);
    $data['fakultas'] = $this->Fakultas_model->getFakultas($config['per_page'],$data['mulai'],$data['keyword']);
    $data['total_rows'] = $config['total_rows'];

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/fakultas/index',$data);
    $this->load->view('admin_templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Fakultas';

    // ini rule dr CI
    $this->form_validation->set_rules('kode_fakultas','Kode Fakultas','required|max_length[9]',[
      'required' => 'Kode fakultas wajib diisi.',
      'max_length' => 'Kode fakultas maksimal berisi 2 huruf.'
    ]);
    $this->form_validation->set_rules('nama_fakultas','Nama Fakultas','required',['required' => 'Nama fakultas wajib diisi.']);
    // nama_lengkap = nama field, Nama Fakultas = nama label

    if($this->form_validation->run() == FALSE) {
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/fakultas/tambah',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Fakultas_model->tambahFakultas();
      $this->session->set_flashdata('flash','Data fakultas berhasil ditambahkan.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/fakultas');
    }
  }

  // method ini bs dipakai utk data dr table lain jg
  public function hapus($id) {
    $this->Fakultas_model->hapus($id,'fakultas'); // hapus data dg id $id, dr table fakultas
    $this->session->set_flashdata('flash','Data fakultas berhasil dihapus.'); // flash = nama flash data (boleh sembarang)
    redirect('admin/fakultas');
  }

  // method ini bs dipakai utk data dr table lain jg
  public function detail($id) {
    $data['judul'] = 'Detail Fakultas';
    $data['fakultas'] = $this->Fakultas_model->getById($id,'fakultas'); // ambil data berdasarkan id $id, di table fakultas
    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/fakultas/detail',$data);
    $this->load->view('admin_templates/footer');
  }

  public function edit($id) {
    $data['judul'] = 'Tambah Fakultas';
    $data['fakultas'] = $this->Fakultas_model->getById($id,'fakultas');

    // ini rule dr CI
    $this->form_validation->set_rules('kode_fakultas','Kode Fakultas','required|max_length[9]',[
      'required' => 'Kode fakultas wajib diisi.',
      'max_length' => 'Kode fakultas maksimal berisi 2 huruf.'
    ]);
    $this->form_validation->set_rules('nama_fakultas','Nama Fakultas','required',['required' => 'Nama fakultas wajib diisi.']);
    // nama_lengkap = nama field, Nama Fakultas = nama label

    if($this->form_validation->run() == FALSE) {
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/fakultas/edit',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Fakultas_model->editFakultas();
      $this->session->set_flashdata('flash','Data fakultas berhasil diedit.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/fakultas');
    }
  }

}
