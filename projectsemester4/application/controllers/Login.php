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
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


		$user = $this->db->get_where('admin', ['username' => $email])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				$datas = [
					'username' => $user['username']

				];
				$this->session->set_userdata($datas);
				redirect('admin/Produk');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				$this->load->view("admin/login");
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			$this->load->view("admin/login");
		}
	}


	// function aksi_login()
	// {
	// 	// if(isset($_POST['submit'])){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$berhasil = $this->m_login->cek_login($username, $password);
	// 	if ($berhasil == 1) {
	// 		redirect('admin/Produk');
	// 	} else {
	// 		$this->load->view("admin/login");
	// 	}
	// }


	function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
		redirect('login');
	}
}
