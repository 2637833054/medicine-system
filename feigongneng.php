<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	$uNO = $_POST['NO'];
	$ujunzhi = $_POST['junzhi'];
	$usulv = $_POST['sulv'];
	$uhuxi = $_POST['huxi'];
	$uqidao = $_POST['qidao'];
	$uzhongxin = $_POST['zhongxin'];
	$uzhouwei = $_POST['zhouwei'];
	$uyaoqianFEV = $_POST['yaoqianFEV'];
	$uyaohouFEV = $_POST['yaohouFEV'];
	$uyaoqianFVC = $_POST['yaoqianFVC'];
	$yaohouFVC = $_POST['yaohouFVC'];
	
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
$sql = mysqli_query($conn,"update doctor set NO = '{$uNO}',junzhi = '{$ujunzhi}',sulv = '{$usulv}',huxi = '{$uhuxi}',qidao = '{$uqidao}',zhongxin = '{$uzhongxin}',zhouwei = '{$uzhouwei}',yaoqianFEV = '{$uyaoqianFEV}',yaohouFEV = '{$uyaohouFEV}',yaoqianFVC = '{$uyaoqianFVC}',yaohouFVC = '{$yaohouFVC}' where id = '{$uid}'");

	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
	
?>	 