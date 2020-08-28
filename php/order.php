<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Order</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
.button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
   padding: 14px 20px;
  background-color: red;
  float:left;
  width:50%;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
 padding: 14px 20px;
  float: left;
  width: 50%;
  background-color:green;
}

/* Add padding to container elements */
.container {
  padding: 0px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: white;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: auto auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 2px solid navy;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: black;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.b{
	color:black;
	margin-top:0px;
	align:center;
	font-size:20px;
	margin-left:1200px;
	}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h3>You are only one step far from your order. <a href="homepageecomm.php"><button class="b"><b>X</b></button></a></h3>
  <form class="modal-content" action="ordertablemysql.php" method="post">
    <div class="container">
      <center><h1>Buy Now</h1></center>
      <p>Please fill in this form to order your product</p>
      <hr>
      <label for="username"><b>User Name</b></label>
      <input type="text" placeholder="Enter Username" name="usrname" value="<?php echo($_SESSION['name']);?>"required>
	<label for="username"><b>Title</b></label>
      <input type="text" placeholder="Enter Title of the book" name="title" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>



      <label for="contact no"><b>Contact No</b></label>
      <input type="text" placeholder="Enter Contact number" name="number" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>To order your product you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Order Now</button>
      </div>
    </div>
  </form>

</body>
</html>

