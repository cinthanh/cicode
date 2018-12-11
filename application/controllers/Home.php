<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function play()
    {
        //$this->load->view('welcome_message');

        $date['title']      = 'App CI';
        $date['subview']    = 'home';
        $this->load->view('master', $date);
    }

    public function dashboard()
    {
        $data['title']      = 'App Dashboard';
        $data['titlePage']  = 'Home Page';
        $data['subview']    = 'home';
//        $this->db->select('*');
//        $query = $this->db->get('fs_admin');
//        $data['product']    = $query->result_array();
//        echo '<pre>'; print_r($data['product']); echo '</pre>';
        $this->load->view('layout', $data);
    }
}
