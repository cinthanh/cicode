<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/11/18
 * Time: 12:03 PM
 */

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->db->select('*');
        $query = $this->db->get('fs_admin');
        $menu['menu']  = $query->result_array();
        $this->load->vars($menu);
    }
}