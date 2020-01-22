<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        check_already_login();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false) {
            $data['title'] = 'GAP | User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            //validation success
            $this->login();
        }
    }

    public function login() {

        check_already_login();
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if($user) {
                //cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                role="alert">Email atau Password salah!</div>');
                redirect('auth');    
                }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert">Email atau Password salah!</div>');
            redirect('auth'); 
        }  
    }

    public function registration()
    {
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah ada. Silakan Login.'
        ] );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' =>  "Password tidak sama!",
            'min_length' => "Password terlalu pendek!"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => htmlspecialchars($this->input->post('role', true))
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Congratulations! Your account has been created. Please Log-in again.</div>');
            redirect('auth');
        }        
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">You has been logged out. Please login again.</div>');
        redirect('auth');
    }
}