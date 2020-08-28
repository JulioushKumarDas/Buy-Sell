<?php
	session_start();
	header('location:thanku.html');
	$con =mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	error_reporting(0);
	$name=$_GET['uname'];
	$title=$_GET['title'];
	$price=$_GET['price'];
	$description=$_GET['description'];
	$category=$_GET['category'];
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
		$reg ="update selltable set price='$price',description='$description',category='$category',image1='$img1',image2='$img2' where selltable.titlename='$title'";
		mysqli_query($con,$reg);
		echo "posted successfully";
	}
	else{
		echo "Can't access this user";
		}
?>
