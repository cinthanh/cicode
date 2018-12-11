<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/11/18
 * Time: 12:16 PM
 */

class Common_model extends CI_Model
{

    public function menu()
    {
        //$menu_raw = $this->db->select('fs_department.*, fs_category.*')
        $menu_raw = $this->db->select('fs_department.id as de_id, fs_department.name as de_name, fs_category.*')
            ->from('fs_department')
            ->join('fs_category', 'fs_department.id = fs_category.department_id', 'left')
            ->get()->result_array();

        $menu_good = array();
        foreach ($menu_raw as $k => $v) {
            $menu_good[$v['de_name']][$k] = $v;// short array menu
        }
        return $menu_good;

    }

}