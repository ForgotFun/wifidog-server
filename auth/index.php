<?php
/*
 *	版权所有: www.wifidog.pro(WifiDog中文社区)  作者: 佐须之男 联系方式: 181-1435-4589 
*/

/**
 * 通过判断token  来判断是否放行 
 * 
 * 如果不放行，请返回以下代码
 * echo ("Auth: 0\n");
 * echo ("Messages: No Access\n");
 * exit;
 */
$token = $_GET['token'];
if(empty($token)) die('error');
echo ("Auth: 1\n");
echo ("Messages: Allow Access\n");
exit;
