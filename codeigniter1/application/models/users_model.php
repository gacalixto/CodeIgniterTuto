<?php
    class Users_model extends CI_Model{
        public function salva($user){
            $this->db->insert("usuarios",$user);
        }

        public function buscaEmaileSenha($email,$senha){
            $this->db->where("email",$email);
            $this->db->where("senha",$senha);
           $user = $this->db->get("usuarios")->row_array();
            return $user;
        }
    }