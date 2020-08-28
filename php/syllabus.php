<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>JAS-TX/syllabusbook.com</title>
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
			                        width:140px;
                }
                .carousel-item
                {
                        height:400px;
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
		.new1
		{
			height:100px;
                	text-align:center;
                	background-color:navy;
                	color:white;
		}
		.new1:hover
		{
			background-color:red;
		}
        </style>

  </head>
  <body>
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
                <a class="dropdown-item " href="novel.php">Novel</a>
                <a class="dropdown-item" href="#">Syllabus Books</a>
                <a class="dropdown-item" href="other.php">Others</a>
              </div>
            </li>
          </ul>
          <form class="form-inline " action="/action_page.php">
            <input class="form-control mr-sm-2 " type="text" placeholder="Search">
	    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
	<div class="new1">
                <h1>Syllabus book</h1>
        </div></br></br>

<div class="card-deck">
	<div class="card" style="width: 18rem;">
		<img src="hcverma.jpg" class="card-img-top img1" alt="...">
		<div class="card-body">
			<h5 class="card-title">Rs 150</h5>
			<p class="card-text">Concept of Physics by Hcverma part-1</p>
			<a href="hcverma.php" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Buy Now</a>
  		</div>
	</div>
	<div class="card" style="width: 18rem;">
		<img src="rsagarwal.jpg" class="card-img-top img1" alt="...">
		<div class="card-body">
			<h5 class="card-title">Rs 230</h5>
			<p class="card-text">Class 12th Mathematics Book by RS Agarwal.</p>
			<a href="rsagarwal.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Buy Now</a>
  		</div>
	</div>
	<div class="card" style="width: 18rem;">
		<img src="s2.jpeg" class="card-img-top img1" alt="...">
		<div class="card-body">
			<h5 class="card-title">Rs 140</h5>
			<p class="card-text">Philosophy Text book , Class XI.</p>
			<a href="s2.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Buy Now</a>
  		</div>
	</div>
	<div class="card" style="width: 18rem;">
    		<img src="s3.jpeg" class="card-img-top img1" alt="...">
    		<div class="card-body">
      			<h5 class="card-title">Rs 280</h5>
      			<p class="card-text">Physics class=IX text book by HC Verma.</p>
      			<a href="s3.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Buy Now</a>
    		</div>
  	</div>
</div>
<br>
<br>
<div class="jumbotron">
  <h1 class="display-4">About Us</h1>
  <p class="lead">Please, Visit Again</p>
  <hr class="my-4">
  <p>For Help Go to Learn More</p>
  <a class="btn btn-primary btn-lg" href="learn.php" role="button">Learn more</a>
</div>
<!-- Modal -->
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
        <a class="btn btn-primary" href="n1.php" role="button">Yes</a>
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
        <a class="btn btn-primary" href="n2.php" role="button">Yes</a>
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
        <a class="btn btn-primary" href="n3.php" role="button">Yes</a>
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
       <a class="btn btn-primary" href="fiction2.php" role="button">Yes</a>
      </div>
    </div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
