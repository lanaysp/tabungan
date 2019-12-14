<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('mdashboard');
	}

	function index()
	{

		$data['title'] = 'Dashboard';
		$data['user'] = $this->mdashboard->get_user()->row_array();


		$data['tbn'] = $this->mdashboard->get_tabung()->result_array();

		$data['uang_masuk'] = $this->mdashboard->get_nominal()->row_array();
		$data['uang_keluar'] = $this->mdashboard->get_nominal('pengeluaran')->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/Dashboard', $data);
		$this->load->view('template/footer');
	}

}
