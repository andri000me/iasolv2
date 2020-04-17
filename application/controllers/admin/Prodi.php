<?php
class Prodi extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Prodi_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'Prodi';
    // $data['prodi'] = $this->Prodi_model->tampil('prodi');

    // load library pagination
    $this->load->library('pagination');

    // jika kotak pencarian diisi (ini berhubungan dg pagination)
    if($this->input->post('keyword')) {
      $data['keyword'] = $this->input->post('keyword'); // $keyword diisi dg keyword di kotak pencarian
      $this->session->set_userdata('keyword',$data['keyword']); // membuat session dg nama keyword, yg diisi dg $keyword.. ini spy pagination berjalan
    } elseif ($this->input->post('keyword') == 'a') { // jika keyword diisi dg 'a' (blm berfungsi)
      // $data['keyword'] = '';
      // $this->session->set_userdata('keyword','');
      $this->session->unset_userdata('keyword'); // mereset pencarian dg mereset session
    } else {
      $data['keyword'] = $this->session->userdata('keyword'); // ini utk pagination & menangani jika tdk ada keyword yg diketik
    }

    // pagination config singkat, sisanya ada di pagination.php
    $this->db->like('kode_prodi',$data['keyword']);
    $this->db->or_like('nama_prodi',$data['keyword']);
    $this->db->or_like('nama_fakultas',$data['keyword']);
    $this->db->from('prodi');
    $config['total_rows'] = $this->db->count_all_results(); // menghitung jumlah baris dr query terakhir yg dilakukan
    $config['per_page'] = 10;

    // initialize pagination
    $this->pagination->initialize($config);

    // menampilkan pagination
    $data['mulai'] = $this->uri->segment(4);
    $data['prodi'] = $this->Prodi_model->getProdi($config['per_page'],$data['mulai'],$data['keyword']);
    $data['total_rows'] = $config['total_rows'];

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/prodi/index',$data);
    $this->load->view('admin_templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Prodi';

    // ini rule dr CI
    $this->form_validation->set_rules('kode_prodi','Kode Prodi','required|max_length[2]',[
      'required' => 'Kode prodi wajib diisi.',
      'max_length' => 'Kode prodi maksimal berisi 2 angka.'
    ]);
    $this->form_validation->set_rules('nama_prodi','Nama Prodi','required',['required' => 'Nama prodi wajib diisi.']);
    $this->form_validation->set_rules('nama_fakultas','Nama Fakultas','required',['required' => 'Nama fakultas wajib diisi.']);
    // nama_fakultas = nama field, Nama Fakultas = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $data['nama_fakultas'] = $this->Prodi_model->tampilFakultas('fakultas');
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/prodi/tambah',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Prodi_model->tambahProdi();
      $this->session->set_flashdata('flash','Data prodi berhasil ditambahkan.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/prodi');
    }
  }

  // method ini bs dipakai utk data dr table lain jg
  public function hapus($id) {
    $this->Prodi_model->hapus($id,'prodi'); // hapus data dg id $id, dr table prodi
    $this->session->set_flashdata('flash','Data prodi berhasil dihapus.'); // flash = nama flash data (boleh sembarang)
    redirect('admin/prodi');
  }

  // method ini bs dipakai utk data dr table lain jg
  public function detail($id) {
    $data['judul'] = 'Detail Prodi';
    $data['prodi'] = $this->Prodi_model->getById($id,'prodi'); // ambil data berdasarkan id $id, di table prodi
    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/prodi/detail',$data);
    $this->load->view('admin_templates/footer');
  }

  public function edit($id) {
    $data['judul'] = 'Tambah Prodi';
    $data['prodi'] = $this->Prodi_model->getById($id,'prodi');

    // ini rule dr CI
    $this->form_validation->set_rules('kode_prodi','Kode Prodi','required|max_length[2]',[
      'required' => 'Kode prodi wajib diisi.',
      'max_length' => 'Kode prodi maksimal berisi 2 angka.'
    ]);
    $this->form_validation->set_rules('nama_prodi','Nama Prodi','required',['required' => 'Nama prodi wajib diisi.']);
    $this->form_validation->set_rules('nama_fakultas','Nama Fakultas','required',['required' => 'Nama fakultas wajib diisi.']);
    // nama_fakultas = nama field, Nama Fakultas = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/prodi/edit',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Prodi_model->editProdi();
      $this->session->set_flashdata('flash','Data prodi berhasil diedit.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/prodi');
    }
  }

}
