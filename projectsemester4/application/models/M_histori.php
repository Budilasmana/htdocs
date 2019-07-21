<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_histori extends CI_Model
{
    private $_table = "histori";


    public $email;
    public $password;




    public function rules()
    {
        return [];
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
        $query = $this->db->query("SELECT * FROM transaksi");
        return $query->result();
    }


    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id_pengguna'])) { }


        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->no_hp = $post["no_hp"];

        $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $id = 1;

        if ($post["password1"] == $post["password2"]) {
            $this->password = $post["password1"];
            $this->db->update($this->_table, $this, array('id_admin' => $id));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah!</div>');
            redirect('admin/cUbahPassword/index');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Cek Password Ulang!</div>');
            redirect('admin/cUbahPassword/index');
        }
    }


    public function delete($id_pengguna)
    {
        return $this->db->delete($this->_table, array("id_pengguna" => $id_pengguna));
    }
}
