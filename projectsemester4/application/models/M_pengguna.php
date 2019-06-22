<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    private $_table = "pengguna";

    
    public $nama;
    public $email;
    public $password;
    public $nohp;
   


    public function rules()
    {
        return [

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

            [
                'field' => 'no hp',
                'label' => 'no hp',
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
        return $this->db->get_where($this->_table, ["id_pengguna" => $id])->row();
    }


    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM pengguna");
        return $query->result();
    }


    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['pengguna'])) { }

       
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->nohp = $post["no hp"];
       
        $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();

       
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->nohp = $post["no hp"];
        $this->db->update($this->_table, $this, array('nama' => $post['nama']));
    }


    public function delete($id_produk)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id_produk));
    }
    private function _deleteImage($id_produk)
    {
        $produk = $this->getById($id_produk);
        if ($produk->gambar != "01.jpg") {
            $filename = explode(".", $produk->gambar)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/produk/$filename.*"));
        }
    }
}
