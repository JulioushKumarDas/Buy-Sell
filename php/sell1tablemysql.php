<?php
	session_start();
	header('location:thanku.html');
	$con =mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	error_reporting(0);
	$name=$_POST['uname'];
	$title=$_POST['title'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$img1=$_FILES['image1']['name'];
	$img2=$_FILES['image2']['name'];
	$n="select username from usertable where username='$name'";
	$result=mysqli_query($con,$n);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$reg = "update selltable set price='$price',description='$description',category='$category',image1='$img1',image2='$img2' where titlename='$title'";
		mysqli_query($con,$reg);
		echo "posted successfully";
	}
	else{
		echo "Can't access this user";
		}
?>
