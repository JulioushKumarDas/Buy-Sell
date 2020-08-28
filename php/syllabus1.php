<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Syllabus Book</title>
    <style>
	.new1{height:100px;
		text-align:center;
		background-color:navy;
		color:white;}
	.carousel-item
                {
                        height:300px;
			width:200px;
                }
	    .nav-link
                {
                        color :navy;
                }
                .btn
                {
                        background-color:navy;
                }
                .btn:hover
                {
                        background-color:red;
                        width:140px;
                }
		.jumbotron
                {
                        background-color:navy;
                        text-align:center;
                        color:white;
                }
                .jumbotron:hover
                {
                        background-color:red;
                }
		.card{margin-left:50px;border:1px solid navy;}
		h2{margin-left:50px;}
		.d-block{height:300px;}
		.img1{height:250px;}
    </style>
  </head>
  <body>
   <!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-sm bg-light sticky-top">
          <a class="navbar-brand" href="#">
                <img src="logo2.png" alt="Logo" style="width:40px;height:40px;">
          </a>
          <!-- Links -->
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link " href="homepageecomm.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="sell.php">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="logintry.php">SignUp/Login</a>
            </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category</a>
              <div class="dropdown-menu">
                <a class="dropdown-item " href="noveltry1.php">Novel</a>
                <a class="dropdown-item" href="#">Syllabus Books</a>
                <a class="dropdown-item" href="other1.php">Others</a>
              </div>
            </li>
          </ul>
          <form class="form-inline " action="/action_page.php">
            <input class="form-control mr-sm-2 " type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
	<div class="new1">
                <h1>Syllabus Book</h1>
        </div></br></br>
	<!--<div class="card-deck">-->
	<?php
	$con=mysqli_connect('localhost','root',);
	mysqli_select_db($con,'userregistration');
	$q="select titlename,description,category,image1,price,image2 from selltable where category='Syllabus Book'";
	$result=$con->query($q);
	$n=mysqli_num_rows($result);
	if($n>0)
	{
		while($row=$result->fetch_assoc())
		{
			$i=$row['image1'];
			$i1=$row['image2'];
  			echo("<div class='card mb-3' style='max-width: 540px;'><div class='row no-gutters'><div class='col-md-4'><div id='carouselExampleControls' class='carousel slide' data-ride='carousel'><div class='carousel-inner'><div class='carousel-item active'>");?>
			<img class='d-block w-100' src="<?php echo ($i);?>"<?php echo("alt='...'></div><div class='carousel-item'>");?>
			<img class='d-block w-100' src= "<?php echo ($i1);?>"alt='...'></div><?php echo("<div class='carousel-item'>");?>
			<img class='d-block w-100' src="<?php echo ($i);?>"<?php echo("alt='...'></div></div></div><a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'><span class='carousel-control-prev-icon' aria-hidden='true'></span><span class='sr-only'>Previous</span></a><a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'><span class='carousel-control-next-icon' aria-hidden='true'></span><span class='sr-only'>Next</span></a></div><div class='col-md-8'><div class='card-body'><h5 class='card-title'>".$row['titlename']."</h5><p class='card-text'>"."Category:- ".$row['category']."</br>"."Description:- ".$row['description']."</br></br></br>"."Price:- ".$row['price']."</p><p class='card-text'><small class='text-muted'> </small></p></div></div></div><ul class='list-group list-group-flush'><li class='list-group-item'><a href='order.php' class='btn btn-primary'>Buy Now</a></li></ul></div>");

		}
	}
	else
	{
		echo ("<center><h1>Oops! Not a Single Item In This List..</h1></center>");
	}
?>
<!--</div>-->
</br>
<div class="jumbotron">
  <h1 class="display-4">About Us</h1>
  <p class="lead">Please, Visit Again</p>
  <hr class="my-4">
  <p>For Help Go to Learn More</p>
  <a class="btn btn-primary btn-lg" href="learn.php" role="button">Learn more</a>
</div>
    
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
