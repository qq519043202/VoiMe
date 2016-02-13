<?php
class pbc_m extends m{
	function __construct(){
		parent::__construct();

	}
	function all()
	{
		$res = $this->db->query("SELECT * FROM records where del != 1 ORDER BY time ASC;");
		// print_r($res);
		return $res;
	}
	function get_user_name($res)
	{
		foreach ($res as &$val) {
			$id = $val['user_id'];
			$name = $this->db->query("SELECT name FROM logins WHERE id = $id; ");
			$val['user_id'] = $name[0]['name'];
		}
		// print_r($res);
		return $res;
	}
	function get_liuyan()
	{
		$id = $_POST['id'];
		$res = $this->db->query("SELECT * FROM messages WHERE record_id = $id;");
		$res = $this->get_user_name($res);
    	$js = json_encode($res);
    	echo $js;
	}

}