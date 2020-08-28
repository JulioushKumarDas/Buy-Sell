<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>JAS-TX.com</title>
	<style>
		.was-validated
		{
			margin-left:130px;
			margin-right:130px;
			margin-top:50px;
			border:2px solid navy;
			align:center;
		}
		label
		{
			font-size:20px;
		}
		textarea{border:none;}
		h1{text-align:center;}
		.form-control is-invalid{
			width:200px;
		}
		.mb-3
		{
			margin-left:130px;;
			width:800px;
		}
		.m{
			margin-left:130px;
			width:800px;
		}
		.btn
		{
		margin-left:430px;
		width:150px;
		}
		.b{
			background-color:navy;
			width:150px;
			heigth:40px;
			color:white;
			border-radius:8px;
			}
		.b1{
			margin-top:10px;
                        color:black;

			font-size:20px;
                }
		.custom-file{margin-left:130px;
			color:navy;
			width:800px;
		}
		.form-group{margin-left:130px;
			width:800px;
		}	
		.custom-file-input{color:navy;}
	</style>
  </head>
  <body>
	 <a href="homepageecomm.php" style="margin-left:1200px;margin-top:10px;"><button class="b1"><b>X</b></button></a>
	<form class="was-validated" action="selltablemysql.php" method="post" enctype="multipart/form-data">
	 <h1>Post Your Ad</h1>
	<div class="m">
    <label >Add UserName</label>
    <input type="text" class="form-control " id="validationTextarea" placeholder="Add UserName" name="uname" required/>
    <div class="invalid-feedback">
      Add UserName
    </div>
	</div>
  <div class="mb-3">
    <label for="validationTextarea">Add Title</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Add Title" name="title" required></textarea>
    <div class="invalid-feedback">
      Add Title
    </div>
  </div>
	 <div class="mb-3">
    <label for="validationTextarea">Price of the Product</label>
    <input type="text" class="form-control"  id="validationTextarea" placeholder="Add Price" name="price" required></textarea>
    <div class="invalid-feedback">
      Add Price
    </div>
  </div>
   <div class="mb-3">
    <label for="validationTextarea">Description of your product</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Add Description" name="description" required></textarea>
    <div class="invalid-feedback">
      Add Description
    </div>
  </div>
  <div class="form-group">
    <select class="custom-select" name="category" required>
      <option value="">Choose from category of Product</option>
      <option value="Novel">Novel</option>
      <option value="Syllabus Book">Syllabus Book</option>
      <option value="Other">Other</option>
    </select>
    <div class="invalid-feedback">* required</div>
  </div>
   <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image1" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose product image1 </label>
    <div class="invalid-feedback">* required</div>
  </div></br></br>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image2" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose product image2</label>
    <div class="invalid-feedback">*required</div>
  </div></br></br>
    <div >
	 <button type="submit" class="btn b active">Post Now</button>
    </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
