<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Descricao extends CI_Controller {

	public function pneu($id = null)
	{
        $this->load->model('Front_Model');
        
        $result = $this->db->query("SELECT * FROM pneus 
        INNER JOIN largura ON pneus.largura = largura.id_largura
        INNER JOIN marcas ON pneus.id_marca = marcas.id_marca
        INNER JOIN altura ON pneus.altura = altura.id_altura
        INNER JOIN diametro ON pneus.diametro = diametro.id_diametro
        WHERE id_pneu = '$id'");
        
        if($result->num_rows() > 0){
            // mostrar todos os pneus iguais
            $dados['info_pneu'] = $result->result();

            $largura = $dados['info_pneu'][0]->id_largura;
            $altura = $dados['info_pneu'][0]->id_altura;
            $diametro = $dados['info_pneu'][0]->id_diametro;

            // procurar relacionados com altura ou largura ou diametro
            $result = $this->db->query("SELECT * FROM pneus WHERE (largura = $largura OR altura = $altura OR diametro = $diametro) AND id_pneu <> $id LIMIT 0,4");
            $dados['veja_tambem'] = $result->result();

            $dados['definicoes'] = $this->Front_Model->getDefinicoes();
            $this->load->view('header', $dados);
            $this->load->view('descricao', $dados);
            $this->load->view('footer', $dados);
        } else{
            redirect('/');
        }

    }

    public function jante()
	{
        $this->load->model('Front_Model');
        $dados['dados_pneu'] = $dada;
		$dados['definicoes'] = $this->Front_Model->getDefinicoes();
        $this->load->view('header', $dados);
        $this->load->view('descricao', $dados);
        $this->load->view('footer', $dados);
    }
    
}