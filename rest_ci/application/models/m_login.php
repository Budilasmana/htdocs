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

			[
				'field' => 'Nama_Belakang',
				'label' => 'Nama_Belakang',
				'rules' => 'required'
			],

			[
				'field' => 'Nama_Depan',
				'label' => 'Nama_Depan',
				'rules' => 'required'
			]
		];
	}

	function cek_login($username, $password)
	{
		$periksa = $this->db->get_where('admin', array('Username' => $username, 'Password' => $password));

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
