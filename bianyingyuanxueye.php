<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	$uIgE = $_POST['IgE'];
	$upimao = $_POST['pimao'];
	$ujianguo = $_POST['jianguo'];
	$udanbai = $_POST['danbai'];
	$ucengman = $_POST['cengman'];
	$uzhenjun = $_POST['zhenjun'];
	$ushufen = $_POST['shufen'];
	$ucaofen = $_POST['caofen'];
	
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
$sql = mysqli_query($conn,"update doctorb set IgE = '{$uIgE}',pimao = '{$upimao}',jianguo = '{$ujianguo}',danbai = '{$udanbai}',cengman = '{$ucengman}',zhenjun = '{$uzhenjun}',shufen = '{$ushufen}',caofen = '{$ucaofen}' where id = '{$uid}'");

	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
	
?>	 