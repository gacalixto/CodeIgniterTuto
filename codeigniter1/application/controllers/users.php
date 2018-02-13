<?php 

class Users extends CI_Controller{
    public function novo()
    {
        $user = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha"))
        );
        $this->load->model("users_model");
        $this->users_model->salva($user);
        $this->load->view("users/novo");
    }
}