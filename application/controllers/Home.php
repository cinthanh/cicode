<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function play()
    {
        //$this->load->view('welcome_message');

        $date['title']      = 'App CI';
        $date['subview']    = 'home';
        $this->load->view('master', $date);
    }
}
