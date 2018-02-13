<?php 

class Products extends CI_Controller{
    public function index()
    {
        $this->output->enable_profiler(true);
        $this->load->model("products_model");
        $this->load->helper(array("url","currency","form"));

        $products = $this->products_model->buscaTodos();
        $data = array("products" =>$products);
        
        $this->load->view("products/index.php",$data);
    }
}