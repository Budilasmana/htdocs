<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// load view admin/overview.php

		$this->load->view("admin/login");
	}

	function aksi_login()
	{
		// if(isset($_POST['submit'])){
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$berhasil = $this->m_login->cek_login($username, $password);
		if ($berhasil == 1) {
			redirect('admin/Produk');
		} else {
			$this->load->view("admin/login");
		}
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
