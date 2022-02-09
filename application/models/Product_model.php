<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tbl_produk";

    public $id_produk;
    public $nama_produk;
    public $kategori;
    public $image = "default.jpg";
    public $harga;
    public $deskripsi;

    public function rules()
    {
        return [

             ['field' => 'id_produk',
            'label' => 'id_produk',
            'rules' => 'required'],

            ['field' => 'nama_produk',
            'label' => 'Nama_produk',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'numeric'],
            
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori','tbl_kategori.id=tbl_produk.kategori');
        return $this->db->get()->result_array();
    }
    
    public function getById($id_produk)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id_produk])->row();
    }

    public function getBykategori($kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori','tbl_kategori.id=tbl_produk.kategori');
        return $this->db->get();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->nama_produk = $post["nama_produk"];
        $this->harga = $post["harga"];
        $this->kategori = $post["kategori"];
        $this->image = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->nama_produk = $post["nama_produk"];
        $this->harga = $post["harga"];
        $this->kategori = $post["kategori"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('id_produk' => $post['id_produk']));
    }

    public function delete($id_produk)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id_produk));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_produk;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
    
        return "Defaultt.jpg";
    }

    private function _deleteImage($id_produk)
    {
        $product = $this->getById($id_produk);
            if ($produk->image != "Defaultt.jpg") {
                $filename = explode(".", $produk->image)[0];
                return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }
    
}
