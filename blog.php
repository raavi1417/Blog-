<?php include('head.php');?>
<?php include('navbar.php');?>
    <style>
        .card{
            margin-top:30px;
        }
    </style>
<body>
   
  <div class="container">
    <div class="row">
         <?php
    include('Admin/database/connection.php');
      if(isset($_GET['action']) && $_GET['action']='all_data'){
        $catname=$_GET['catname'];
        $q="select * from blog where catname='$catname'";
         // echo $q;
        $res=mysqli_query($link,$q);
        //  echo $res;
        
            while($row=mysqli_fetch_assoc($res)):{
              $heading=$row['heading'];
                $image=$row['image'];
                $blogid=$row['blogid'];
                            
        }
    
    
    ?>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
    <div class="card">
    <div class="card-body text-center">
     <img class="card-img-top" src="../project/Admin/<?=$image;?>" alt="Card image" style="width:100%">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text"><?=$heading;?></p>
      <a href="cat.php?action=all_blog & heading=<?=$row['heading'];?>" class="btn btn-primary m-auto">Read More</a>
        
    </div>
    </div>
      
    </div>
        <?php endwhile;}?>
      </div>
</div>
<?php include('footer.php');?>