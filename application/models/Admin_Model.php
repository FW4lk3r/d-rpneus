<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function index(){

    }

    public function getDados(){
        $result = $this->db->get('dados_website');
        return $result->result();
    }

    public function insertMarca($marca, $sessao){
        $data = array(
            'marca' => $marca
        );
    
        $this->db->insert('marcas',$data);
        $this->inserirAccao('Inserir', 'marca', $sessao);
        return true;
    }

    public function updateMarca($id, $marca, $sessao){
        $data = array(
            'id_marca' => $id,
            'marca'  => $marca
        );
        $this->db->replace('marcas', $data);
        $this->inserirAccao('Atualizar', 'marca', $sessao);
        return true;
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
        $result =  $this->db->get();
        return $result->result();
    }

    public function insertPneu($dados, $sessao){
        
        $data = array(
            'nome_pneu' => $dados['nome_pneu'],
            'preco' => $dados['preco'],
            'largura' => $dados['largura'],
            'altura' => $dados['altura'],
            'diametro' => $dados['diametro'],
            'id_marca' => $dados['marca']
        );
    
        $this->db->insert('pneus',$data);
        $this->inserirAccao('Inserir', 'pneus', $sessao);
        return true;
    }

    public function updatePneus($id, $dados, $sessao){
        $data = array(
            'id_pneu' => $id,
            'nome_pneu' => $dados['nome_pneu'],
            'preco' => $dados['preco'],
            'largura' => $dados['largura'],
            'altura' => $dados['altura'],
            'diametro' => $dados['diametro'],
            'id_marca' => $dados['marca']
        );
        $this->db->replace('pneus', $data);
        $this->inserirAccao('Atualizar', 'pneus', $sessao);
        return true;
    }

    public function getLargura(){
        $this->db->order_by('largura','ASC');
        $result = $this->db->get('largura');
        return $result->result();
    }

    public function insertLargura($largura, $sessao){
        $data = array(
            'largura' => $largura
        );
    
        $this->db->insert('largura',$data);
        $this->inserirAccao('Inserir', 'largura', $sessao);
        return true;
    }

    public function updateLargura($id, $largura, $sessao){
        $data = array(
            'id_largura' => $id,
            'largura'  => $largura
        );
        $this->db->replace('largura', $data);
        $this->inserirAccao('Atualizar', 'largura', $sessao);
        return true;
    }

    public function getAltura(){
        $this->db->order_by('altura','ASC');
        $result = $this->db->get('altura');
        return $result->result();
    }

    public function insertAltura($altura, $sessao){
        $data = array(
            'altura' => $altura
        );
    
        $this->db->insert('altura',$data);
        $this->inserirAccao('Inserir', 'altura', $sessao);
        return true;
    }

    public function updateAltura($id, $altura, $sessao){
        $data = array(
            'id_altura' => $id,
            'altura'  => $altura
        );
        $this->db->replace('altura', $data);
        $this->inserirAccao('Atualizar', 'altura', $sessao);
        return true;
    }

    public function getDiametro(){
        $result = $this->db->get('diametro');
        return $result->result();
    }

    public function insertDiametro($diametro, $sessao){
        $data = array(
            'diametro' => $diametro
        );
    
        $this->db->insert('diametro',$data);
        $this->inserirAccao('Inserir', 'diametro', $sessao);
        return true;
    }

    public function updateDiametro($id, $diametro, $sessao){
        $data = array(
            'id_diametro' => $id,
            'diametro'  => $diametro
        );
        $this->db->replace('diametro', $data);
        $this->inserirAccao('Atualizar', 'diametro', $sessao);
        return true;
    }

    public function inserirAccao($accao,$tipo, $sessao){
        $data = array(
            'accao' => $accao,
            'tipo' => $tipo,
            'id_user' => $sessao
        );
    
        $this->db->insert('accao',$data);
        return true;
    }

    public function getCount($tipe){
        return $this->db->count_all($tipe);
    }

    

    
}
    
