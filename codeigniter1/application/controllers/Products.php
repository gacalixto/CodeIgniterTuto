<?php 
class Products extends CI_Controller{
    public function index()
    {
        $this->load->database();
        $this->load->model("products_model");
        $products = $this->products_model->buscaTodos();
        $data = array("products" =>$products);
        
        $this->load->view("products/index.php",$data);
    }
}