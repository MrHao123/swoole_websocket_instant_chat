<?php
	//初始化redis
	$redis  = new redis();
	//链接redis
	$redis->connect('127.0.0.1',6379);
	//检测是否链接成功
	$redis->ping(); 
?>