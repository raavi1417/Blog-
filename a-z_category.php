<?php include('head.php');?>
<?php include('navbar.php');?>
<html>
    <head>
    <link type="text/css"  rel="stylesheet" href="css/style.css">
    <link type="text/css"  rel="stylesheet" href="css/a-z.css">
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js">
    <!--<link href="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.js">-->

    <link type="text/css" rel="stylesheet" href="bootstrap-4.0.0-alpha.6/docs/assets/css/docs.min.css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
	<link type="text/css" rel="stylesheet"  href="bootstrap-social-gh-pages/bootstrap-social.css">
	<link href="bootstrap-social-gh-pages/assets/js/jquery.js">    
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css">
  <!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
        
	<style>
	.container
	{
	 margin-top:10%;
	}
        .card{
            margin-top: 30px;
        }
	</style>
    </head>
    <body>
    <div class="container">
        <h2>Know A Relation</h2>
		<hr>
		 <div class="row"> 
          
			<?php 
             include('Admin/database/connection.php');
             $q="select * from category";
             $res=mysqli_query($link,$q);
             if(mysqli_num_rows($res)){
                 while($row=mysqli_fetch_assoc($res)):{
                 $catname=$row['catname'];
                $image=$row['image'];
                     $catid=$row['catid'];
                     $id=$row['id'];
                 }
             
             ?>
			<div class="col-md-3">
               <div class="card">
               <img class="card-img-top" src="../project/Admin/<?=$image;?>" alt="Card image cap" height="30%" width="100%">
			   <div class="card-body">
               <h5 class="card-title"><a href="blog.php?action=all_data & catname=<?=$row['catname'];?>"><?=$catname;?></a></h5>   
			   </div>   
			   </div>
			</div>
             <?php endwhile;}?>
            
	    </div> 
        </div>  
    </body>
</html>
<?php include('footer.php');?>