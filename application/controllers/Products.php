<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        if ($this->input->method() == 'post')
            $this->products_model->save_product($_POST);

        $data = [];
        $data['products'] = $this->products_model->get_products();
        $this->load->view('products/index', $data);
    }
}