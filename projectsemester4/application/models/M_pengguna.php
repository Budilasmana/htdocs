<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    private $_table = "pengguna";

    public $id_pengguna;
    public $username;
    public $email;
    public $password;
    public $no_hp;



    public function rules()
    {
        return [



            [
                'field' => 'username',
                'label' => 'username',
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
                'field' => 'no_hp',
                'label' => 'no_hp',
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
        if (isset($_POST['id_pengguna'])) { }


        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->no_hp = $post["no_hp"];

        $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id_pengguna = $post["id_pengguna"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->no_hp = $post["no_hp"];
        $this->db->update($this->_table, $this, array('id_pengguna' => $post['id_pengguna']));
    }


    public function delete($id_pengguna)
    {
        return $this->db->delete($this->_table, array("id_pengguna" => $id_pengguna));
    }
}
