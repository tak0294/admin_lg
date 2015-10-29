<?php
/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 20:08
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

    private $adminModel = null;

    function __construct()
    {
        parent::__construct();

        // Initialize Session.
        if(!isset($this->session->admin_id)) {
            $this->session->admin_id = "";
        }
        if(!isset($this->session->admin_pass)) {
            $this->session->admin_pass = "";
        }

        // something
        $this->load->model("Admin_Model");
        $res = $this->Admin_Model->login('admin','admin');
        $this->util->p($res);
    }



}