<?php

 class Login extends CI_Controller{
    public function autenticar(){
        $this->load->model("users_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $user = $this->users_model->buscaEmaileSenha($email,$senha);
        if($user)
        {
            $this->session->set_userdata("usuario_logado",$user);
            $data = array("mensagem" => "Logado com sucesso!");

        }else{
            $data = array("mensagem" => "usuario ou senha inválida");


        }
        $this->load->view("login/autenticar",$data);
    }
}