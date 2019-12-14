<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tabung extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('mtabungan');
  }


	public function index(){

   $data['title'] = 'Tambah Tabungan';
      
  $data['user'] = $this->mtabungan->get_user()->row_array();
  $data['tabungan'] = $this->mtabungan->get_tabung()->result_array();


    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('tabungan/m_tabung');
    $this->load->view('template/footer');
	}

  public function pengeluaran()
  {
  $data['title'] = 'Pengeluaran';
  $data['user'] = $this->mtabungan->get_user()->row_array();

  $data['tabungan'] = $this->mtabungan->get_pengeluaran()->result_array();

    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('tabungan/pengeluaran');
    $this->load->view('template/footer');
  }

  public function t_tabungan()
  {
    $data['title'] = 'Tambah Tabungan';
   $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();


    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar');
    $this->load->view('tabungan/t_tabungan');
    $this->load->view('template/footer');
  }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */