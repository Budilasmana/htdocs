<?php

class Histori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model("M_histori");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);

        $data["histori"] = $this->M_histori->getUserId();
        $this->load->view("admin/histori/histori_list.php", $data);
    }

    public function add()
    {
        $produk = $this->M_produk;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);


        $this->load->view("admin/produk/produk_new.php");
    }

    public function edit($id_produk = null)
    {
        if (!isset($id_produk)) redirect('admin/produk');

        $produk = $this->M_produk;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
        }

        $data["produk"] = $produk->getById($id_produk);
        if (!$data["produk"]) show_404();

        $this->load->view("admin/produk/produk_edit", $data);
    }


    public function delete($id_produk = null)
    {
        if (!isset($id_produk)) shoow_404();

        if ($this->M_produk->delete($id_produk)) {
            redirect(site_url('admin/Produk'));
        }
    }
}
