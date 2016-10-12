<?php
class usr extends base{
	var $m;
    function __construct()
    {
    	parent::__construct();
    	$this->m=load('m/usr_m');
    }
	function index(){
		$this->display('v/usr/index');
	}
	function setting(){
		$this->display("v/usr/setting");
	}
	function record(){
		$this->display("v/record");
	}
	function login()
	{
		if($this->m->login($_POST['email'],$_POST['password']))
		{
			$this->display('v/index');
		}
		else
		{
			$param['info'] = $this->m->login_err;
			$this->display("v/reg",$param);
		}
		
	}
	function logout()
	{
		$this->m->logout();
		header("Location:./?/home/start");
	}
	function regi()
	{
		$info = $this->m->regi();
		if($info)
		{
			header("Location:./?/home/services");
		}
		else
		{
			var_dump($info);
		}
		//var_dump($_POST);
	}
	function upload()
	{
		//判断登录。。。
		$this->m->upload();
	}

	function self()
	{
		// $this->display('v/list');
		$param['res'] = $this->m->self();
		$this->display('v/list',$param);
	}

	function liuyan()
	{
		if(!isset($_SESSION['email']))
		{
			header("Location:./?/home/start");
		}
		if($this->m->liuyan())
		{
			header("Location:./?/home/services");
		}
		else
		{
			echo "error";
		}
	}

	function test()
	{
		var_dump($_SESSION);
	}
}