<?php
// 所有配置内容都可以在这个文件维护
error_reporting(E_ERROR);
define('BASE', 'http://'.$_SERVER['SERVER_NAME'].'/voime');
define('HOST', 'http://'.$_SERVER['SERVER_NAME']);
// 配置url路由   ?????????
$route_config = array(
  '/login/'=>'/user/login/',
  '/setting/'=>'/usr/setting/'
);


$db_config = array(
  'host'=>'localhost',
  'user'=>'root',
  'password'=>'root',
  'default_db'=>'voime'
);      
 

