<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的数据
	$uid = $_POST['id'];
	$uaa = $_POST['aa'];
	$uab = $_POST['ab'];
	$uba = $_POST['ba'];
	$ubb = $_POST['bb'];
	$uca = $_POST['ca'];
	$ucb = $_POST['cb'];
	$uda = $_POST['da'];
	$udb = $_POST['db'];
	$uea = $_POST['ea'];
	$ueb = $_POST['eb'];
	$ufa = $_POST['fa'];
	$ufb = $_POST['fb'];
	$uga = $_POST['ga'];
	$ugb = $_POST['gb'];
	$uha = $_POST['ha'];
	$uhb = $_POST['hb'];
	$uia = $_POST['ia'];
	$uib = $_POST['ib'];
	$uja = $_POST['ja'];
	$ujb = $_POST['jb'];
	$uka = $_POST['ka'];
	$ukb = $_POST['kb'];
	$ula = $_POST['la'];
	$ulb = $_POST['lb'];
	$uma = $_POST['ma'];
	$umb = $_POST['mb'];
	$una = $_POST['na'];
	$unb = $_POST['nb'];
	$uoa = $_POST['oa'];
	$uob = $_POST['ob'];
	$upa = $_POST['pa'];
	$upb = $_POST['pb'];
	$uqa = $_POST['qa'];
	$uqb = $_POST['qb'];
	$ura = $_POST['ra'];
	$urb = $_POST['rb'];
	$usa = $_POST['sa'];
	$usb = $_POST['sb'];
	$uta = $_POST['ta'];
	$utb = $_POST['tb'];
	$uua = $_POST['ua'];
	$uub = $_POST['ub'];
	$uva = $_POST['va'];
	$uvb = $_POST['vb'];
	$uwa = $_POST['wa'];
	$uwb = $_POST['wb'];
	$uxa = $_POST['xa'];
	$uxb = $_POST['xb'];
	$uya = $_POST['ya'];
	$uyb = $_POST['yb'];
	$uza = $_POST['za'];
	$uzb = $_POST['zb'];
	$ulia = $_POST['lia'];
	$ulib = $_POST['lib'];
	$uwua = $_POST['wua'];
	$uwub = $_POST['wub'];
	$ulva = $_POST['lva'];
	$ulvb = $_POST['lvb'];
	$uxiaa = $_POST['xiaa'];
	$uxiab = $_POST['xiab'];
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
$sql = mysqli_query($conn,"insert into doctorb value('{$uid}','{$uaa}','{$uab}','{$uba}','{$ubb}','{$uca}','{$ucb}','{$uda}','{$udb}','{$uea}','{$ueb}','{$ufa}','{$ufb}','{$uga}','{$ugb}','{$uha}','{$uhb}','{$uia}','{$uib}','{$uja}','{$ujb}','{$uka}','{$ukb}','{$ula}','{$ulb}','{$uma}','{$umb}','{$una}','{$unb}','{$uoa}','{$uob}','{$upa}','{$upb}','{$uqa}','{$uqb}','{$ura}','{$urb}','{$usa}','{$usb}','{$uta}','{$utb}','{$uua}','{$uub}','{$uva}','{$uvb}','{$uwa}','{$uwb}','{$uxa}','{$uxb}','{$uya}','{$uyb}','{$uza}','{$uzb}','{$ulia}','{$ulib}','{$uwua}','{$uwub}','{$ulva}','{$ulvb}','{$uxiaa}','{$uxiab}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}','{$uid}')");
	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "提交失败";
		} else {
			echo "提交成功";
		}
		
?>	 