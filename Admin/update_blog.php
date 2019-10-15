<?php
extract($_POST);
include('database/connection.php');
if(isset($update)){
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
    $q="UPDATE blog SET catname='$catname',blogid='$blogid',heading='$heading',date='$date',text='$text',image='$image_name'";
        echo $q;
        $res=mysqli_query($link,$q);
        if($res==true){
            ?>
<script>
alert("Successfully Update");
// window.location="all_blog.php";
</script>
<?php
        }
        else
        {
            ?>
<script>alert("Error");
//window.location="all_blog.php";
</script>

<?php
        }
    
    }
}


?>
