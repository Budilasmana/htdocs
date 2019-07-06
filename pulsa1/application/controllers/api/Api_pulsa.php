<?php
defined('BASEPATH') or exit('NO direct script access aloowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Format.php';

class Api_pulsa extends REST_Controller
{
    private $_table = "trans_detail";

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

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $kode = uniqid(6);
            $status = "BERHASIL";


            $post = $this->input->post();

            if ($post["provider"] == "Telkomsel") {
                $operator = "1";
            }
            if ($post["provider"] == "XL/AXIS") {
                $operator = "2";
            }
            if ($post["provider"] == "Tri") {
                $operator = "3";
            }
            if ($post["provider"] == "Indosat") {
                $operator = "4";
            }

            //===============================================================
            //===============================================================
            // inisialisasi jumlah pulsa            
            if ($post["nominal"] == 5.000) {
                $nominal = "1";
            }
            if ($post["nominal"] == 10.000) {
                $nominal = "2";
            }
            if ($post["nominal"] == 25.000) {
                $nominal = "3";
            }
            if ($post["nominal"] == 50.000) {
                $nominal = "4";
            }
            if ($post["nominal"] == 100.000) {
                $nominal = "5";
            }


            $tanggal = $post["date"];
            $forign = $post["id_trans"];

            $data = array(

                'id_trans'      => $forign,
                'tanggal'     => $tanggal

            );
            $this->db->insert('trans', $data);


            $this->id_detail = $kode;
            $this->id_trans = $forign;
            $this->id_operator = $operator;
            $this->nomor = $post["nomor"];
            // $this->nomor2 = $post["nomor2"];
            $this->id_nominal = $nominal;
            $this->status = $status;
            $insert =  $this->db->insert($this->_table, $this);

            if ($insert) {
                $result["success"] = "1";
                $result["message"] = "success";

                echo json_encode($result);
                $this->response($data, 200);
            } else {
                $result["success"] = "0";
                $result["message"] = "error";

                echo json_encode($result);
                $this->response(array('status' => 'fail', 502));
            }
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
