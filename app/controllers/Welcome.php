<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
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

		$this->load->library("/user/db/DbUtil");
		$in = array();
		$in["admin_id LIKE ?"] = "%aad%";
//		$in["admin_createdatetime"] = date("Y-m-d");
		$in["find_in_set(?, admin_id)"] = "admin1";
		$in["order"] = "admin_id DESC";
		$in["limit"] = 10;
		$in["offset"] = 0;
		$res = $this->dbutil->get("M_admin", $in);
		print_r($res);

		$blogs = $this->dbutil->query("SELECT * FROM M_blog WHERE blog_id = 1");
		print_r($blogs);

		$this->load->view('welcome_message');
	}
}
