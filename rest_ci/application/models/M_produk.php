<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    private $_table = "produk";

    public $id_produk;
    public $id_kategori;
    public $nama;
    public $deskripsi;
    public $harga;
    public $gambar = "default.jpg";


    public function rules()
    {
        return [

            [
                'field' => 'id_kategori',
                'label' => 'id_kategori',
                'rules' => 'required'
            ],
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'required'
            ],
            [
                'field' => 'harga',
                'label' => 'harga',
                'rules' => 'required'
            ],


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }


    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM view_produk");
        return $query->result();
    }


    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id_produk'])) { }

        $this->id_kategori = $post["id_kategori"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        $this->gambar = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama;
        $config['overwrite']            = true;
        $config['max_size']             = 2024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_kategori = $post["id_kategori"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        //cek gambar


        $this->db->update($this->_table, $this, array('id_produk' => $post['id_produk']));
    }

    public function delete($id_produk)
    {
        $this->_deleteImage($id_produk);
        return $this->db->delete($this->_table, array("id_produk" => $id_produk));
    }
    private function _deleteImage($id_produk)
    {
        $produk = $this->getById($id_produk);
        if ($produk->foto != "01.jpg") {
            $filename = explode(".", $produk->gambar)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/produk/$filename.*"));
        }
    }
}
