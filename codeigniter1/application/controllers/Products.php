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

    public function form(){
        $this->load->view("products/form.php");

    }

    public function novo()
    {
        $usuarioLogado = $this->session->userdata("usuario_logado");
        $products = array(
            "nome" => $this->input->post("nome"),
            "descricao" => $this->input->post("descricao"),
            "preco" => $this->input->post("preco"),
            "usuario_id" => $usuarioLogado['id']
        );
        $this->load->model("products_model");
        $this->products_model->salva($products);
        redirect("/");
    }
}