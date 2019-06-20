<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_produk");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["view_produk"] = $this->M_produk->getUserId();
        $this->load->view("admin/produk.php", $data);
    }
}
