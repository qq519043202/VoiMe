<?php
class home extends base{
	var $m;
    function __construct()
    {
    	parent::__construct();
    	$this->m = load('m/pbc_m');
    }
	function index(){
		$this->display('v/index');
	}
	function start(){
		$this->display("v/reg");
	}
	function services(){
		// $param['res'] = $this->m->all();
		// var_dump($param['res']);
		$param['res'] =  $this->m->get_user_name($this->m->all());
		$this->display('v/list',$param);
	}
	function get_liuyan()
	{
		$this->m->get_liuyan();
	}
	function has_login()
	{
		if(isset($_SESSION['name'])) echo 1;
			else 	echo 0;
	}
}