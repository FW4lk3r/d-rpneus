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

	public function enviar_email(){
		$this->load->library('email');
		$email = $this->input->post('email');
		$nome = $this->input->post('nome');
		$mensagem = $this->input->post('message');
		
		$subject = 'Formulaire de contact';
		$message = $mensagem;

		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		Bonjour je m\'appelle <strong>'. $nome .'</strong>,<br>
		' . $message . '
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);

		$result = $this->email
			->from($email)
			->to('info@drpneus.ch')
			->subject($subject)
			->message($body)
			->send();

		var_dump($result);
		echo '<br />';
		$this->session->set_flashdata('user_email', $email);
		$this->session->set_flashdata('user_message', $message);
		$this->session->set_flashdata('user_name', $nome);
		redirect('Home/email');
	}

	public function email(){
		$this->load->model('Front_Model');
		$dados['definicoes'] = $this->Front_Model->getDefinicoes();
        $this->load->view('header', $dados);
        $this->load->view('sucesso');
        $this->load->view('footer', $dados);
	}
    
}