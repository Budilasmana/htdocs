<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    private $_table = "kategori";


    public $id_kategori;
    public $kategori;
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
                'field' => 'kategori',
                'label' => 'kategori',
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
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }


    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM kategori");
        return $query->result();
    }


    public function save()
    {
        $post = $this->input->post();


        $this->id_kategori = $post["id_kategori"];
        $this->kategori = $post["kategori"];
        $this->gambar = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/kategori/';
        $config['allowed_types']        = 'gif|jpg|png';
        $nama = $_FILES['gambar']['name'];
        $config['file_name']            = $nama;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

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
        $this->kategori = $post["kategori"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id_kategori' => $post['id_kategori']));
    }


    public function delete($id_kategori)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id_kategori));
    }
    private function _deleteImage($id_kategori)
    {
        $kategori = $this->getById($id_kategori);
        if ($kategori->gambar != "01.jpg") {
            $filename = explode(".", $kategori->gambar)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/kategori/$filename.*"));
        }
    }
}
