<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_model {
    public function login($post)
    {
        $this->db->select($post['password']);
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        //$this->db->where('password', sha1($post['password']));
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;

    }

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}