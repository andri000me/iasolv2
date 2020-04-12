<?php
class Mahasiswa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'Mahasiswa';
    // $data['mahasiswa'] = $this->Mahasiswa_model->tampil('mahasiswa');

    // pagination config singkat, sisanya ada di pagination.php
    $this->load->library('pagination');
    $config['total_rows'] = $this->Mahasiswa_model->hitung('mahasiswa');
    $config['per_page'] = 10;

    // initialize pagination
    $this->pagination->initialize($config);

    // menampilkan pagination
    $data['mulai'] = $this->uri->segment(4);
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa($config['per_page'],$data['mulai']);

    // jika kotak pencarian diisi
    if($this->input->post('keyword')) {
      $data['mahasiswa'] = $this->Mahasiswa_model->cariMahasiswa($config['per_page'],$data['mulai']);
    }

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/mahasiswa/index',$data);
    $this->load->view('admin_templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Mahasiswa';

    // ini rule dr CI
    $this->form_validation->set_rules('nim','NIM','required|numeric|max_length[9]',[
      'required' => 'NIM wajib diisi.',
      'numeric' => 'NIM harus angka.',
      'max_length' => 'NIM maksimal berisi 9 angka.'
    ]);
    $this->form_validation->set_rules('nama_lengkap','Nama','required',['required' => 'Nama lengkap wajib diisi.']);
    $this->form_validation->set_rules('telp','Telp','required|numeric',[
      'required' => 'Telp wajib diisi.',
      'numeric' => 'Telp harus angka.'
    ]);
    $this->form_validation->set_rules('email','Email','required|valid_email',[
      'required' => 'Email wajib diisi.',
      'valid_email' => 'Email harus valid.'
    ]);
    // nama = nama field, Nama = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $data['nama_prodi'] = $this->Mahasiswa_model->tampilProdi('prodi');
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/mahasiswa/tambah',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Mahasiswa_model->tambahMahasiswa();
      $this->session->set_flashdata('flash','Data mahasiswa berhasil ditambahkan.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/mahasiswa');
    }
  }

  public function hapus($id) {
    $this->Mahasiswa_model->hapus($id,'mahasiswa'); // hapus data dg id $id, dr table mahasiswa
    $this->session->set_flashdata('flash','Data mahasiswa berhasil dihapus.'); // flash = nama flash data (boleh sembarang)
    redirect('admin/mahasiswa');
  }

  public function detail($id) {
    $data['judul'] = 'Detail Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id,'mahasiswa'); // ambil data berdasarkan id $id, di table mahasiswa
    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/mahasiswa/detail',$data);
    $this->load->view('admin_templates/footer');
  }

  public function edit($id) {
    $data['judul'] = 'Tambah Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id,'mahasiswa');

    // ini rule dr CI
    $this->form_validation->set_rules('nim','NIM','required|numeric|max_length[9]',[
      'required' => 'NIM wajib diisi.',
      'numeric' => 'NIM harus angka.',
      'max_length' => 'NIM maksimal berisi 9 angka.'
    ]);
    $this->form_validation->set_rules('nama_lengkap','Nama','required',['required' => 'Nama lengkap wajib diisi.']);
    $this->form_validation->set_rules('telp','Telp','required|numeric',[
      'required' => 'Telp wajib diisi.',
      'numeric' => 'Telp harus angka.'
    ]);
    $this->form_validation->set_rules('email','Email','required|valid_email',[
      'required' => 'Email wajib diisi.',
      'valid_email' => 'Email harus valid.'
    ]);
    // nama = nama field, Nama = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $data['nama_prodi'] = $this->Mahasiswa_model->tampilProdi('prodi');
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/mahasiswa/edit',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Mahasiswa_model->editMahasiswa();
      $this->session->set_flashdata('flash','Data mahasiswa berhasil diedit.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/mahasiswa');
    }
  }

}