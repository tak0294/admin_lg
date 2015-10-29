<?php
/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 20:08
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // something
    }
}

require(APPPATH.'libraries/controllers/Admin_Controller.php'); // contains some logic applicable only to `admin` controllers