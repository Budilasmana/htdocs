<?php

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model("M_pengguna");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);

        $data["pengguna"] = $this->M_pengguna->getUserId();
        $this->load->view("admin/pengguna/pengguna_list.php", $data);
    }

    public function add()
    {
        $pengguna = $this->M_pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
           $pengguna->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        } else {
        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);
        }
<<<<<<< HEAD
=======
        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);

>>>>>>> parent of 59252096... Update Pengguna.php
        $this->load->view("admin/pengguna/pengguna_new.php");
    }
    public function edit($id_pengguna = null)
    {
        if (!isset($id_pengguna)) redirect('admin/pengguna');

        $pengguna = $this->M_pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
        }

        $data["pengguna"] = $pengguna->getById($id_pengguna);
        if (!$data["pengguna"]) show_404();

        $this->load->view("admin/pengguna/pengguna_edit", $data);
    }


    public function delete($id_pengguna = null)
    {
        if (!isset($id_pengguna)) shoow_404();

        if ($this->M_pengguna->delete($id_pengguna)) {
            redirect(site_url('admin/Pengguna'));
        }
    }
}
