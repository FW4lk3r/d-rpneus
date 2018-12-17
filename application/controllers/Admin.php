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
		$this->load->model('Admin_Model');
		$dados['marcas'] = $this->Admin_Model->getCount('marcas');
		$dados['pneus'] = $this->Admin_Model->getCount('pneus');
		//$dados['jantes'] = $this->Admin_Model->getCountJantes();
		
        $this->load->view('admin/partials/header_intern.php');
        $this->load->view('admin/index.php', $dados);
        $this->load->view('admin/partials/footer_intern.php');
	}

	/* 
		Created: 3/12/2018
		Definições
	*/
	public function definicoes(){
		$this->verify_login();

		$this->load->model('Admin_Model');
		$dados['definicoes'] = $this->Admin_Model->getDefinicoes();
		$this->load->view('admin/partials/header_intern.php');
        $this->load->view('admin/definicoes.php', $dados);
        $this->load->view('admin/partials/footer_intern.php');
	}

	/* 
		Created: 3/12/2018
		Activate Pneu
	*/
	public function AtivarPneu($id_pneu){
		$this->verify_login();
		$this->db->set('ativo', 1);
		$this->db->where('id_pneu', $id_pneu);
        $this->db->update('pneus');
		redirect('admin/pneus');
	}

	/* 
		Created: 3/12/2018
		Desactivate Pneu
	*/
	public function DesativarPneu($id_pneu){
		$this->verify_login();
		$this->db->set('ativo', 0);
		$this->db->where('id_pneu', $id_pneu);
        $this->db->update('pneus');
		redirect('admin/pneus');
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
        $this->load->view('admin/login', $data);
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
				$this->load->view('admin/login', $data);
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
						$dados['profil-img'] = $data['membro'][0]->path_image;
						$dados['logged'] = true;
						$this->session->set_userdata($dados);
						redirect('admin');
				}else{
					$this->load->view('admin/partials/header.php');
					$data['msg'] = '<center>Os dados inseridos não estão corretos tente novamente!</center>';
					$data['ClassMsg'] = 'alert-warning';
					$this->load->view('admin/login', $data);
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
		Load website settings
	*/
	public function website(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		$data['dados'] = $this->Admin_Model->getDados();
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/dados_web_admin.php',$data);
		$this->load->view('admin/partials/footer_intern.php');
		

	}

	/* 
		Created: 10/12/2018
		Process website settings
	*/
	public function proc_website(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$copyrights = $this->input->post('copyrights');
			
			
			$this->form_validation->set_rules('copyrights', 'CopyRights', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->form_validation->set_message('required', '{field} é requerido.');
			
			if($this->form_validation->run() == FALSE){
				$this->load->view('admin/partials/header_intern.php');
				$this->load->view('admin/dados_web_admin.php');
				$this->load->view('admin/partials/footer_intern.php');
			} else {
				$this->load->model('Admin_Model');
				if($this->Admin_Model->updateDados($copyrights))
					redirect('admin/website');
			}
		} 

	}

	/*
		Created: 10/12/2018
		See my profil
	*/
	public function profil(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$dados['accaoDia'] = $this->Admin_Model->getAccaoPorDia($_SESSION['id']);
		foreach($dados['accaoDia'] as $row){
			$row->accao = $this->Admin_Model->getAccao($_SESSION['id'], $row->created_at);
		}

		$dados['perfil'] = $this->Admin_Model->getDadosPerfil($_SESSION['id']);
		$dados['inseridos'] = $this->Admin_Model->getCountAll($_SESSION['id']);
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/profil', $dados);
		$this->load->view('admin/partials/footer_intern.php');
	}

	/*
		Created: 10/12/2018
		Edit password
	*/
	public function EditPassword(){
		$this->verify_login();

		$oldPassword = sha1($this->input->post('old-password'));
		$newPassword = sha1($this->input->post('password'));
		$repeatPassword = sha1($this->input->post('password-repeat'));

		//verifiy if the password are the same
		if($newPassword == $repeatPassword){
			//verifiy if the oldest password are ok
			$this->load->model('Admin_Model');

			if($this->Admin_Model->checkPassword($_SESSION['id'],$oldPassword)){
				//update database
				$this->Admin_Model->UpdatePassword($_SESSION['id'], $newPassword);
				//redirect the user
				redirect('admin/profil');
			} else {
				$this->load->view('error_password');
			}
		}
	}
	
	/*
		Created: 10/12/2018
		See pneus
	*/
	public function pneus(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$data['pneusListados'] = $this->Admin_Model->getPneus();

		$data['pneus'] = $this->Admin_Model->getPneus();
		$data['altura'] = $this->Admin_Model->getAltura();
		$data['largura'] = $this->Admin_Model->getLargura();
		$data['diametro'] = $this->Admin_Model->getDiametro();
		$data['marcas'] = $this->Admin_Model->getMarcas();

		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/pneus', $data);
		$this->load->view('admin/partials/footer_intern.php');
	}

	/*
		Created: 10/12/2018
		Create pneu
	*/
	public function criarPneus(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$dados['nome_pneu'] = $this->input->post('nome_pneu');
			$dados['preco']  = $this->input->post('preco');
			$dados['diametro']  = $this->input->post('diametro');
			$dados['largura']  = $this->input->post('largura');
			$dados['altura']  = $this->input->post('altura');
			$dados['marca']  = $this->input->post('marca');
			$dados['tipo']  = $this->input->post('tipo');
			
			$config['upload_path']          = 'assets/uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 100000;
			$config['max_width']            = 3000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);
			if($this->upload->do_upload('userfile')){
				
				$data = $this->upload->data();
				$dados['foto_pneu'] = $data['file_name'];
			} else {
				$dados['foto_pneu'] = 'icon-no-image.svg';
			}

			$this->load->model('Admin_Model');
		
			$this->Admin_Model->insertPneu($dados, $_SESSION['id']);

			redirect('admin/pneus');
		}
	}

	/*
		Created: 10/12/2018
		Update pneu
	*/
	public function updatePneus(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$id = $this->input->post('id');
			$dados['nome_pneu'] = $this->input->post('nome_pneu');
			$dados['preco']  = $this->input->post('preco');
			$dados['diametro']  = $this->input->post('diametro');
			$dados['largura']  = $this->input->post('largura');
			$dados['altura']  = $this->input->post('altura');
			$dados['marca']  = $this->input->post('marca');
			$dados['tipo']  = $this->input->post('tipo');

			$config['upload_path']          = 'assets/uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 100000;
			$config['max_width']            = 3000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);
			$this->load->model('Admin_Model');
			$this->db->select('foto_pneu');
			$this->db->where('id_pneu', $id);
			$img = $this->db->get('pneus');
			$img_final = $img->result();
			
			
			if($this->upload->do_upload('userfile')){
				
				$data = $this->upload->data();
				$dados['foto_pneu'] = $data['file_name'];
			} else {
				
				$dados['foto_pneu'] = $img_final[0]->foto_pneu;
			}
			$teste = $this->upload->data();
			if($teste['file_name'] == ""){
				
			} else{
				if($img_final[0]->foto_pneu !== 'icon-no-image.svg')
					unlink('assets/uploads/'.$img_final[0]->foto_pneu); 
			}
		

			$this->Admin_Model->updatePneus($id, $dados, $_SESSION['id']);

			redirect('admin/pneus');
		}
	}

	/*
		Created: 11/12/2018
		Delete largura
	*/
	public function deletePneu($id){
		$this->verify_login();
		$this->load->model('Admin_Model');
		$imagem = $this->Admin_Model->getPathFotoPneu($id);
			
		//fazer o delete da antiga foto
		if($imagem[0]->foto_pneu !== 'icon-no-image.svg')
			unlink('assets/uploads/'.$imagem[0]->foto_pneu); 
		$this->db->where('id_pneu', $id);
		$this->db->delete('pneus');

		redirect('admin/pneus');
	}

	
	/*
		Created: 10/12/2018
		See brands
	*/
	public function marcas(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$data['marcas'] = $this->Admin_Model->getMarcas();
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/marcas', $data);
		$this->load->view('admin/partials/footer_intern.php');
	}
	
	/*
		Created: 10/12/2018
		Create brand
	*/
	public function criarMarca(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$marca = $this->input->post('marca');
			
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->insertMarca($marca, $_SESSION['id']);

			redirect('admin/marcas');
		}
	}

	/*
		Created: 10/12/2018
		See largura
	*/
	public function largura(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$data['largura'] = $this->Admin_Model->getLargura();
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/largura', $data);
		$this->load->view('admin/partials/footer_intern.php');
	}
	
	/*
		Created: 10/12/2018
		Create largura
	*/
	public function criarLargura(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$largura = $this->input->post('largura');
			
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->insertLargura($largura, $_SESSION['id']);

			redirect('admin/largura');
		}
	}
	
	/*
		Created: 10/12/2018
		Update largura
	*/
	public function updateLargura(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$id = $this->input->post('id');
			$largura = htmlspecialchars($this->input->post('largura'));
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->updateLargura($id, $largura, $_SESSION['id']);

			redirect('admin/largura');
		}
	}

	public function updateDefinicoes(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$dados['fixo'] = htmlspecialchars($this->input->post('telefoneFixo'));
			$dados['telemovel'] = htmlspecialchars($this->input->post('telemovel'));
			$dados['email'] = htmlspecialchars($this->input->post('email'));
			$dados['facebook'] = htmlspecialchars($this->input->post('facebook'));
			$dados['texto'] = htmlspecialchars($this->input->post('texto'));
			$dados['nome_empresa'] = htmlspecialchars($this->input->post('empresa'));
			$dados['desc_contactos'] = htmlspecialchars($this->input->post('desc_contactos'));
			$dados['morada'] = htmlspecialchars($this->input->post('morada'));
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->updateDefinicoes($dados, $_SESSION['id']);

			redirect('admin/definicoes');
		}
	}

	
	/*
		Created: 10/12/2018
		Delete largura
	*/
	public function deleteLargura($id){
		$this->verify_login();
		
		$this->db->where('id_largura', $id);
		$this->db->delete('largura');

		redirect('admin/largura');
	}

	/*
		Created: 10/12/2018
		See altura
	*/
	public function altura(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$data['altura'] = $this->Admin_Model->getAltura();
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/altura', $data);
		$this->load->view('admin/partials/footer_intern.php');
	}
	
	/*
		Created: 10/12/2018
		Create altura
	*/
	public function criarAltura(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$altura = $this->input->post('altura');
			
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->insertAltura($altura, $_SESSION['id']);

			redirect('admin/altura');
		}
	}
	
	/*
		Created: 10/12/2018
		Update altura
	*/
	public function updateAltura(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$id = $this->input->post('id');
			$altura = htmlspecialchars($this->input->post('altura'));
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->updateAltura($id, $altura, $_SESSION['id']);

			redirect('admin/altura');
		}
	}

	/*
		Created: 10/12/2018
		Delete altura
	*/
	public function deleteAltura($id){
		$this->verify_login();

		$this->db->where('id_altura', $id);
		$this->db->delete('altura');

		redirect('admin/altura');
	}

	/*
		Created: 10/12/2018
		See diametro
	*/
	public function diametro(){
		$this->verify_login();
		$this->load->model('Admin_Model');
		
		$data['diametro'] = $this->Admin_Model->getDiametro();
		$this->load->view('admin/partials/header_intern.php');
		$this->load->view('admin/diametro', $data);
		$this->load->view('admin/partials/footer_intern.php');
	}
	
	/*
		Created: 10/12/2018
		Create diametro
	*/
	public function criarDiametro(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$diametro = $this->input->post('diametro');
			
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->insertDiametro($diametro, $_SESSION['id']);

			redirect('admin/diametro');
		}
	}
	
	/*
		Created: 10/12/2018
		Update diametro
	*/
	public function updateDiametro(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$id = $this->input->post('id');
			$diametro = htmlspecialchars($this->input->post('diametro'));
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->updateDiametro($id, $diametro, $_SESSION['id']);

			redirect('admin/diametro');
		}
	}

	/*
		Created: 10/12/2018
		Delete diametro
	*/
	public function deleteDiametro($id){
		$this->verify_login();

		$this->db->where('id_diametro', $id);
		$this->db->delete('diametro');

		redirect('admin/diametro');
	}

	/*
		Created: 10/12/2018
		Update brand
	*/
	public function updateMarca(){
		$this->verify_login();
		if($this->input->post('submit') !== null){
			$id = $this->input->post('id');
			$marca = htmlspecialchars($this->input->post('marca'));
			$this->load->model('Admin_Model');
		
			$this->Admin_Model->updateMarca($id, $marca, $_SESSION['id']);

			redirect('admin/marcas');
		}
	}

	/*
		Created: 10/12/2018
		Delete brand
	*/
	public function deleteMarca($id){
		$this->verify_login();

		$this->db->where('id_marca', $id);
		$this->db->delete('marcas');

		redirect('admin/marcas');
	}
	
	

	/*
		Created: 10/12/2018
		Destroy Session
	*/
	public function logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
	}
	
	/*
		Created: 10/12/2018
		Uploading system
	*/
	public function do_upload()
	{
		$config['upload_path']          = 'assets/uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 3000;
		$config['max_height']           = 2000;

		$this->load->library('upload', $config);

		//alterar nome da nova foto
		
		
		if ($this->upload->do_upload('userfile'))
		{
			$this->load->model('Admin_Model');

			//recuperar o nome da antiga foto
			$nome_antigo = $this->Admin_Model->getPathFotoPerfil($_SESSION['id']);
			
			//fazer o delete da antiga foto
			if($nome_antigo[0]->path_image !== 'generic-user.png')
				unlink('assets/uploads/'.$nome_antigo[0]->path_image); 
			
			//inserir a nova path na base de dados
			$dados = $this->upload->data();
			$this->Admin_Model->UpdateProfilImg($dados['file_name'], $_SESSION['id']);

			//update sessao imagem
			$_SESSION['profil-img'] = $dados['file_name'];
			//fazer o redirect
			redirect('admin/profil');
		}
		
	}
    
    
}