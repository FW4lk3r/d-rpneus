<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Front_Model');
		$dados['altura'] = $this->Front_Model->getAltura();
		$dados['diametro'] = $this->Front_Model->getDiametro();
		$dados['largura'] = $this->Front_Model->getLargura();
        $this->load->view('header');
        $this->load->view('index', $dados);
        $this->load->view('footer');
    }
    
    
}