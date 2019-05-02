<?php

class Register extends CI_Controller{
    public function __construct()
        {
            parent::__construct();
        }
    
    public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/register");

    }
    public function aksi_register(){
        $admin = $this->m_login;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/login");
    }



//     public function aksi_register(){
		
//         $username = $this->input->post('Username');
//         $password = $this->input->post('Password');
//         $nama_depan = $this->input->post('Nama_Depan');
//         $nama_belakang = $this->input->post('Nama_Belakang');
// 		$berhasil = $this->m_login->save($username,$password,$nama_depan,$nama_belakang);
// 		if ($berhasil == 1){
// 			redirect('Login');
// 		}else{
// 			$this->load->view("admin/register");
// 		}
// }



}