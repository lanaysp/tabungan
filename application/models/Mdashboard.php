<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model {

	public function get_user()
	{
		$email = $this->session->userdata('email');
		$this->db->where('email', $email);

		$q = $this->db->get('user');

		return $q;
	}

	public function get_nominal($type='tabungan')
	{
		$this->db->select('SUM(nominal) AS nominal');
		$this->db->where('type', $type);
		$q = $this->db->get('tabung');

		return $q;
	}

	public function get_tabung()
	{
		$this->db->order_by('id', 'desc');
		$q = $this->db->get('tabung', 3, 0);

		return $q;
	}

}

/* End of file Mdashboard.php */
/* Location: ./application/models/Mdashboard.php */