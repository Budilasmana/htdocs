<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/profil.php");
    }
    function add()
    {
        // if(isset($_POST['submit'])){
        $this->load->view("admin/-partials/profil_new.php");
    }
}
