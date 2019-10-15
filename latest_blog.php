       <h2 id="category" class="text-uppercase">Latest Blogs</h2><hr>
         
      <!-- End category-->

    <div class="container">
       <div class="row"> 
       	<?php
include('Admin/database/connection.php');
$q="select * from blog ORDER BY date DESC limit 3";
$res=mysqli_query($link,$q);
while($row=mysqli_fetch_assoc($res)):
{
    $heading=$row['heading'];
    $image=$row['image'];


}
?>
           <div class="col-md-4">
               <div class="card">
                 <div class="card-body text-center">
                   <img class="card-img-top" src="../project/Admin/<?=$image;?>" alt="Card image cap" height="250px" width="500px">
                     <h5 class="card-title"><?=$heading?></h5>
                   <a href="cat.php?action=all_blog & heading=<?=$heading;?>" class="btn btn-danger m-auto">Read more</a>
                 </div>   
                </div>
            </div>
              <?php endwhile;?>
            </div>

        </div>  
      
   
</div>
    
    
