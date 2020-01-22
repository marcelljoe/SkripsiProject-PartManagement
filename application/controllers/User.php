<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $akses=$this->session->userdata('role');
        $this->load->view('templates/template_header');
        if($akses=='Warehouse') {
            $this->load->view('view_dashboard');
        }
        if($akses=='QC') {
            $this->load->view('view_dashboardQC');
        }
        if($akses=='Produksi') {
            $this->load->view('view_dashboardPrd');
        }
        $this->load->view('templates/template_footer');
    }

}