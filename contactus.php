<?php include('head.php');?>

<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
	$subject=$_POST['subject'];
	$to='livearelation@gmail.com';
	$header="from:$name<$email>";
	$message="name:$name\n\n Email:$email \n\nSubject:$subject";
	if(mail($to,$subject,$message,$header))
	{
		?>
		<script>
			alert('Successfully sent')
		</script>
		<?php
	}
	else
	{
		?><script>
		alert('Send Again')
	</script>
		<?php
			}
}
?>

<body>
    <div class="wrapper">
      <div class="head">
          <h2 style="color: white"><a href="index.php">Contact Us</a></h2>
       	 </div>
    
    </div>
     <div class="container_form">
  <form  method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="Your Email.."required>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
      <br><br clear="all">
    <div class="row">
      <input type="submit" class="btn btn-success" name="submit">
    </div>
  </form>
</div>

   
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js"></script>
       
    
    </body>

</html>