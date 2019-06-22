<?php
defined('BASEPATH') or exit('NO direct script access aloowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Format.php';

class Produk extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get()
    {
        $id_produk = $this->get('id_produk');
        if ($id_produk == '') {
            $produk = $this->db->get('produk')->result();
        } else {
            $this->db->where('id_produk', $id_produk);
            $produk = $this->db->get('produk')->result();
        }
        $this->response($produk, 200);
    }

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(

            'id_kategori'        => $this->post('id_kategori'),
            'nama'           => $this->post('nama'),
            'harga'           => $this->post('harga'),
            'deskripsi'           => $this->post('deskripsi')
        );
        $insert = $this->db->insert('produk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
