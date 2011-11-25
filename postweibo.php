<?php
session_start();
if( isset($_SESSION['last_key']) )
	$isLogin="1";
else
	header('Location: index.php');


include_once( 'config.php' );
include_once( 'weibooauth.php' );
//include_once( 'saet.ex.class.php' );




// 获取新浪微博账号信息

	$c = new WeiboClient( WB_AKEY , 
						  WB_SKEY , 
						  $_SESSION['last_key']['oauth_token'] , 
						  $_SESSION['last_key']['oauth_token_secret']  );

	$msg = $c->verify_credentials();
	if ($msg === false || $msg === null){
		echo "Error occured";
		return false;
	}
	if (isset($msg['error_code']) && isset($msg['error'])){
		echo ('Error_code: '.$msg['error_code'].';  Error: '.$msg['error'] );
		return false;
	}

	//if (isset($msg['name'])){
	//	echo($msg['name']);
	//}

	$SendToWeibo = new SaeTClient( WB_AKEY , WB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>正在发布...</title>
</head>
<body>


	<?php

	if( isset($_REQUEST['text']))
	{

	$c->upload($_REQUEST['text'],"http://ultramantest.sinaapp.com".$_REQUEST['pic']);

	//echo "<p>发送完成</p>";

	}

	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='suc.php';";
	echo "</script>";

	?>


</body>
</html>