<?php include('head.php');?>
<?php include('navbar.php');?>
<html>
    <head>
    <!--<link type="text/css"  rel="stylesheet" href="css/cat_style.css">-->
    <link href="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js">
    <link href="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.js">
     <link type="text/css" rel="stylesheet" href="bootstrap-4.0.0-alpha.6/docs/assets/css/docs.min.css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
     <style>
    .logo{
    width: 100%;
    height: 250px;
    }
    .commentform
    {
             width:50%;
             padding: 10px;
    }
    .text-right
         {
             margin-right: 5
         }
         p{
             margin-top: 30px;
             
         }
         #date{
             margin-right: 20px;
         }
     </style>
    </head>
<body>
    <div class="wrapper">
    <hr>
        <?php
        include('Admin/database/connection.php');
             if(isset($_GET['action']) && $_GET['action']='all_blog'){
                 $heading=$_GET['heading'];
                 $q="select * from blog where heading='$heading'";
                 $res=mysqli_query($link,$q);
                 while($row=mysqli_fetch_assoc($res)):{
                     $heading=$row['heading'];
                     $date=$row['date'];
                     $text=$row['text'];
                     $image=$row['image'];
                     $date=$row['date'];
                 }
             
        
        ?>
        <img src="../project/Admin/<?=$image;?>" width="100%" height="200px"  >
        <div class="container">
            <hr>
            <br>
            <h2><?=$heading;?></h2>
            <p><?=$text;?></p>
        </div>
        <br>
        <p align="right" id="date"> <?=$date;?></p>
        <br>
    <?php endwhile;}?>
    
        
    <div class="container commentform">
        <div class="row">
            <div class="col-md-12">
               <div class="form-group">
               <label for="comment">Comment:</label>
               <textarea class="form-control" rows="8" id="comment"></textarea>
               </div>
            </div>
            <div class="col-md-12 text-right">
                <a href="" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
   <?php include('footer.php');?>