<?php include('head.php');?>
<?php include('navbar.php');?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
<style>
hr{
 background:white;
}
.contact-form{
 background:rgba(0,0,0,0.6);
 color:white;
 margin-top:10%;
}
body{
 background-image:url(image/family.jpg);
 background-size:cover;
}
</style>
</head>
<body>
	<div class="container contact-form">
	<h1>Contact Form</h1>
	<hr>
	<div class="row">
	   <div class="col-md-6">
	    <p>Find us at</p>
		<p>Email : #qwertyyyyyy</p>
	   </div>
	   <div class="col-md-6">
	    <div class="form-group">
		 <label>Name</label>
		 <input type="text" class="form-control">
		</div>
		<div class="form-group">
		 <label>Email</label>
		 <input type="text" class="form-control">
		</div>
		<div class="form-group">
		 <label>Message</label>
		 <textarea class="form-control" rows="5"></textarea>
		</div>
		<div class="form-group">
		 <button class="btn btn-primary">Send</button>
		</div>
	   </div>
	</div>
	</div>
    <?php include('footer.php');?>
</body>
</html>