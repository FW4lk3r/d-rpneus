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
        $result = $this->db->get('pneus');
        return $result->result();
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
        $result = $this->db->get('altura');
        return $result->result();
    }

    public function getDiametro(){
        $result = $this->db->get('diametro');
        return $result->result();
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

    

    /*
        Permite inserir dados de um determinado membro do sistema
    */
    public function Inserir_Dados($dados){
        $data = array(
            'id_utilizador' => ''
        );
        $this->db->set($data);
        $this->db->insert('utilizador',$data);
       
        echo $this->db->set('id_utilizador', '')->get_compiled_insert();
        $this->db->insert('utilizador_comlogin', $dados);
        return true;
    }
    

     /*
        Permite inserir os pontos 
    */
    public function Inserir_Pontos($dados){
        $this->db->insert('pontos',$dados);
    }

    /*
        Permite Listar todas as rows de um determinado cliente
    */
    public function ListagemDados($id, $Quantidade){
        $this->db->where('id_utilizador', $id);
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
        //$this->db->join('tipo_pedido','ID_Tipo_Pedido = Tipo_Pedido','inner');
        $this->db->limit($Quantidade);
        $this->db->order_by('id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

     /*
        Permite Listar todas as rows de um determinado cliente
    */
    public function ListagemDadosFunc($Quantidade){
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
        //$this->db->join('tipo_pedido','ID_Tipo_Pedido = Tipo_Pedido','inner');
        $this->db->limit($Quantidade);
        $this->db->order_by('id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

    
    public function ContagemDadosFunc($tipo){
        $this->db->where('id_epedido',$tipo);
        $result = $this->db->count_all_results('pedidos');
        return $result;
    }

 
    public function ListagemDadosPagFuncTodos($value, $reg_por_pagina){
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido', 'inner');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
       // $this->db->join('tipo_lixo','ID_Tipo_Lixo = Residuo_Pedido','inner');
        //$this->db->join('tipo_pedido','ID_Tipo_Pedido = Tipo_Pedido','inner');
        $this->db->limit($reg_por_pagina, $value);
        $this->db->order_by('id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

     /*
        Permite Mostrar todas as rows de um determinado cliente para os pedidos
    */
    public function ContarRows($id){
        $this->db->where('id_utilizador', $id);
        $result = $this->db->count_all_results('pedidos');
        return $result;
    }

    public function ContarRowsFunc(){
        $result = $this->db->count_all_results('pedidos');
        return $result;
    }

    /*
        Permite Mostrar todas as rows de um determinado cliente para os pontos
    */
    public function ContarPontos($id){
        $this->db->select_sum('pontos_ganhos');
        $this->db->where('id_utilizador',  $id);
        $result = $this->db->get('pontos')->result();
        return $result;
    }


    /*
        Permite Mostrar todas as rows dos pedidos
    */
    public function ContarTodasRows(){
        $result = $this->db->count_all('pedidos');
        return $result;
    }


    public function ListagemDadosPag($id, $value, $reg_por_pagina){
        $this->db->where('id_utilizador', $id);
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido', 'inner');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
       // $this->db->join('tipo_lixo','ID_Tipo_Lixo = Residuo_Pedido','inner');
        //$this->db->join('tipo_pedido','ID_Tipo_Pedido = Tipo_Pedido','inner');
        $this->db->limit($reg_por_pagina, $value);
        $this->db->order_by('id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }
    
    public function ListagemDadosPagMobile($id){
        $this->db->where('id_utilizador', $id);
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido', 'inner');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
        $this->db->order_by('id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

     public function ListagemDadosPagMobile2(){
        $this->db->where('pedidos.id_epedido', 1);
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido', 'inner');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
        $this->db->order_by('pedidos.id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

    public function ListagemDadosPagMobile3($id){
        $this->db->where('pedidos.id_concluido', $id);
        $this->db->join('estado_pedido', 'estado_pedido.id_epedido = pedidos.id_epedido', 'inner');
        $this->db->join('item','item.id_item = pedidos.id_item_fk');
        $this->db->order_by('pedidos.id_pedido', 'DESC');
        $result = $this->db->get('pedidos');
        return $result->result();
    }

    public function Concluir_pedido($id, $data){
        $this->db->where('id_pedido', $id);
        $this->db->update('pedidos', $data);
    }

     public function Concluir_pedidoSite($id, $data){
        $this->db->where('id_pedido', $id);
        $this->db->update('pedidos', $data);
    }



/*
SELECT  `utilizador_comlogin`.nome_u, SUM(  `pontos_ganhos` ) AS  `POINTS` 
FROM  `pontos` 
JOIN  `utilizador_comlogin` ON  `pontos`.id_utilizador =  `utilizador_comlogin`.id_utilizador
GROUP BY  `utilizador_comlogin`.nome_u
ORDER BY  `POINTS` DESC 
LIMIT 0 , 30

*/


    public function Ranking($inicio, $fim){
            $this->db->select('utilizador_comlogin.nome_u, SUM(pontos_ganhos) AS Pontos');
            $this->db->join('utilizador_comlogin', 'pontos.id_utilizador = utilizador_comlogin.id_utilizador');
            //$this->db->select_sum('pontos_ganhos', 'Pontos')
            $this->db->group_by('utilizador_comlogin.nome_u'); 
            $this->db->order_by('Pontos', 'DESC');
           
            $this->db->limit($fim,$inicio );
            $result = $this->db->get('pontos');
            return $result->result();
        }

}