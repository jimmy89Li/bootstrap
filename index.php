<!Doctype HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap v1</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
	<link href="css/style.css" rel="stylesheet">	
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">
				<img alt="Brand" src="img/logo1.png"	class="logo">
			  </a>
			</div>
			
			<ul class="nav navbar-nav">
				<li><a href="blog.php">Advertising</a></li>
				<li><a href="#">Commerce</a></li>
				<li><a href="#">Mobile</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">More1</a></li>
					<li><a href="#">More2</a></li>
					<li><a href="#">More3</a></li>
				  </ul>
				</li>
			</ul>
			
			<form class="navbar-form navbar-right" role="search">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<form action="login_code.php" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="email" name="email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="password" name="password">
					  </div>
					  <input class="btn btn-default" type="submit" value="Submit">
					</form>
					
				  </ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div id="slider">
		
		</div>
		<div id="cat1">
			<h2>Advertising</h2>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/work.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
		</div>
		<div id="cat2">
			<h2>Commerce</h2>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/blog.gif" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<hr class="black">
		</div>
		
		<div id="cat3">
			<h2>Mobile</h2>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<hr class="black">
		</div>
		<div id="cat4">
			<h2>More</h2>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
			<a class="col-md-3 col-sm-6" href="#"><p>article</p><img class="img-responsive index" src="img/linkedin.jpg" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum earum ipsa esse alias labore saepe id sint reprehenderit necessitatibus asperiores.</p></a>
		</div>
	</div>
		<footer>
			<p class="text-center">Marketguide</p>
		</footer>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>