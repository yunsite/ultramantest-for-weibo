<?php
session_start();
// 验证用户是否已经登录新浪OAuth认证
//if( isset($_SESSION['last_key']) )  header('Location: test.php');

include_once( 'config.php' );
include_once( 'weibooauth.php' );



$o = new SaeTOAuth( WB_AKEY , WB_SKEY  );

$keys = $o->getRequestToken();
$aurl = $o->getAuthorizeURL( $keys['oauth_token'] ,false , 'http://' . $_SERVER['HTTP_APPNAME'] . '.sinaapp.com/callback.php');

$_SESSION['keys'] = $keys;


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>测测你是哪个奥特曼</title>

	<style type="text/css">
	body {
		background-color:#436eb2;
	}
	#content {
		display:block;
		width:748px;
		height:502px;
		margin-left:auto;
		margin-right:auto;
		background:#436eb2 url(intro.jpg) no-repeat fixed top;
	}
	h4 {

	}
	</style>


</head>
<body>

<div id="container"> 



<div id="content"></div>



<div align="center">

	<a href="test.php"><img src="go.png" /></a>

</div>



</div>


</body>


</html>