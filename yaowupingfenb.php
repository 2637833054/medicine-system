<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	$ukangzuanbi = $_POST['kangzuanbi'];
	$ukangzuankou = $_POST['kangzuankou'];
	$ukangbaisanxibi = $_POST['kangbaisanxibi'];
	$ukangbaisanxikou = $_POST['kangbaisanxikou'];
	$utangpizhibi = $_POST['tangpizhibi'];
	$utangpizhikou = $_POST['tangpizhikou'];
	$utangpizhixi = $_POST['tangpizhixi'];
	$uzhiqiguankou = $_POST['zhiqiguankou'];
	$uzhiqiguanxi = $_POST['zhiqiguanxi'];
	$ukangzuanbit = $_POST['kangzuanbit'];
	$ukangzuankout = $_POST['kangzuankout'];
	$ukangbaisanxibit = $_POST['kangbaisanxibit'];
	$ukangbaisanxikout = $_POST['kangbaisanxikout'];
	$utangpizhibit = $_POST['tangpizhibit'];
	$utangpizhikout = $_POST['tangpizhikout'];
	$utangpizhixit = $_POST['tangpizhixit'];
	$uzhiqiguankout = $_POST['zhiqiguankout'];
	$uzhiqiguanxit = $_POST['zhiqiguanxit'];
	
	//准备链接信息
	$myhost = 'localhost';
	$myusername = 'phpmyadmin';
	$mypassword = '';
	$mydatabase = 'test';
	//创建连接
	$conn = mysqli_connect($myhost,$myusername,$mypassword,$mydatabase);
	//设置字符集，防止出现乱码
	mysqli_set_charset($conn,'utf8');
	//检测连接
	if($conn->connect_error) {
		die("fa".$conn->connect_error);
	}
	echo "succ";

	//执行并发送SQL语句，返回一个结果集对象
$sql = mysqli_query($conn,"insert into doctorc value('{$uid}','{$ukangzuanbi}','{$ukangzuanbit}','{$ukangzuankou}','{$ukangzuankout}','{$ukangbaisanxibi}','{$ukangbaisanxibit}','{$ukangbaisanxikou}','{$ukangbaisanxikout}','{$utangpizhibi}','{$utangpizhibit}','{$utangpizhikou}','{$utangpizhikout}','{$utangpizhixi}','{$utangpizhixit}','{$uzhiqiguankou}','{$uzhiqiguankout}','{$uzhiqiguanxi}','{$uzhiqiguanxit}')");




	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
	
?>	 