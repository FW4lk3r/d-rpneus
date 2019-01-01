<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Descricao extends CI_Controller {

	public function pneu()
	{
        $this->load->model('Front_Model');
        $largura = htmlspecialchars($this->input->post('largura'));
        $altura = htmlspecialchars($this->input->post('altura'));
        $diametro = htmlspecialchars($this->input->post('diametro'));
    


        $result = $this->db->query("SELECT * FROM pneus 
        INNER JOIN largura ON pneus.largura = largura.id_largura
        INNER JOIN marcas ON pneus.id_marca = marcas.id_marca
        INNER JOIN altura ON pneus.altura = altura.id_altura
        INNER JOIN diametro ON pneus.diametro = diametro.id_diametro
        WHERE pneus.largura LIKE '$largura' AND pneus.altura LIKE '$altura' AND pneus.diametro LIKE '$diametro' LIMIT 0,5");
        
        if($result->num_rows() > 0){
            // mostrar todos os pneus iguais
            $dados['info_pneu'] = $result->result();
        } else{
            // procurar relacionados com altura ou largura ou diametro
            $result = $this->db->query("SELECT * FROM pneus WHERE largura LIKE '$largura' OR altura LIKE '$altura' OR diametro OR '$diametro' LIMIT 0,5");
            $dados['info_pneu'] = $result->result();
        }

        $dados['definicoes'] = $this->Front_Model->getDefinicoes();
        $this->load->view('header', $dados);
        $this->load->view('descricao', $dados);
        $this->load->view('footer', $dados);
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