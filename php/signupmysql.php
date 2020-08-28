<?php
	session_start();
	header('location:logintry.php');
	$con= mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	$name=$_POST['usrname'];
	$pswd=$_POST['paswrd'];

	$s="select * from usertable where username='$name'" ;
	$result= mysqli_query($con,$s);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo"Username Already Taken";
	}
	else
	{
$reg=" insert into usertable(username,password) values('$name','$pswd')";
		mysqli_query($con,$reg);
		echo "registration successful";
	}

?>
