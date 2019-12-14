<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  function index()
  {
     if ($this->session->userdata('email')) {
        redirect('error', 'refresh');
     }
     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('password', 'Password', 'trim|required');

     if ($this->form_validation->run() == false) {

   $data['title'] = 'Login';
    $this->load->view('template_auth/header', $data);
    $this->load->view('auth/login');
    $this->load->view('template_auth/footer');
} else {
   //validation success
   $this->_login();
}
  }
  private function _login()
  {
     $email = $this->input->post('email');
     $password = $this->input->post('password');
     //SELECT * FROM USER WHERE EMAIL = $EMAIL
     $user = $this->db->get_where('user', ['email' => $email])->row_array();

     # jika user ada
     if ($user) {
     # Jika user active
        if ($user['is_active'] == 1) {
        # cek password
           if (password_verify($password, $user['password'])) {
           # data
              $data = [
                 'email' => $user['email'],
                 'role_id' => $user['role_id']
              ];

              $this->session->set_userdata($data);
              if ($user['role_id'] == 1) {

                 redirect('dashboard', 'refresh');
              } else {

                 redirect('dashboard', 'refresh');

              }
           } else {
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                          Wrong password! </div>');
              redirect('auth');
           }
        } else {
           $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                          This email has not been activated! </div>');
           redirect('auth');
        }
     } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                          Email is not registerd! </div>');
        redirect('auth');
     }
  }



   function register()
   {
      if ($this->session->userdata('email')) {
         redirect('user', 'refresh');
      }
      $this->form_validation->set_rules('name', 'Name', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
         'is_unique' => 'This email has already registered!'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
         'matches' => 'password dont match!',
         'min_length' => 'Password too short'

      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


      if ($this->form_validation->run() == false) {
      $data['title'] = 'Register';
       $this->load->view('template_auth/header', $data);
       $this->load->view('auth/register');
       $this->load->view('template_auth/footer');
    } else {
    $email = $this->input->post('email', true) ;
       $data = [
          'name' => htmlspecialchars($this->input->post('name', true)),
          'email' => htmlspecialchars($email),
          'image' => 'default.jpg',
          'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
          'role_id' => 2,
          'is_active' => 0,
          'date_created' => time()
       ];

    // siapkan token_get_all
    $token = bin2hex(openssl_random_pseudo_bytes(32));
    $user_token = [
      'email' => $email ,
      'token' => $token,
      'date_created' => time()
    ];
       $this->db->insert('user', $data);
       $this->db->insert('user_token', $user_token);

    $this->_sendEmail($token, 'verify');
       $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                         Congratulation! your accon has been created. Please activate your account. </div>');
       redirect('auth');

    }
   }

     private function _sendEmail($token, $type){

       $config = [
         'protocol'   => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_user' => 'official.lanaysp@gmail.com',
         'smtp_pass' => 'lanaysp187597',
         'smtp_port' => 465,
         'mailtype'  => 'html',
         'charset'   => 'utf-8',
         'newline'   => "\r\n"


       ];

       $this->email->initialize($config);
       $this->load->library('email', $config);


       $this->email->from('Official.lanaysp@gmail.com', 'Lanaysp Komunika');
       $this->email->to($this->input->post('email'));
       if ($type == 'verify' ) {

         $this->email->subject('Account Verifycation');
         // $this->email->attach('');
         $this->email->message('Click this link to verify you account :
           <a href="'.base_url().'auth/verify?email='. $this->input->post('email').'&token='. urlencode($token) .'" class="tombol">
           Actived</a>');
       }elseif ($type == 'forgot') {
         $this->email->subject('Reset password');
         $this->email->message('Click this link to reset your password :
           <a href="'.base_url().'auth/resetpassword?email='. $this->input->post('email').'&token='. urlencode($token) .'">
           Reset password</a>');
       }

       if ($this->email->send()) {
         return true ;

       }else {
         echo $this->email->print_debugger();
         die;
       }

     }

       public function verify()
       {

         $email = $this->input->get('email');
         $token = $this->input->get('token');

         $user = $this->db->get_where('user', ['email' => $email])->row_array();

         if ($user) {

           $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

           if ($user_token) {
             if (time() - $user_token['date_created'] < (60*60*24) ) {
               $this->db->set('is_active', 1);
               $this->db->where('email', $email );
               $this->db->update('user');

               $this->db->delete('user_token', ['email' => $email]);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                             '. $email .' Has been activated. Please login!</div>');
               redirect('auth');

             }else {
               $this->db->delete('user', ['email' => $email]);
               $this->db->delete('user_token', ['email' => $email]);

               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                             Activation failed! Token expired.</div>');
               redirect('auth');
             }
           }else {
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                           Activation failed! Wrong token.</div>');
             redirect('auth');
           }

         }else {
           $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
       			 						Activation failed! Wrong email.</div>');
       		redirect('auth');
         }

       }

   public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			 						You has been logout!</div>');
		redirect('auth');
	}

}
