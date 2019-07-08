<?php

class Forgot extends CI_Controller
{

    public function __construct()
    {
        perent::__construct();
        if (!$this_>session->userdata('email')) {
            redirect('Login');
        }
    }

    public function __construct()
        {
            parent::__construct();
        }
    
        public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/forgot");

    }
}



