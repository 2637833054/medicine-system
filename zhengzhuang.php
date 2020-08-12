<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	$usneezing = $_POST['sneezing'];
	$urunnynose = $_POST['runnynose'];
	$unasalitching = $_POST['nasalitching'];
	$ustuffynose = $_POST['stuffynose'];
	$ueyeitching = $_POST['eyeitching'];
	$uenvy = $_POST['envy'];
	$utears = $_POST['tears'];
	$udayscore = $_POST['dayscore'];
	$unightscore = $_POST['nightscore'];
	
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
$sql = mysqli_query($conn,"update doctor set sneezing = '{$usneezing}',runnynose = '{$urunnynose}',nasalitching = '{$unasalitching}',stuffynose = '{$ustuffynose}',eyeitching = '{$ueyeitching}',envy = '{$uenvy}',tears = '{$utears}',dayscore = '{$udayscore}',nightscore = '{$unightscore}' where id = '{$uid}'");

	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
	
?>	 