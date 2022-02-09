<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pesanan_model");
        $this->load->model("order_model");
        $this->load->model("detail_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["order"] = $this->pesanan_model->getAll();
        $data["order"] = $this->order_model->getAll();
        $data["order"] = $this->detail_model->getAll();
        $this->load->view("admin/product/detail", $data);
    }
}