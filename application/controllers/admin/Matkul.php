<?php
class Matkul extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Matkul_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'Matkul';
    // $data['matkul'] = $this->Matkul_model->tampil('matkul');

    // load library pagination
    $this->load->library('pagination');

    // jika kotak pencarian diisi (ini berhubungan dg pagination)
    if($this->input->post('keyword')) {
      $data['keyword'] = $this->input->post('keyword'); // $keyword diisi dg keyword di kotak pencarian
      $this->session->set_userdata('keyword',$data['keyword']); // membuat session dg nama keyword, yg diisi dg $keyword.. ini spy pagination berjalan
    } else {
      $data['keyword'] = $this->session->userdata('keyword'); // ini utk pagination & menangani jika tdk ada keyword yg diketik
    }

    // pagination config singkat, sisanya ada di pagination.php
    // $this->output->delete_cache(); // uncomment klo mau hapus cache
    // $this->db->cache_on(); // cache disimpan di application/cache
    // $this->output->cache(30);
    $this->db->like('kode_matkul',$data['keyword']);
    $this->db->or_like('nama_matkul',$data['keyword']);
    $this->db->or_like('nama_prodi',$data['keyword']);
    $this->db->from('matkul');
    $config['total_rows'] = $this->db->count_all_results(); // menghitung jumlah baris dr query terakhir yg dilakukan
    $config['per_page'] = 10;

    // initialize pagination
    $this->pagination->initialize($config);

    // menampilkan pagination
    $data['mulai'] = $this->uri->segment(4); // ambil dr segment ke 4 url (mulai dr row ke brp pagination ditampilkan)
    $data['matkul'] = $this->Matkul_model->getMatkul($config['per_page'],$data['mulai'],$data['keyword']);
    $data['total_rows'] = $config['total_rows'];

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/matkul/index',$data);
    $this->load->view('admin_templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Matkul';

    // ini rule dr CI
    $this->form_validation->set_rules('kode_matkul','Kode Matkul','required|max_length[9]',[
      'required' => 'Kode matkul wajib diisi.',
      'max_length' => 'Kode matkul maksimal berisi 2 huruf.'
    ]);
    $this->form_validation->set_rules('nama_matkul','Nama Matkul','required',['required' => 'Nama matkul wajib diisi.']);
    $this->form_validation->set_rules('sks','SKS','required|numeric',[
      'required' => 'SKS wajib diisi.',
      'numeric' => 'SKS harus angka.'
    ]);
    $this->form_validation->set_rules('smt','Semester','required|numeric',[
      'required' => 'Semester wajib diisi.',
      'numeric' => 'Semester harus angka.'
    ]);
    $this->form_validation->set_rules('nama_prodi','Nama Prodi','required',['required' => 'Nama prodi wajib diisi.']);
    // nama_lengkap = nama field, Nama Matkul = nama label

    if($this->form_validation->run() == FALSE) {
      $data['nama_prodi'] = $this->Matkul_model->tampilProdi('prodi');
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/matkul/tambah',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Matkul_model->tambahMatkul();
      $this->session->set_flashdata('flash','Data matkul berhasil ditambahkan.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/matkul');
    }
  }

  // method ini bs dipakai utk data dr table lain jg
  public function hapus($id) {
    $this->Matkul_model->hapus($id,'matkul'); // hapus data dg id $id, dr table matkul
    $this->session->set_flashdata('flash','Data matkul berhasil dihapus.'); // flash = nama flash data (boleh sembarang)
    redirect('admin/matkul');
  }

  // method ini bs dipakai utk data dr table lain jg
  public function detail($id) {
    $data['judul'] = 'Detail Matkul';
    $data['matkul'] = $this->Matkul_model->getById($id,'matkul'); // ambil data berdasarkan id $id, di table matkul
    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/matkul/detail',$data);
    $this->load->view('admin_templates/footer');
  }

  public function edit($id) {
    $data['judul'] = 'Edit Matkul';
    $data['matkul'] = $this->Matkul_model->getById($id,'matkul');

    // ini rule dr CI
    $this->form_validation->set_rules('kode_matkul','Kode Matkul','required|max_length[9]',[
      'required' => 'Kode matkul wajib diisi.',
      'max_length' => 'Kode matkul maksimal berisi 2 huruf.'
    ]);
    $this->form_validation->set_rules('nama_matkul','Nama Matkul','required',['required' => 'Nama matkul wajib diisi.']);
    $this->form_validation->set_rules('sks','SKS','required|numeric',[
      'required' => 'SKS wajib diisi.',
      'numeric' => 'SKS harus angka.'
    ]);
    $this->form_validation->set_rules('smt','Semester','required|numeric',[
      'required' => 'Semester wajib diisi.',
      'numeric' => 'Semester harus angka.'
    ]);
    $this->form_validation->set_rules('nama_prodi','Nama Prodi','required',['required' => 'Nama prodi wajib diisi.']);
    // nama_prodi = nama field, Nama Prodi = nama label

    if($this->form_validation->run() == FALSE) {
      $data['nama_prodi'] = $this->Matkul_model->tampilProdi('prodi');
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/matkul/edit',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Matkul_model->editMatkul();
      $this->session->set_flashdata('flash','Data matkul '. $data['matkul']['nama_matkul'] .' berhasil diedit.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/matkul');
    }
  }

}
