<!DOCTYPE html>
<html>
<head>
	<title> About US/HelpDesk</title>
	<style>
		#bg
		{
			background-image:url("h2.jpg");
			background-repeat:no-repeat;
			bakground-position:center;
			background-size:1400px 700px;
			background-blend-mode:lighten;
			filter:alpha(opacity=50);
		}
		.bg1{
			padding:16px;
			}
		 form{
                        background-color:rgba(0,0,0,0.35);
                        color:white;
                        position:fixed;
                        border: 1px solid #505050;
                        width:900px;
                        height:400px;
                        top:15%;
                        left:15%;
                        margin-top: 20px;
			}
		p{
			font-size:13px;
		}
		input[type=text]
		{
			width:50%;
			height:27px;
		}
		.t{
			text-align:center;
			}
		button{
			background-color:navy;
			border-radius:8px ;
			color:white;
			height:27px;
			}
		a{
			color:white;
		}
	</style>
	<script>
		function disp()
		{
			alert("Your Issue has been sent!! Thanku for your patience");
		}
	</script>
</head>
<body id="bg">
	<div class="bg1">
	<h1 style="left:25%;position:absolute;color:navy;"> Welcome to HelpDesk of JAS-TX</h1>
	<form class="t">
		<div class="form">
			<h3>About Us</h3>
		</div>
		<div class ="form">
			<p >JAS-TX is an E-commerce website, that provides users 
			a plateform to buy and sell their used goods.</p>
			<h5 > We Empower People and Create Economic Opportunity</h5>
			<p>JAS-TX is a global commerce leader that connects buyers and sellers . We exist to enable economic opportunity for individuals, entrepreneurs, businesses and organizations.</p>
		</div>
		<div class="form ">
			<h3>Hi ! How Can I Help You?</h3>
			<input type="text" placeholder="type your problem we will let you know soon"/>
			<button onclick="disp()">Send Issue</button>
		</div></br></br>
		<div class="form">
			<h4>THANK YOU</h4>
			<center><button ><a href="homepageecomm1.php"> back to home</a></button></center>
		</div>
	</form>
	</div>
</body>
</html>
