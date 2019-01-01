<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Front_Model');
		$dados['altura'] = $this->Front_Model->getAltura();
		$dados['diametro'] = $this->Front_Model->getDiametro();
		$dados['largura'] = $this->Front_Model->getLargura();
		$dados['pneus'] = $this->Front_Model->getPneus();
		$dados['menu'] = $this->Front_Model->getDadosMenu();
		$dados['jantes'] = $this->Front_Model->getJantes();
		$dados['veiculos'] = $this->Front_Model->getMarcasVeiculo();
		$dados['definicoes'] = $this->Front_Model->getDefinicoes();
        $this->load->view('header', $dados);
        $this->load->view('index', $dados);
        $this->load->view('footer', $dados);
	}
    
}