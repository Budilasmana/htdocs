<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model("M_produk");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $datas['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view("admin/_partials/headspesial.php", $datas);

        $data["view_produk"] = $this->M_produk->getUserId();
        $this->load->view("admin/produk/produk_list.php", $data);
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
    public function delete($id_produk = null)
    {
        if (!isset($id_produk)) shoow_404();
    
        if ($this->M_produk->delete($id_produk)){
            redirect(site_url('admin/Produk'));
        }
    }
}
