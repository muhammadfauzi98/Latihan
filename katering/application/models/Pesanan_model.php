<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
    private $_table = "tbl_pelanggan";

    public $id;
    public $nama;
    public $email;
    public $alamat;
    public $telp;


    public function getAll()
    {
        $this->db->select('tbl_order.*, tbl_pelanggan.nama, email');
        $this->db->from('tbl_order');
        $this->db->join('tbl_pelanggan','tbl_order.pelanggan = tbl_pelanggan.id','left');
        $this->db->order_by('tbl_order.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function detail($id)
    {
        // $this->db->get_where($this->_table, ["id" => $id])->row();
        $this->db->select('tbl_detail_order.*, tbl_produk.nama_produk, id_produk, tbl_detail_order.harga, tbl_pelanggan.nama, email, alamat, telp, tbl_order.tanggal, pelanggan');
        $this->db->from('tbl_detail_order', 'tbl_order');
        $this->db->where('tbl_detail_order.order_id', $id);
        $this->db->join('tbl_order','tbl_detail_order.order_id = tbl_order.id','left');
        $this->db->join('tbl_pelanggan','tbl_order.pelanggan = tbl_pelanggan.id','left');
        $this->db->join('tbl_produk','tbl_detail_order.produk = tbl_produk.id_produk','left');
        $query = $this->db->get();
        return $query->row();
    }

    public function detail_produk($id)
    {
        $this->db->select('tbl_detail_order.*, tbl_produk.nama_produk, id_produk, tbl_detail_order.harga, tbl_order.tanggal, pelanggan');
        $this->db->from('tbl_detail_order', 'tbl_order');
        $this->db->where('tbl_detail_order.order_id', $id);
        $this->db->join('tbl_order','tbl_detail_order.order_id = tbl_order.id','left');
        $this->db->join('tbl_produk','tbl_detail_order.produk = tbl_produk.id_produk','left');
        $this->db->order_by('tbl_detail_order.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function subtotal($id)
    {
        $this->db->select_sum('harga');
        $this->db->from('tbl_detail_order');
        $this->db->where('tbl_detail_order.order_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
}