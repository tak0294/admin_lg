<?php

/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 13:36
 */
class DbUtil
{
    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->database();
        $this->CI->load->library("vendor/FluentPDO/FluentPDO", array("pdo"=>$this->CI->db->conn_id));
    }

    public function get($table, $in = array()) {

        $order = "";
        if(isset($in["order"])) {
            $order = $in["order"];
            unset($in["order"]);
        }

        $limit = 0;
        $offset = 0;
        if(isset($in["limit"])) {
            $limit = $in["limit"];
            unset($in["limit"]);
        }
        if(isset($in["offset"])) {
            $offset = $in["offset"];
            unset($in["offset"]);
        }

        $statement = $this->CI->fluentpdo->from($table)->where($in);
        if($order) {
            $statement->order($order);
        }

        if($limit) {
            $statement->limit($limit);
        }
        if($offset) {
            $statement->offset($offset);
        }

        $param = $statement->getParameters();
        $sql   = $statement->getQuery();

        $q = $this->CI->db->query($sql, $param);

        if(!$q) {
            return false;
        }
        $res = $q->result_array();

        return $res;
    }

    public function query($sql, $params = array()) {
        $q = $this->CI->db->query($sql, $params);
        if(!$q) {
            return false;
        }
        return $q->result_array();
    }
}