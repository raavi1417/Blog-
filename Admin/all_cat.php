<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
 <div id="page-wrapper">
     <?php
include('database/connection.php');
  if(isset($_GET['action']) && $_GET['action']='delete_cat')

	  	    {

	  	    @$catid=$_GET['catid'];
	  	    	$q=mysqli_query($link,"DELETE FROM category WHERE catid='$catid'");
      
	  	    }
	  	    	?>


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">All Category</h1>
                  <div class="container">
 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Category Id</th>
        <th>Category Name</th>
           <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
			//session_start();
           include('database/connection.php');
		   
		   $q=mysqli_query($link,"select * from category");
		   if(mysqli_num_rows($q)>0)
		   {
		  while($row=mysqli_fetch_assoc($q)):
		  {
	     
            $catid=$row['catid'];
            $catname=$row['catname'];
             $image=$row['image'];
        
        }
                      
                      ?>
      <tr>
        <td><?=$catid?></td>
        <td><?=$catname;?></td>
          <td><img src="<?=$image;?>" width="40px"></td>
      <td>
          
			<a href="edit_cat.php?action=edit_cat & catid=<?=$catid;?> "class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			<a href="all_cat.php?action=delete_cat & catid=<?=$catid;
?>" class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-trash"></span> Delete</a>
		</td>
      </tr>
        <?php endwhile;}?>
     
    </tbody>
  </table>
</div> 
        </div>
    </div>
<?php include('footer.php');?>