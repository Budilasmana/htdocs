<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pulsa_model extends CI_Model
{
    private $_table = "pulsa"; //nama tabel
    //nama kolom di tabel
    public $id_sms;
    public $no;
    public $pesan;
 

    public function rules()
    {
        return [
            [
                'field' => 'id_sms',
                'label' => 'Id',
                'rules' => 'required'
            ],
            
            [
                'field' => 'no',
                'label' => 'No',
                'rules' => 'required'
            ],


            [
                'field' => 'pesan',
                'label' => 'Pesan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        //sama dgn select * from mahasiswa
        //method ini mengembalikan array berisi objek row
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->no = $post["no"];
        $this->pesan = $post["pesan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->no = $post["no"];
        $this->pesan = $post["pesan"];
        $this->db->update($this->_table, $this, array('no' => $post['no']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("no" => $id));
    }
}
