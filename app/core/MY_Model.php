<?php

/**
 * Created by PhpStorm.
 * User: mitamura
 * Date: 2015/10/15
 * Time: 19:46
 */
class MY_Model extends CI_Model {

    private $CI;
    protected $_tableName = "";

    /**
     * Class constructor
     *
     * @return	void
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library("/user/db/DbUtil");
    }

    // --------------------------------------------------------------------


    public function get($param) {

        $res = $this->CI->dbutil->get($this->_tableName, $param);
        return $res;
    }


    /**
     * __get magic
     *
     * Allows models to access CI's loaded classes using the same
     * syntax as controllers.
     *
     * @param	string	$key
     */
    public function __get($key)
    {
        // Debugging note:
        //	If you're here because you're getting an error message
        //	saying 'Undefined Property: system/core/Model.php', it's
        //	most likely a typo in your model code.
        return get_instance()->$key;
    }

}
