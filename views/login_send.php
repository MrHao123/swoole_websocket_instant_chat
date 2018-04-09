<?php
		
	include_once './mysql_connect.php';
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	
	$sql = "select * from user where username = $username and password =  $password";
	
	$query = mysqli_query($sql);
	
	if($query)
	{
		//登录成功后进入房间列表页。看到所有房间/可以创建自己的房间
		header("refresh:0;location.href='room_list.php'");
	}
	else
	{
		//账号密码不正确
		header("refresh:0;location.href='login.php'");
	}

?>