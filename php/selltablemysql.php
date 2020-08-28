<?php
	session_start();
	header('location:thanku.html');
	$con =mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	$name=$_POST['uname'];
	$title=$_POST['title'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$img1=$_FILES['image1']['name'];
	$img2=$_FILES['image2']['name'];
	$img1temp=$_FILES['image1']['temp_name'];
	$img2temp=$_FILES['image2']['temp_name'];
	$folder="/opt/lampp/htdocs/ecommsite/".$img1;
	$folder1="/opt/lampp/htdocs/ecommsite/".$img2;
	move_uploaded_file($img1temp,$folder);
	move_uploaded_file($img2temp,$folder1);
	$n="select username from usertable where username='$name'";
	$result=mysqli_query($con,$n);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$reg = "insert into selltable (username,titlename,price,description,category,image1,image2) values('$name','$title','$price','$description','$category','$img1','$img2')";
		mysqli_query($con,$reg);
		echo "posted successfully";
	}
	else{
		echo "Can't access this user";
		}
?>
