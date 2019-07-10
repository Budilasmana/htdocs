<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model("M_kategori");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);

        $data["kategori"] = $this->M_kategori->getUserId();
        $this->load->view("admin/kategori/kategori_list.php", $data);
    }

    public function add()
    {
        $kategori = $this->M_kategori;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);


        $this->load->view("admin/kategori/kategori_new.php");
    }

    public function edit($id_kategori = null)
    {
        if (!isset($id_kategori)) redirect('admin/kategori');

        $kategori = $this->M_kategori;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
        }

        $data["kategori"] = $kategori->getById($id_kategori);
        if (!$data["kategori"]) show_404();

        $this->load->view("admin/kategori/kategori_edit", $data);
    }


    public function delete($id_kategori = null)
    {
        if (!isset($id_kategori)) shoow_404();

        if ($this->M_kategori->delete($id_kategori)) {
            redirect(site_url('admin/Kategori'));
        }
    }
}
