<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function article()
	{
//		$this->load->database();
//		$this->load->library("vendor/FluentPDO/FluentPDO", array("pdo"=>$this->db->conn_id));
//		//$query = $this->fluentpdo->from('M_admin')->where('admin_id = ?', 'admin')->getQuery();
//		$statement = $this->fluentpdo->from('M_admin')->where(array("admin_id LIKE" => "%dmin%"))->order("admin_id desc");
//
//		$param = $statement->getParameters();
//		$sql   = $statement->getQuery();
//		echo $sql;
//		print_r($param);
//		$res = $this->db->query($sql, $param)->result();
//		print_r($res);
//		//foreach($query as $row) {
			//print_r($row);
		//}
//phpinfo();
print_r($_REQUEST);
        $this->load->model("Blog_Model");
		$res = $this->Blog_Model->getById(2);

        $in = array();
        $in["blog_id"] = 1;
        $res = $this->Blog_Model->get($in);
        print_r($res);

		$this->load->view('welcome_message');
	}
}
