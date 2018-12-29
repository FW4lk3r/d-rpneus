<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function index(){

    }

    public function getDadosPerfil($id){
        $this->db->where('id', $id);
        $result = $this->db->get('utilizadores');
        return $result->result();
    }


    public function getPathFotoPneu($id){
        $this->db->select('foto_pneu');
        $this->db->where('id_pneu', $id);
        $result = $this->db->get('pneus');
        return $result->result();
    }

    public function getPathFotoJante($id){
        $this->db->select('foto_jante');
        $this->db->where('id_jante', $id);
        $result = $this->db->get('jantes');
        return $result->result();
    }

    public function getPathFotoPerfil($id){
        $this->db->select('path_image');
        $this->db->where('id', $_SESSION['id']);
        $result = $this->db->get('utilizadores');
        return $result->result();
    }

    public function getCountAll($id){
        $valor = 0;
        $pneus = $this->db->query('SELECT * FROM pneus');
        $valor += $pneus->num_rows();
        $largura = $this->db->query('SELECT * FROM largura');
        $valor += $largura->num_rows();
        $altura = $this->db->query('SELECT * FROM altura');
        $valor += $altura->num_rows();
        $diametro = $this->db->query('SELECT * FROM diametro');
        $valor += $diametro->num_rows();
        $marcas = $this->db->query('SELECT * FROM marcas');
        $valor += $marcas->num_rows();
        $jantes = $this->db->query('SELECT * FROM jantes');
        $valor += $jantes->num_rows();
        return $valor;
    }

    public function UpdateProfilImg($name_img, $id){
        $this->db->set('path_image', $name_img);
        $this->db->where('id', $id);
        $this->db->update('utilizadores');
        $this->inserirAccao('Atualizar', 'Fotográfia de perfil', $id);
        return true;
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
    public function insertMarcaVeiculo($marcaVeiculo, $sessao){
        $data = array(
            'marca_veiculo' => $marcaVeiculo
        );
    
        $this->db->insert('marcas-veiculo',$data);
        $this->inserirAccao('Inserir', 'marca veiculo', $sessao);
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

    public function updateMarcaVeiculo($id, $marcaVeiculo, $sessao){
        $data = array(
            'id_marca_veiculo' => $id,
            'marca_veiculo'  => $marcaVeiculo
        );
        $this->db->replace('marcas-veiculo', $data);
        $this->inserirAccao('Atualizar', 'marca veiculo', $sessao);
        return true;
    }

    public function getMarcas(){
        $this->db->order_by('marca','ASC');
        $result = $this->db->get('marcas');
        return $result->result();
    }

    public function getMarcaVeiculo(){
        $this->db->order_by('marca_veiculo','ASC');
        $result = $this->db->get('marcas-veiculo');
        return $result->result();
    }

    public function getDiametroJante(){
        $this->db->order_by('diametro_jante','ASC');
        $result = $this->db->get('diametro-jante');
        return $result->result();
    }

    public function getModeloVeiculo(){
        $this->db->order_by('modelo_veiculo','ASC');
        $result = $this->db->get('modelo-veiculo');
        return $result->result();
    }

    public function getJantes(){
        $this->db->select('*');    
        $this->db->from('jantes');
        $this->db->join('marcas-veiculo', 'jantes.id_marca_veiculo = marcas-veiculo.id_marca_veiculo');
        $this->db->join('diametro', 'jantes.diametro = diametro.id_diametro');
        $result =  $this->db->get();
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
            'foto_pneu' => $dados['foto_pneu'],
            'tipo' => $dados['tipo'],
            'id_marca' => $dados['marca']
        );
    
        $this->db->insert('pneus',$data);
        $this->inserirAccao('Inserir', 'pneus', $sessao);
        return true;
    }
    
    public function insertJante($dados, $sessao){
       
        
        $data = array(
            'nome_jante' => $dados['nome_jante'],
            'preco' => $dados['preco'],
            'diametro' => $dados['diametro'],
            'foto_jante' => $dados['foto_jante'],
            'tipo' => $dados['tipo'],
            'id_marca_veiculo' => $dados['marca_veiculo']
        );
    
        $this->db->insert('jantes',$data);
        $this->inserirAccao('Inserir', 'jante', $sessao);
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
            'foto_pneu' => $dados['foto_pneu'],
            'tipo' => $dados['tipo'],
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

    public function updateDefinicoes($dados, $sessao){
    
        foreach($dados as $key => $value){
            $this->db->set('valor', $value);
            $this->db->where('slug', $key);
            $this->db->update('definicoes');
        }
        $this->inserirAccao('Atualizar', 'definições', $sessao);
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

    public function getAccaoPorDia($id){
        $this->db->select('created_at');
        $this->db->limit(5,0);
        $this->db->where('id_user',$id);
        $this->db->group_by('year(created_at),month(created_at),day(created_at)');
        $this->db->order_by('id', 'DESC');
        $result = $this->db->get('accao');
        return $result->result();
    }

    public function checkPassword($id,$old){
        $this->db->select('password');
        $this->db->where('password', $old);
        $this->db->where('id', $id);
        $result = $this->db->get('utilizadores');
        if($result->num_rows() > 0){
            return true;
        } 
        return false;
    }

    public function getDefinicoes(){
        $result = $this->db->get('definicoes');
        return $result->result();
    }

    public function UpdatePassword($id, $new){
        $this->db->set('password', $new);
        $this->db->where('id', $id);
        $this->db->update('utilizadores');
        $this->inserirAccao('Atualizar', 'Palavra-passe', $id);
        return true;
    }

    public function getAccao($id,$day){

        $createDate = new DateTime($day);
        $strip = $createDate->format('Y-m-d');
        $this->db->where('id_user', $id);
        $this->db->like('created_at', $strip);
        $this->db->limit(5,0);
        $this->db->order_by('id', 'DESC');
       
        $result = $this->db->get('accao');
        return $result->result();
    }

    
}
    
