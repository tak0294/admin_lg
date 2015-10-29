<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 19:46
 */
class Admin_Model extends MY_Model {

    protected $_tableName = "M_admin";

    public function login($login_id, $login_pass) {
        $in = array();
        $in["admin_id"] = $login_id;
        $in["admin_pass"] = $login_pass;
        $res = $this->get($in);
        return $res;
    }
}