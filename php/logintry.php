<!DOCTYPE html>
<html>
	<title>Login</title>
	<head>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Raleway);
			h2{
			background-color: navy;
			padding: 25px 35px;
			margin: -10px -50px;
			text-align:center;
			border-radius: 10px 10px 0 0;
			}
			hr{
			margin: 10px -50px;
			border: 0;
			border-top: 1px solid #ccc;
			margin-bottom: 40px;
			}
			div.container{
			left:34%;
			width: 430px;
			height: 300px;
			margin:10px auto;
			font-family: 'Raleway', sans-serif;
			position:absolute;
			}
			div.main{
				background-color:light blue;
			width: 300px;
			padding: 10px 50px 25px;
			border: 2px solid navy;
			border-radius: 10px;
			font-family: raleway;
			margin-top:10px;
			}
			input[type=text],input[type=password]{
			width: 200px;
			height: 25px;
			padding: 14px;
			margin-bottom: 25px;
			margin-top: 5px;
			border: 2px solid navy;
			outline:none;
			color: #4f4f4f;
			font-size: 16px;
			border-radius: 24px;
			transition:0.25s;
			display:block;
			margin:10px auto;
			
			}
			
			label{
			color:navy;
			text-shadow: 0 1px 0 #fff;
			font-size: 14px;
			font-weight: bold;
			}
			center{
			font-size:32px;
			}
			.note{
			color:red;
			}
			.valid{
			color:navy;
			}
			.back{
			text-decoration: none;
			border: 1px solid rgb(0, 143, 255);
			background-color: rgb(0, 214, 255);
			padding: 3px 20px;
			border-radius: 2px;
			color: black;
			}
			.btn1{
			font-size: 16px;
			background-color: navy;
			border: 1px solid blue;
			color: #4E4D4B;
			font-weight: bold;
			cursor: pointer;
			width: 230px;
			border-radius: 24px;
			padding: 15px;
			outline:none;
			transition:0.25s;
			margin:10px auto;
			}
			.btn1:hover
			{
			background-color: red;
			width:260px;
			}
			.btn1:focus{width:280px;}
			body{background:white;}
			label{font-family:sans-serif;weight:250;color:black;}
			</style>
</head>
<body>
	<div class="container">
	<div class="main">
		<h2>Login</h2>
		<center><img src="logo2.png" height=100px width=40% style=" border-radius:50%;"></center>
		<form action="validation.php" method="post">
			<label>USER NAME :</label>
			<input type="text" name="usrname" id="username" placeholder="Username" required/>
			<label style="color:black;">PASSWORD :</label>
			<input type="password" name="pswd" id="password" placeholder="Password" required/></br>
			<button class="btn1">Login </button>
			</br>
		</form>
		<a href="signup.php"><button class="btn1" >sign up</button></a>
		<div id="id01" class="modal">
		</br></br>
		<span><b class="note">Note : </b>Client side validation demo<br/></span>
		</div>
	</div>
	</div>
</body>
</html>
