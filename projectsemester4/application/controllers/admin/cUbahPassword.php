<?php

class cUbahPassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model("M_ubah");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);
        // load view admin/overview.php
        $this->load->view("admin/ubahPassword");
    }

    public function edit()
    {
        $ubah = $this->M_ubah;
        $validation = $this->form_validation;
        $validation->set_rules($ubah->rules());

        if ($validation->run()) {
            $ubah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);


        $this->load->view("admin/ubahPassword");
    }
}
