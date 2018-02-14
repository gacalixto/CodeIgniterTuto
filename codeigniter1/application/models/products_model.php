<?php
class Products_model extends CI_Model {

    public function salva($product){
        $this->db->insert("produtos",$product);
    }

public function buscaTodos() {
        return $this->db->get("produtos")->result_array();
    }
}