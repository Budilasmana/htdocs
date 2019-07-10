<?php
defined('BASEPATH') or exit('NO direct script access aloowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Format.php';

class Api_produk extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
   /* function index_get()
    {
<<<<<<< HEAD
        $data = $this->db->get('produk')->result();
        $this->response(array("result" => $data, 200));
=======
        $id_produk = $this->get('id_produk');
        if ($id_produk == '') {
            $produk = $this->db->get('produk')->result();
        } else {
            $this->db->where('id_produk', $id_produk);
            $produk = $this->db->get('produk')->result();
        }
        $this->response($produk, 200);
    }*/
    function index_get(){
        $data=$this->db->get('view_produk')->result();
        $this->response(array("result"=>$data,200));
>>>>>>> 139a3f32ea363d1a2e065d7c414189cfccc73182
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
    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id_produk = $this->put('id_produk');
        $data = array(
            'id_produk'        => $this->put('id_produk'),
            'id_kategori'        => $this->put('id_kategori'),
            'nama'           => $this->put('nama'),
            'harga'           => $this->put('harga'),
            'deskripsi'           => $this->put('deskripsi')
        );
        $this->db->where('id_produk', $id_produk);
        $update = $this->db->update('produk', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id_produk = $this->delete('id_produk');
        $this->db->where('id_produk', $id_produk);
        $delete = $this->db->delete('produk');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
