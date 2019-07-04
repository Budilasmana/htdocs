<?php

class m_login extends CI_Model
{

	private $_table = "admin";

	public $Id_admin;
	public $Username;
	public $Password;
	public $Nama_Depan;
	public $Nama_Belakang;

	public function rules()
	{
		return [
			[
				'field' => 'Username',
				'label' => 'Username',
				'rules' => 'required'
			],

			[
				'field' => 'Password',
				'label' => 'Password',
				'rules' => 'numeric'
			],


		];
	}

	function cek_login($username, $password)
	{
		$periksa = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
		$user = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		if ($user) {

			$datas = [
				'username' => $user['username']
			];
			$this->session->set_userdata($datas);
		}


		if ($periksa->num_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
	}

	public function save()
	{
		$post = $this->input->post();
		$this->Id_admin = uniqid();
		$this->Username = $post["Username"];
		$this->Password = $post["Password"];
		$this->Nama_Depan = $post["Nama_Depan"];
		$this->Nama_Belakang = $post["Nama_Belakang"];
		$this->db->insert($this->_table, $this);
	}
}
