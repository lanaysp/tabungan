<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabungan extends CI_Model {

	public function get_user()
	{
		$email = $this->session->userdata('email');
		$this->db->where('email', $email);

		$q = $this->db->get('user');

		return $q;
	}
	public function get_tabung()
	{
		
		$this->db->where('type !=', 'pengeluaran');
		$this->db->order_by('id', 'desc');
		$q = $this->db->get('tabung');


		return $q;
	}
	public function get_pengeluaran()
	{
		
		$this->db->where('type =', 'pengeluaran');
		$this->db->order_by('id', 'desc');
		$q = $this->db->get('tabung');

		return $q;
	}

}

/* End of file Mtabungan.php */
/* Location: ./application/models/Mtabungan.php */