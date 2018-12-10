<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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


	/*
		CREATE TABLE IF NOT EXISTS `ci_sessions` (
        	`id` varchar(128) NOT NULL,
        	`ip_address` varchar(45) NOT NULL,
        	`timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        	`data` blob NOT NULL,
        	KEY `ci_sessions_timestamp` (`timestamp`)
		);
	*/

	/* 
		Created: 4/12/2018
		Create a middleware of session
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	/* 
		Created: 3/12/2018
		Load the interface admin
	*/
	public function index()
	{
		$this->verify_login();
        $this->load->view('admin/partials/header.php');
        $this->load->view('admin/index.html');
        $this->load->view('admin/partials/footer.php');
	}

	/* 
		Created: 3/12/2018
		Load the login page
	*/
	public function login($indice = NULL){
		$this->load->view('admin/partials/header.php');
		if($indice == 1){
            $data['msg'] = '<center>Cliente ativado com Sucesso</center>';
            $data['ClassMsg'] = 'alert-success';
        }else if($indice == 2){
            $data['msg'] = '<center>Não foi possivel ativar a sua conta</center>';
            $data['ClassMsg'] = 'alert-danger';
        }else if($indice == 3){
            $data['msg'] = '<center>A conta não está ativa, verifique o seu e-mail!</center>';
            $data['ClassMsg'] = 'alert-danger';
        }else if($indice == 4){
            $data['msg'] = '<center>A sua password foi redefinida</center>';
            $data['ClassMsg'] = 'alert-warning';
        }
        else if($indice == 5){
            $data['msg'] = '<center>A sua conta foi criada com sucesso. Verifique o seu e-mail para ativar a conta</center>';
            $data['ClassMsg'] = 'alert-success';
        }
        else if($indice == 6){
            $data['msg'] = '<center>Os seus dados não foram inseridos corretamente no nosso sistema, comunique com o administador do sistema.</center>';
            $data['ClassMsg'] = 'alert-danger';
        }
        else if($indice == 7){
            $data['msg'] = '<center>ERRO: Ao enviar o e-mail de ativação, comunique com o adminsitrador.</center>';
            $data['ClassMsg'] = 'alert-danger';
        }
        else if($indice == 8){
              $data['msg'] = '<center>Este E-Mail já existe nos nossos registos, se se esqueceu da password redefina a password!</center>';
            $data['ClassMsg'] = 'alert-info';
        }
        else if($indice == 9){
              $data['msg'] = '<center>Os dados inseridos não existem na nossa base de dados!</center>';
            $data['ClassMsg'] = 'alert-danger';
        }
        else{
            $data['msg'] = NULL;
        }
        $this->load->view('admin/login.html', $data);
        $this->load->view('admin/partials/footer.php');
	}

	/* 
		Created: 10/12/2018
		Process login data
	*/
	public function proc_login($indice = NULL){
		if($this->input->post('submit') !== null){
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			
			$this->form_validation->set_rules('email', 'Nome utilizador', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Palavra-passe', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->form_validation->set_message('required', '{field} é requerido.');
			
			if($this->form_validation->run() == FALSE){
				$this->load->view('admin/partials/header.php');
				if($indice == 1){
					$data['msg'] = '<center>Cliente ativado com Sucesso</center>';
					$data['ClassMsg'] = 'alert-success';
				}else if($indice == 2){
					$data['msg'] = '<center>Não foi possivel ativar a sua conta</center>';
					$data['ClassMsg'] = 'alert-danger';
				}else if($indice == 3){
					$data['msg'] = '<center>A conta não está ativa, verifique o seu e-mail!</center>';
					$data['ClassMsg'] = 'alert-danger';
				}else if($indice == 4){
					$data['msg'] = '<center>A sua password foi redefinida</center>';
					$data['ClassMsg'] = 'alert-warning';
				}
				else if($indice == 5){
					$data['msg'] = '<center>A sua conta foi criada com sucesso. Verifique o seu e-mail para ativar a conta</center>';
					$data['ClassMsg'] = 'alert-success';
				}
				else if($indice == 6){
					$data['msg'] = '<center>Os seus dados não foram inseridos corretamente no nosso sistema, comunique com o administador do sistema.</center>';
					$data['ClassMsg'] = 'alert-danger';
				}
				else if($indice == 7){
					$data['msg'] = '<center>ERRO: Ao enviar o e-mail de ativação, comunique com o adminsitrador.</center>';
					$data['ClassMsg'] = 'alert-danger';
				}
				else if($indice == 8){
					  $data['msg'] = '<center>Este E-Mail já existe nos nossos registos, se se esqueceu da password redefina a password!</center>';
					$data['ClassMsg'] = 'alert-info';
				}
				else if($indice == 9){
					  $data['msg'] = '<center>Os dados inseridos não existem na nossa base de dados!</center>';
					$data['ClassMsg'] = 'alert-danger';
				}
				else{
					$data['msg'] = NULL;
				}
				$this->load->view('admin/login.html', $data);
				$this->load->view('admin/partials/footer.php');
			} else {
				$this->db->where('password', $password);
				$this->db->where('email', $email);
				$data['membro'] = $this->db->get('utilizadores')->result();
		
				if(count($data['membro']) == 1){
						$this->load->model('Admin_Model');
						//$dados['Urgente'] = $this->Cliente_Model->ContagemDadosFunc(4);
						$dados['id'] = $data['membro'][0]->id;
						$dados['nome'] = $data['membro'][0]->nome;
						$dados['email'] = $data['membro'][0]->email;
						$dados['cargo'] = $data['membro'][0]->cargo;
						$dados['created_at'] = $data['membro'][0]->created_at;
						$dados['logged'] = true;
						$this->session->set_userdata($dados);
						redirect('admin');
				}else{
					$this->load->view('admin/partials/header.php');
					$data['msg'] = '<center>Os dados inseridos não estão corretos tente novamente!</center>';
					$data['ClassMsg'] = 'alert-warning';
					$this->load->view('admin/login.html', $data);
					$this->load->view('admin/partials/footer.php');
				}
			}

		}
	}

	/* 
		Created: 4/12/2018
		Verify if user is logged
	*/
	public function verify_login(){
		if(!$this->session->has_userdata('logged'))
			redirect('admin/login');

	}

	/*
		Created: 10/12/2018
		Destroy Session
	*/
	public function logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
    }
    
    
}