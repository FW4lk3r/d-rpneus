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

    public function getMarcasVeiculo(){
        $this->db->order_by('id_marca_veiculo','ASC');
        $result = $this->db->get('marcas-veiculo');
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

    public function getDadosMenu(){
        $result = $this->db->query('SELECT DISTINCT pneus.largura, pneus.altura, pneus.diametro, pneus.id_marca FROM pneus 
        INNER JOIN marcas ON pneus.id_marca = marcas.id_marca
        INNER JOIN altura ON pneus.altura = altura.id_altura
        INNER JOIN diametro ON pneus.diametro = diametro.id_diametro
        INNER JOIN largura ON pneus.largura = largura.id_largura
        WHERE ativo = 1');
        return $result->result();

    }

    public function getJantes(){
        $this->db->select('*');    
        $this->db->from('jantes');
        $this->db->join('marcas-veiculo', 'jantes.id_marca_veiculo = marcas-veiculo.id_marca_veiculo');
        $this->db->join('diametro', 'jantes.diametro = diametro.id_diametro');
        $this->db->where('ativo',1);
        $this->db->limit(8,0);
        $result =  $this->db->get();
        return $result->result();
    }

    public function getDefinicoes(){
        $result = $this->db->get('definicoes');
        $array = array();

        foreach($result->result() as $row)
        {
            $array[$row->slug] = $row->valor; // add each user id to the array

        }
        return $array;
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
    
