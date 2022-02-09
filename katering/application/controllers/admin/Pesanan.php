<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pesanan_model");
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pesanan"] = $this->pesanan_model->getAll();
        $this->load->view("admin/product/pesanan", $data);
    }

    public function detail($id)
    {
        $pesanan = $this->pesanan_model;
        $produk = $this->product_model;
        $data["pesanan"] = $this->pesanan_model->detail($id);
        $data["produk"] = $this->pesanan_model->detail_produk($id);
        $this->load->view("admin/product/detail", $data);
    }

    public function cetak($id)
    {
        $pesanan = $this->pesanan_model;
        $data["pesanan"] = $this->pesanan_model->detail($id);
        $data["produk"] = $this->pesanan_model->detail_produk($id);
        $this->load->view("admin/product/print", $data);
    }
}