<?php

class Products_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_products() {
        $query = $this->db->get('products');
        return $query->result_array();
    }

    public function save_product($productData)
    {
        $data = array(
            'name' => $productData['name'],
            'description' => $productData['description'],
            'price' => $productData['price']
        );

        return $this->db->insert('products', $data);
    }
}