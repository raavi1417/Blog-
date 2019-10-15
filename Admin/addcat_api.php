<?php
include('database/connection.php');
extract($_POST);
if(isset($addcat)){
    $catname=mysqli_real_escape_string($link,$catname);
    //echo $catname;
    $catid=mysqli_real_escape_string($link,$catid);
    $image_name=$_FILES['image']['name'];
    //echo $image_name;
    $arr=explode(".",$image_name);
    //$extn=strtolower(end($arr));
    $image_name="images/".$image_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_name))
        
    {
        	$q="insert into category set catname='$catname',catid='$catid',
            image='$image_name'";
      if(mysqli_query($link,$q)){
          ?>
<script>
alert("Successfully Publish");
location.href="Add_cat.php"
</script>
<?php
      }
        else{
            ?>
<script>
            alert("Error");
     location.href="Add_cat.php";
</script>
    <?php        
}
    }
}
?>