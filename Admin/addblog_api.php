<?php
include('database/connection.php');
extract($_POST);
if(isset($publish)){
    $catname=mysqli_real_escape_string($link,$catname);
    $blogid=mysqli_real_escape_string($link,$blogid);
    $heading=mysqli_real_escape_string($link,$heading);
    $date=mysqli_real_escape_string($link,$date);
    $text=mysqli_real_escape_string($link,$text);
    $image_name=$_FILES['image']['name'];
    $arr=explode(".",$image_name);
    $image_name="images/".$image_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_name))
        
    {
    
    
$q="insert into blog set catname='$catname',blogid='$blogid',heading='$heading',date='$date',text='$text',image='$image_name'";
      if(mysqli_query($link,$q)){
          ?>
<script>
alert("Successfully Publish");
location.href="add_blog.php"
</script>
<?php
      }
        else{
            ?>
<script>
            alert("Error");
     location.href="add_blog.php";
</script>
    <?php        }
    }
}
?>