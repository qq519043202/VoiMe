<?php
class usr_m extends m{
	function __construct(){
		parent::__construct();

	}
	//。简单的登陆。
	function login($email,$password){
		$user = $this->db->query("SELECT * FROM logins WHERE email ='$email'");
		if(!isset($user[0])){
	      	$this->login_err = '用户不存在！';
	      	return FALSE;
	    }
	    if($user[0]['password'] != $password )
	    {
	      	$this->login_err = '密码错误！';
	      	return FALSE;
	    }
	    $_SESSION['email'] = $email;
	    $_SESSION['user_id'] = $user[0]['id'];
	    $_SESSION['name'] = $user[0]['name'];
	    return TRUE;
	}
	function regi()//注册
	{
		$password = $_POST['password'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sex = $_POST['sex'];
		$this->db->query("INSERT INTO logins VALUES(NULL,'$name','$password','$email',$sex,NOW(),'0');");
		if(!mysql_errno())
		{
			$_SESSION['email'] = $email;
			$_SESSION['email'] = $name;
	    	$_SESSION['user_id'] = $this->db->insert_id();
			return TRUE;
		}
		else return mysql_error();
	}
	
	function logout()
	{
		session_start();
		session_destroy();
	}

	function upload()
	{
		if(!is_dir("public/recordings")){
			$res = mkdir("public/recordings",0777); 
		}

		// pull the raw binary data from the POST array
		$data = substr($_POST['data'], strpos($_POST['data'], ",") + 1);
		// decode it
		$decodedData = base64_decode($data);
		// print out the raw data, 
		//echo ($decodedData);
		$filename = 'recording_' . date( 'Y-m-d-H-i-s' ) .'.mp3';
		// write the data out to the file
		$fp = fopen('public/recordings/'.$filename, 'wb');
		fwrite($fp, $decodedData);
		fclose($fp);

		$id = $_SESSION['user_id'];
		$len = $_POST['len'];

		$this->db->query("INSERT INTO records VALUES(NULL,$id,'$filename',0,0,NOW(),$len,0);");
	}

	function self()
	{
		$id = $_SESSION['user_id'];
		$name = $_SESSION['name'];
		$res = $this->db->query("SELECT * FROM records WHERE user_id = $id;");
		// print_r($res);
		foreach ($res as &$key) {
			$key['user_id'] = $name;
			// print_r($res);
			// print_r($key['user_name']);
		}
		// print_r($res);
		return $res;
	}
	function liuyan()
	{
		$body = $_POST['body'];
		$user_id = $_SESSION['user_id'];
		$record_id = $_POST['id'];
		$this->db->query("INSERT INTO messages VALUES(NULL,$record_id,$user_id,'$body');");
		if(!mysql_errno())
		{
			$this->db->query("UPDATE records set liuyans = liuyans+1 WHERE id = $record_id;");
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
