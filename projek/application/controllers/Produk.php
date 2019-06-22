<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Produk extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() { 
        $kontak = $this->db->get('produk')->result();
        $this->response(array("result"=>$kontak, 200));
    }

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data perbaikan baru
    
    function index_post() {
        $data = array(
                    'id_produk'           => $this->post('id_produk'),
                    'id_kategori'           => $this->post('id_kategori'),
                    'nama'          => $this->post('nama'),
                    'harga'           => $this->post('harga'),
                    'deskripsi'             => $this->post('deskripsi'),
                    'gambar'             => $this->post('gambar'),);
        $insert = $this->db->insert('produk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>