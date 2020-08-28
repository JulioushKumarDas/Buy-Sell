<?php
	session_start();
	$con= mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	$name=$_POST['usrname'];
	$pswd=$_POST['pswd'];
	$_SESSION['username']=$name;
	$_SESSION['name']=$name;
	$s="select * from usertable where username='$name' and password='$pswd'" ;
	$result= mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
//	echo "num is $num";
	if($num == 1)
	{
		header('location:homepageecomm.php');
	}
	else
	{
		//header('location:logintry.php');
		echo("<script type='text/javascript'>alert('Username or password incorrect & if you are a new user please SignUp first'); window.location='logintry.php';</script> ");


	}

?>
