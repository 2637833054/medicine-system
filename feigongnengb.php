<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	$uNO = $_POST['NOb'];
	$ujunzhi = $_POST['junzhib'];
	$usulv = $_POST['sulvb'];
	$uhuxi = $_POST['huxib'];
	$uqidao = $_POST['qidaob'];
	$uzhongxin = $_POST['zhongxinb'];
	$uzhouwei = $_POST['zhouweib'];
	$uyaoqianFEV = $_POST['yaoqianFEVb'];
	$uyaohouFEV = $_POST['yaohouFEVb'];
	$uyaoqianFVC = $_POST['yaoqianFVCb'];
	$yaohouFVC = $_POST['yaohouFVCb'];
	
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
$sql = mysqli_query($conn,"update doctor set NOb = '{$uNO}',junzhib = '{$ujunzhi}',sulvb = '{$usulv}',huxib = '{$uhuxi}',qidaob = '{$uqidao}',zhongxinb = '{$uzhongxin}',zhouweib = '{$uzhouwei}',yaoqianFEVb = '{$uyaoqianFEV}',yaohouFEVb = '{$uyaohouFEV}',yaoqianFVCb = '{$uyaoqianFVC}',yaohouFVCb = '{$yaohouFVC}' where id = '{$uid}'");

	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
	
?>	 