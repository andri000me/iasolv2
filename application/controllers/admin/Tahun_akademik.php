<?php
class Tahun_akademik extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Tahun_akademik_model');
    $this->load->library('form_validation');
  }

  public function index() {
    $data['judul'] = 'Tahun Akademik';
    // $data['tahun_akademik'] = $this->Tahun_akademik_model->tampil('tahun_akademik');

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
    $this->db->like('tahun_akademik',$data['keyword']);
    $this->db->or_like('semester',$data['keyword']);
    $this->db->or_like('status',$data['keyword']);
    $this->db->from('tahun_akademik');
    $config['total_rows'] = $this->db->count_all_results(); // menghitung jumlah baris dr query terakhir yg dilakukan
    $config['per_page'] = 10;

    // initialize pagination
    $this->pagination->initialize($config);

    // menampilkan pagination
    $data['mulai'] = $this->uri->segment(4);
    $data['tahun_akademik'] = $this->Tahun_akademik_model->getTahun_akademik($config['per_page'],$data['mulai'],$data['keyword']);
    $data['total_rows'] = $config['total_rows'];

    $this->load->view('admin_templates/header',$data);
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin/tahun_akademik/index',$data);
    $this->load->view('admin_templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Tahun Akademik';

    // ini rule dr CI
    $this->form_validation->set_rules('tahun_akademik','Tahun Akademik','required|max_length[9]',[
      'required' => 'Tahun akademik wajib diisi.',
      'max_length' => 'Jumlah karakter maksimal 9.'
    ]);
    // tahun_akademik = nama field, Tahun Akademik = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/tahun_akademik/tambah',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Tahun_akademik_model->tambahTahun_akademik();
      $this->session->set_flashdata('flash','Data tahun akademik berhasil ditambahkan.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/tahun_akademik');
    }
  }

  // method ini bs dipakai utk data dr table lain jg
  public function hapus($id) {
    $this->Tahun_akademik_model->hapus($id,'tahun_akademik'); // hapus data dg id $id, dr table tahun_akademik
    $this->session->set_flashdata('flash','Data tahun akademik berhasil dihapus.'); // flash = nama flash data (boleh sembarang)
    redirect('admin/tahun_akademik');
  }

  public function edit($id) {
    $data['judul'] = 'Edit Tahun Akademik';
    $data['tahun_akademik'] = $this->Tahun_akademik_model->getById($id,'tahun_akademik');

    // ini rule dr CI
    $this->form_validation->set_rules('tahun_akademik','Tahun Akademik','required|max_length[9]',[
      'required' => 'Tahun akademik wajib diisi.',
      'max_length' => 'Jumlah karakter maksimal 9.'
    ]);
    // tahun_akademik = nama field, Tahun Akademik = nama label (berhubungan dg form error)

    if($this->form_validation->run() == FALSE) {
      $this->load->view('admin_templates/header',$data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/tahun_akademik/edit',$data);
      $this->load->view('admin_templates/footer');
    } else {
      $this->Tahun_akademik_model->editTahun_akademik();
      $this->session->set_flashdata('flash','Tahun akademik '. $data['tahun_akademik']['tahun_akademik'] .' berhasil diedit.'); // flash = nama flash data (boleh sembarang)
      redirect('admin/tahun_akademik');
    }
  }

}
