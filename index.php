<?php
/*
 *	版权所有: www.wifidog.pro(WifiDog中文社区)  作者: 佐须之男 联系方式: 181-1435-4589 
*/

	$token = md5(uniqid());
	$gw_address = $_REQUEST['gw_address'];
	$gw_port = $_REQUEST['gw_port'];
	if(empty($gw_address) || empty($gw_port)){
		die('error');
	}
	$url="http://".$gw_address.":".$gw_port."/wifidog/auth?token=".$token;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>正在验证，请稍后</title>
<meta http-equiv="refresh" content="0.1;URL=<?php echo $url?>">
</head>
<body>
正在验证，请稍后....
</body>
</html>
