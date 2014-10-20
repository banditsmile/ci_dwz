<?php
/**
 * Created by PhpStorm.
 * User: xulianhong
 * Date: 2014/9/26
 * Time: 16:48
 */
class node_model extends MY_model{
	public function __construct(){
		parent::__construct();
		$this->load->database('default');
	}
	public function menu(){
		$this->db->select('name,title');
		$filter = array(
			'level'=>2,
			'status'=>1,
		);
		$this->db->where($filter);
		$query = $this->db->get('node');
		$menu = $query->result_array();
		return $menu;
	}
}