<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>JAS-TX</title>
	<style>
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
			width:120px;
		}
		.carousel-item
		{
			height:550px;
		}
		.img1
		{
			height:350px;
			width:295px;
		}
		.img1:hover
		{
			height:430px;
			width:330px;
		}
		.b{
			align:right;
			margin-left:400px;
		}
	</style>
	<script>
		function check1()
		{
			alert("To access the site and to get benefit of it, please Login first");
		}
	</script>
  </head>
  <body>
	
<!--	<div class="jumbotron">
  		<h1>Welcome To JAS-TX</h1>
  	</div> -->
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
	<nav class="navbar navbar-expand-sm bg-light sticky-top">
	  <a class="navbar-brand" href="#">
    		<img src="logo2.png" alt="Logo" style="width:40px;height:40px;">
  	  </a>
	  <!-- Links -->
	  <ul class="navbar-nav ">
	    <li class="nav-item ">
	      <a class="nav-link " href="#">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link " href="#" onclick="check1()">Sell</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link " href="logintry.php">SignUp/Login</a>
	    </li>
		<li class="nav-item dropdown">
      		<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category</a>
	      <div class="dropdown-menu " >
	        <a class="dropdown-item " href="#" onclick="check1()">Novel</a>
	        <a class="dropdown-item" href="#" onclick="check1()">Syllabus Books</a>
	        <a class="dropdown-item" href="#" onclick="check1()">Others</a>
	      </div>
	    </li>
	  </ul>
		<form class="form-inline " action="/action_page.php">
            <input class="form-control mr-sm-2 " type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
	</nav>
	 <div class="jumbotron ">
                <h1>Welcome To JAS-TX</h1>
         </div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bookdi13.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bookdi1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bookdi8.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="card-deck">
	<div class="card" style="width: 18rem;">
  <img src="asnovdi.jpg" class="card-img-top img1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rs 200</h5>
    <p class="card-text">As The Tide Comes In.</p>
    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Buy Now</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="insidedi.jpg" class="card-img-top img1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rs 200</h5>
    <p class="card-text">Inside Out & Back Again.</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Buy Now</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="magicdi.jpeg" class="card-img-top img1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rs 350</h5>
    <p class="card-text">Danielle Steel (Magic)</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Buy Now</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="breaking.jpg" class="card-img-top img1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rs 250</h5>
      <p class="card-text">Breaking Bad</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Buy Now</a>
    </div>
  </div>
</div>
<br>
<br>
<div class="card-deck">
  <div class="card" style="width:18rem;">
    <img src="hcverma.jpg" class="card-img-top img1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rs 150</h5>
      <p class="card-text">Concept of Physics by Hcverma part-1</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">Buy Now</a>
    </div>
  </div>
  <div class="card" style="width:18rem;">
    <img src="oneig-di.jpeg" class="card-img-top img1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rs 230</h5>
      <p class="card-text">One Indian Girl.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">Buy Now</a>
    </div>
  </div>
<div class="card" style="width: 18rem;">
  <img src="rs1.jpg" class="card-img-top img1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rs 140</h5>
    <p class="card-text">I.C.S.E. Foundation Mathematics, Class IX.</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">Buy Now</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="geo1.jpg" class="card-img-top img1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rs 280</h5>
    <p class="card-text">I.C.S.E. Geography class-IX.</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">Buy Now</a>
  </div>
</div>
</div>
<br>
<div class="jumbotron">
  <h1 class="display-4">About Us</h1>
  <p class="lead">Please, Visit Again</p>
  <hr class="my-4">
  <p>For Help Go to Learn More</p>
  <a class="btn btn-primary btn-lg" href="learntry.php" role="button">Learn more</a>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	<p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
	<a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check1()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check()">Yes</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Do you really want to continue? press yes to continue</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <!--<button type="button" class="btn btn-primary" onclick="window.>Buy Now</button>-->
        <a class="btn btn-primary" href="#" role="button" onclick="check()">Yes</a>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
