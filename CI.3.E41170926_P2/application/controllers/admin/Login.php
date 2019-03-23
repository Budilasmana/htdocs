<?php

class Login extends CI_Controller{
    public function __construct()
        {
            parent::__construct();
            $this->load->model('m_login');
        }
    
        public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/login");
    }

    function aksi_login(){
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$where = array(
			'Username' => $username,
			'Password' => $password
			);
		$cek = $this->m_login->cek_login("runlogin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("runlogin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}



