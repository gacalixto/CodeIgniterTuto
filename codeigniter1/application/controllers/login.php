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
            $this->session->set_flashdata("success","Logado com sucesso");

        }else{
            $this->session->set_flashdata("danger","usuario ou senha inválida");


        }
        redirect("/");
    }

    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success","Deslogado com sucesso!");

        redirect("/");
    }
}