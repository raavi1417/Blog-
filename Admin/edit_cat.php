<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
<?php
@session_start();
include('database/connection.php');
if(isset($_GET['action']) && $_GET['action']='edit_cat')
{
$catid=$_GET['catid'];
    
$q="select * from category where catid='$catid'";
$res=mysqli_query($link,$q);
if(mysqli_num_rows($res)==1){
while($row=mysqli_fetch_assoc($res)){

    $catid=$row['catid'];
    $image=$row['image'];
        }
  }
}
?>
<?php
extract($_POST);
include('database/connection.php');
if(isset($update)){
    $catid=mysqli_real_escape_string($link,$catid);
    $catname=mysqli_real_escape_string($link,$catname);
    $image_name=$_FILES['image']['name'];
    $arr=explode(".",$image_name);
    $image_name="images/".$image_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_name))
     {
    $q="update category set catid='$catid',catname='$catname',image='$image_name'";
        $res=mysqli_query($link,$q);
        if($res==true){
            ?>
<script>
alert("Successfully Update");
</script>
<?php
        }
        else
        {
            ?>
<script>alert("Error");</script>
<?php
        }
    
    }
}


?>
     <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">Update Category</h1>
                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                                          <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="catname">
                                                <?php
                                                include('database/connection.php');
                                                $q=mysqli_query($link,"select catname from category");
                                                if(mysqli_num_rows($q)){
                                                    while($row=mysqli_fetch_assoc($q)):{
                                                        $catname=$row['catname'];
                                                    
                                                }
                                                ?>
                                                <option><?=$catname?></option>
                                                <?php endwhile;}?>
                                             </select>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Category's Name</label>
                                            <input class="form-control" placeholder="Enter Category's Name" name="catname" value="<?=$catname;?>" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" value="<?=$image;?>" required>
                                        </div>
                                        <input type="submit" class="btn btn-success" name="update" value="Update">                                    </form>
                                </div>
                       
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>
