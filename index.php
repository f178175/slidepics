<!DOCTYPE html>
<html>
<head>
	<title>SlideShare Pics Downloader</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
  <!-- Brand/logo -->
   <a class="navbar-brand" href="#">
    <img src="https://smartblogger.com/wp-content/uploads/2016/03/slideshare-1.png" alt="Logo" style="width:40px;border-radius: 100%">
  </a>
  
  <!-- Links -->
</nav>
	<div class="container mt-5">
		<div class="card">
		  <div class="card-header bg-success text-white">Enter Detailes</div>
		  <div class="card-body">
		  	<form method="post" action="ajax.php">
			  	<div class="form-group">
			  		<input required="" type="text" autofocus="" class="form-control" placeholder="Place SlideShare URL..." name="link">
			  	</div>
			  	<div class="form-group">
			  		<input required="" type="text" class="form-control" placeholder="Enter Total Slides..." name="slide">
			  	</div>
			  	<div class="form-group">
			  		<button class="btn btn-success btn-block">
			  			Download
			  		</button>
			  	</div>
			</form>
		  </div>
		  <div style="text-align: right;" class="card-footer">Designed & Developed By Abdullah Arif</div>
		</div>
	</div>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>