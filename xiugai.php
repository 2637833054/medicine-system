<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$em = $_POST['email'];
	//准备链接信息
	$myhost = 'localhost';
	$myusername = 'phpmyadmin';
	$mypassword = '';
	$mydatabase = 'test';
	//创建连接
	$conn = mysqli_connect($myhost,$myusername,$mypassword,$mydatabase);
	//检测连接
	if($conn->connect_error) {
		die("fa".$conn->connect_error);
	}
	echo "succ";

	//执行并发送SQL语句，返回一个结果集对象
$sql = mysqli_query($conn,"insert into user value(0,'{$uname}','{$pword}','{$em}')");
	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "注册失败";
		} else {
			echo "注册成功";
		}
	
?>	 
<?php header("Refresh:4;url=index.html")?>
	

