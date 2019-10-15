<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
<?php
@session_start();
include('database/connection.php');
if(isset($_GET['action']) && $_GET['action']='edit_blog')
{
$heading=$_GET['heading'];
    
$q="select * from blog where heading='$heading'";
$res=mysqli_query($link,$q);
if(mysqli_num_rows($res)==1){
while($row=mysqli_fetch_array($res)){
    $catname=$row['catname'];
    $blogid=$row['blogid'];
    $heading=$row['heading'];
    $date=$row['date'];
    $text=$row['text'];
    $image=$row['image'];
        }
  }
}
?>

     <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Blog</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Blog
                        </div>
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" enctype="multipart/form-data" action="update_blog.php">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="catname">
                                    
                                                <option><?= $catname;?></option>
                                           
                                             </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Blog Id</label>
                                     <input class="form-control" placeholder="Enter Blog Id" name="blogid" value="<?=$blogid;?>" required>
                                                   
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Blog Heading</label>
                                     <input class="form-control" placeholder="Enter Blog Heading" name="heading" value="<?=$heading;?>">
                                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                     <input type="file" class="form-control"  name="image" required>
                                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Publish Date</label>
                                            <input type="date" name="date" class="form-control" required value="<?=$date;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Text</label>
                                            <textarea name="text" class="form-control" rows="20" required><?=$text;?></textarea>
                                        </div>
                                     <input type="submit" class="btn btn-success"
                                               name="update" value="Update">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!--<?php include('footer.php');?>


