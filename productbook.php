<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="Bookstore.css" rel="stylesheet" type="text/css">
<link href="firstpagecss.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<title>SwapYourBooks</title>
</head>

<body>
<div class="container-fluid containpic mx-0 px-0">
			<div class="navbar mx-0">
		<div class="logo logo1">Swap<span style="font-family: Baskerville, Palatino Linotype, Palatino, Century Schoolbook L, Times New Roman, serif; font-style: italic; color: #ffc000;">Your</span>Books</div>
			
			
			<div class="navtab">
				<div class="col-10 d-flex justify-content-end align-items-center pt-2 ">
          	
					<a class="btn btn-lg btn-outline-secondary ml-4 clickbg" href="Bookstore.php">BookStore</a>
					<a class="btn btn-lg btn-outline-secondary ml-2 clickbg" href="#">About Us</a>
					<a class="btn btn-lg btn-outline-secondary ml-2 clickbg" href="#">Contact Us</a>
          		</div>
			</div>
		</div>
			<?php while($r = mysqli_fetch_assoc($res)){ ?>
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>">
	      <div class="caption">
	        <h3><?php echo $r['title'] ?></h3>
	        <p><?php echo $r['description'] ?></p>
	        <p><a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
<?php } ?>
				
</div>

</body>
</html>