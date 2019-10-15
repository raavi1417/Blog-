<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
<?php
include('database/connection.php');
  if(isset($_GET['action']) && $_GET['action']='delete_blog')

	  	    {

	  	      @$blogid=$_GET['blogid'];
	  	    	$q=mysqli_query($link,"DELETE FROM blog WHERE blogid='$blogid'");
      
	  	    }
	  	    	?>

 <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">All Category</h1>
                  <div class="container">
 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Blog Category</th>
        <th>Blog Id</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        include('database/connection.php');
        $res=mysqli_query($link,"select * from blog");
        if(mysqli_num_rows($res)){
            while($row=mysqli_fetch_assoc($res)):{
                $_SESSION['catname']=$row['catname'];
                $blogid=$row['blogid'];
                $date=$row['date'];
                $heading=$row['heading'];
                
            }
        
        ?>
      <tr>
          <td><?= $_SESSION['catname'];?></td>
        <td><?=$blogid;?></td>
        <td><?=$date;?></td>
      <td>
			<a href="edit_blog.php?action=edit_blog & heading=<?=$row['heading'];?> "class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			<a href="all_blog.php?action=delete_blog & blogid=<?=$row['blogid'];
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