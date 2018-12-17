<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Model extends CI_Model {

    public function index(){

    }

    public function getDados(){
        $result = $this->db->get('dados_website');
        return $result->result();
    }

    public function getMarcas(){
        $this->db->order_by('marca','ASC');
        $result = $this->db->get('marcas');
        return $result->result();
    }

    public function getPneus(){
        $this->db->select('*');    
        $this->db->from('pneus');
        $this->db->join('marcas', 'pneus.id_marca = marcas.id_marca');
        $this->db->join('altura', 'pneus.altura = altura.id_altura');
        $this->db->join('diametro', 'pneus.diametro = diametro.id_diametro');
        $this->db->join('largura', 'pneus.largura = largura.id_largura');
        $this->db->where('ativo',1);
        $this->db->limit(8,0);
        $result =  $this->db->get();
        return $result->result();
    }


    public function getLargura(){
        $this->db->order_by('largura','ASC');
        $result = $this->db->get('largura');
        return $result->result();
    }


    public function getAltura(){
        $this->db->order_by('altura','ASC');
        $result = $this->db->get('altura');
        return $result->result();
    }


    public function getDiametro(){
        $result = $this->db->get('diametro');
        return $result->result();
    }

    
    

    
}
    
