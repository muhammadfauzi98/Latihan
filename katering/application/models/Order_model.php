<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model
{
    private $_table = "tbl_order";

    public $id;
    public $tanggal;
    public $pelanggan;


    public function getAll()
    {
        $query = $this->db->get('tbl_order');
        return $query->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    
}
