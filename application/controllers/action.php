<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function nabung()
	{
		 $data = [
                'type' => 'tabungan',
                'nominal' => 60000,
                'tgl_masuk' => date('d-m-Y H:i'),
                'keterangan' => '-'
            ];

            
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->db->insert('tabung', $data);
            
            redirect('m_tabung');
	}

	public function t_nabung()
	{
		 $data = [

                'type' => 'tabungan',
                'nominal' => str_replace(",", "" , $this->input->post('uang')),
                'tgl_masuk' => date('d-m-Y H:i'),
                'keterangan' => $this->input->post('ket'),
                'input_by' => $this->input->post('user')
            ];


            
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->db->insert('tabung', $data);
            
            redirect('m_tabung');
	}

	public function pengeluaran()
	{
		 $data = [
                'type'  => 'pengeluaran',
                'tgl_masuk' => date('d-m-Y H:i'),
                'nominal' => str_replace(",", "" ,$this->input->post('nominal')),
                'keterangan' => $this->input->post('ket')
            ];

            
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->db->insert('tabung', $data);
            
            redirect('m_tabung/pengeluaran');
	}
    public function hapustabungan()
    {
       $id = $this->uri->segment(3);
        $q = $this->db->where('id', $id)->delete('tabung');
        if ($q) {
            $this->session->set_flashdata('flash', 'Done Delete');
            redirect('m_tabung');
        }
    }
     public function hapuspengeluaran()
    {
       $id = $this->uri->segment(3);
        $q = $this->db->where('id', $id)->delete('tabung');
        if ($q) {
            $this->session->set_flashdata('flash', 'Done Delete');
            redirect('m_tabung/pengeluaran');
        }
    }
}

/* End of file action.php */
/* Location: ./application/controllers/action.php */