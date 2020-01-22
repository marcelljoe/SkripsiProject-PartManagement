<?php
/**
* 
*/
class Akun extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_akun');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		check_not_login();
		$data['record'] = $this->model_akun->tampil_data();
		$this->load->view('templates/template_header');
		$this->load->view('akun/lihat_data',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}


	function post(){

		if (isset($_POST['submit'])) {
			$id			= 	htmlspecialchars($this->input->post('id', true));
			$name		=	htmlspecialchars($this->input->post('name', true));
            $email		=	htmlspecialchars($this->input->post('email', true));
            $password	=	htmlspecialchars($this->input->post('password'), true);
            $role		=	htmlspecialchars($this->input->post('role', true));

			$data 			=	array(	'id' => $id,
										'name'=> $name,
										'email'=> $email,
										'password'=> $password,
                                        'role'=> $role
										);
			
			$this->model_akun->post($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data berhasil disimpan.');
			}
			redirect('akun');
		}
		else {
			
			$this->load->view('akun/form_input');
			$this->template->publish();
		}
	}


	public function delete (){
		$id=	$this->uri->segment(3);
		$this->model_akun->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		}
		redirect('akun');
	}

	public function edit (){
		if (isset($_POST['submit'])) {
			$id			= 	htmlspecialchars($this->input->post('id', true));
			$name		=	htmlspecialchars($this->input->post('name', true));
            $email		=	htmlspecialchars($this->input->post('email', true));
            $password	=	password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $role		=	htmlspecialchars($this->input->post('role', true));

			$data 		=	array(	'id' => $id,
									'name'=> $name,
									'email'=> $email,
									'password'=> $password,
                                    'role'=> $role
									);
			
			$this->model_akun->edit($data, $id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data berhasil diubah.');
			}
			redirect('akun');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_akun');
			$data['akun']=	$this->model_akun->tampil_data()->result();
			$data['record']=	$this->model_akun->get_one($id)->row_array();
			$this->load->view('templates/template_header');
			$this->load->view('akun/form_edit',$data);
			$this->load->view('templates/template_footer');
		
		}
	}
}