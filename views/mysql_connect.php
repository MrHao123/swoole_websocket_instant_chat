<?php
	//在链接mysql同时连接redis.
	include_once './redis_connect.php';
	
	header("content-type:text/html;charset=utf-8");
	
	$connect = mysqli_connect('127.0.0.1','root','','swoole',3306);
	
	mysqli_query($connect,'set names utf8');

?>