<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model
{      
    private $_table = "tbl_detail_order";

    public $id;
    public $order_id;
    public $produk;
    public $qty;
    public $harga;


    public function getAll()
    {
        $query = $this->db->get('tbl_detail_order');
        return $query->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    
}
