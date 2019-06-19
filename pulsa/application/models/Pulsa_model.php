<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pulsa_model extends CI_Model
{
    private $_table = "detail_trans";

    public $id_detail;
    public $id_trans;
    public $operator;
    public $nomor;
    public $nominal;
    public $status;

    public function rules()
    {
        return [



            [
                'field' => 'operator',
                'label' => 'operator',
                'rules' => 'required'
            ],


            [
                'field' => 'nomor',
                'label' => 'nomor',
                'rules' => 'required'
            ],

            [
                'field' => 'nominal',
                'label' => 'nominal',
                'rules' => 'numeric'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_detail" => $id])->row();
    }



    public function save()
    {
        $ip = "192.168.43.1";
        $port = "8989";

        //ping server SMSGateway
        exec("ping -n 3 $ip", $output, $status);

        $ping = $output[2];
        $stat = explode(":", $ping);

        // cek status transaksi
        if ($status == 0) {
            if ($stat[1] != " Destination host unreachable.") {
                $status = "BERHASIL";
                $this->session->set_flashdata('success', 'Transaksi Berhasil');
            } else {
                $status = "GAGAL";
                $this->session->set_flashdata('danger', 'Transaksi Gagal');
            };
        } else {
            $status = "GAGAL";
            $this->session->set_flashdata('danger', 'Transaksi Gagal');
        };

        $kode = "E41170926-" . uniqid(15);
        $forign = "1";
        //masukkan ke database
        $post = $this->input->post();
        $this->id_detail = $kode;
        $this->id_trans = $forign;
        $this->operator = $post["operator"];
        $this->nomor = $post["nomor"];
        $this->nominal = $post["nominal"];
        $this->status = $status;
        $this->db->insert($this->_table, $this);

        //membuat JSON nomor dan pesan
        $data = array("no" => $post["nomor"], "pesan" => "Terimakasih, Pulsa senilai Rp. " . $post["nominal"] . " telah berhasil diisikan ke nomor Anda dengan kode " . $kode);
        $data_string = json_encode($data);

        //cek apakah jika transaksi BERHASIL maka akan mengirim JSON data ke SMSGateway Server
        if ($status == "BERHASIL") {
            $ch = curl_init('http://' . $ip . ':' . $port . '');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Content-Length: ' . strlen($data_string)
                )
            );

            $result = curl_exec($ch);
        }
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_detail = $post["id_detail"];
        $this->nomor = $post["nomor"];
        $this->nominal = $post["nominal"];
        $this->db->update($this->_table, $this, array('id_detail' => $post['id_detail']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_detail" => $id));
    }
}
