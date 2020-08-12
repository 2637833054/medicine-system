<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的数据
	$uid = $_POST['id'];
	$uname = $_POST['username'];
	$usex = $_POST['sex'];
	$uage = $_POST['age'];
	$ubirthday = $_POST['birthday'];
	echo $ubirthday;
	$unational = $_POST['national'];
	$uplace = $_POST['place'];
	$ulongplacea = $_POST['longplacea'];
	$ulongplaceb = $_POST['longplaceb'];
	$uprofessional = $_POST['professional'];
	$utell = $_POST['tell'];
	$ulinkman = $_POST['linkman'];
	$ulinkmantell = $_POST['linkmantell'];
	$umedicalhistorya = $_POST['medicalhistorya'];
	$umedicalhistoryb = $_POST['medicalhistoryb'];
	$uallergya = $_POST['allergya'];
	$uallergyb = $_POST['allergyb'];
	$ufamilyhistory = $_POST['familyhistory'];
	$uheight = $_POST['height'];
	$uweight = $_POST['weight'];
	$uchild = $_POST['child'];
	$ufeeding = $_POST['feeding'];
	$uzaocan = $_POST['zaocan'];
	
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
// $sql = mysqli_query($conn,"insert into doctor value('{$uid}','{$uname}','{$usex}','{$unational}','{$uplace}','{$longplace}','{$uprofessional}','{$utell}','{$ulinkman}','{$ulinkmantell}','{$history}','{$uallergya}','{$uallergyb}','{$ufamilyhistory}','{$uheight}','{$uweight}','{$uchild}','{$ufeeding}','{$uzaocan}','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
$sql = mysqli_query($conn,"insert into doctor value('{$uid}','{$uname}','{$usex}','{$uage}','{$ubirthday}','{$unational}','{$uplace}','{$ulongplacea}','{$ulongplaceb}','{$uprofessional}','{$utell}','{$ulinkman}','{$ulinkmantell}','{$umedicalhistorya}','{$umedicalhistoryb}','{$uallergya}','{$uallergyb}','null','{$ufamilyhistory}','{$uheight}','{$uweight}','{$uchild}','{$ufeeding}','{$uzaocan}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}','{$uname}')");
	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
		
?>	 