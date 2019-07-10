<?php
defined('BASEPATH') or exit('NO direct script access aloowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Format.php';

class Api extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get()
    {


        /*
        * Created by Belal Khan
        * website: www.simplifiedcoding.net 
        * Retrieve Data From MySQL Database in Android
        */

        //database constants

        //creating a query
        // $stmt = $this->db->query("SELECT * FROM view_produk");

        // //executing the query 


        // //binding results to the query 
        // $stmt->bind_result($id, $title, $shortdesc, $rating, $price, $image);

        // $products = array(); 

        // //traversing through all the result 
        // while($stmt->fetch()){
        //     $temp = array();
        //     $temp['id_produk'] = $id_produk; 
        //     $temp['kategori'] = $kategori; 
        //     $temp['nama'] = $nama; 
        //     $temp['harga'] = $harga; 
        //     $temp['deskripsi'] = $deskripsi; 
        //     $temp['gambar_produk'] = $gambar_produk; 
        //     array_push($products, $temp);
        // }

        $produk = $this->db->get('view_produk')->result();
        $this->response(array("result" => $produk, 200));

        //displaying the result in json format 
        echo json_encode($produk);
    }

    //Masukan function selanjutnya disini
    //Mengirim atau menambah data kontak baru
    function index_post()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $data = array(

                'name'           => $this->post('name'),
                'email'        => $this->post('email'),
                'password'           => $this->post('password'),
                'nomor'           => $this->post('nomor')
            );
            $insert = $this->db->insert('register', $data);

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
