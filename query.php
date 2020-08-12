<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uid = $_POST['id'];
	
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
$sql = mysqli_query($conn,"select * from doctor where id = '{$uid}'");

	// $row = mysqli_fetch_row($sql);
	// $aa = mysqli_fetch_all($sql);
	// $ab = mysqli_fetch_array($sql);
	// 定义一个空数组
	$arr = array();
	// 从结果集中取出所有行，并以数组的形式返回，一次返回一条
	while ($row = mysqli_fetch_assoc($sql)) {
		$arr[] = $row;
		// print_r($row["username"]);
		echo $uid;	
	}
	// 如果查询到数据，数组不为空，则输出：登陆成功
	if($arr) {
			echo "查询成功";
		} else {
			echo "查询失败";
		}
	// 把查询到的数据打印出来
	// print_r($arr);
	echo "患者姓名：".$arr[0]["username"]."----联系方式".$arr[0]["tell"]."----联系人姓名".$arr[0]["linkman"]."----联系人电话".$arr[0]["linkmantell"];
?>	 
