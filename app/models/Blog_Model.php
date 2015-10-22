<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 19:46
 */
class Blog_Model extends MY_Model {

    protected $_tableName = "M_blog";

    public function getById($id) {
        $in = array();
        $in["blog_id"] = $id;
        print_r($in);
        return $this->get($in);
    }
}