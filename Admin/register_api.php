<?php
include('database/connection.php');
extract($_POST);
if(isset($register)){
    $name=mysqli_real_escape_string($link,$name);
    $email=mysqli_real_escape_string($link,$email);
    $mobile=mysqli_real_escape_string($link,$mobile);
    $password=md5(mysqli_real_escape_string($link,$password));
    $image_name=$_FILES['image']['name'];
    $arr=explode(".",$image_name);
    //$extn=strtolower(end($arr));
    $image_name="images/".$image_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_name))
        
    {
        	$q="insert into register set name='$name',email='$email',mobile='$mobile',password='$password',
            image='$image_name'";
      if(mysqli_query($link,$q)){
          ?>
<script>
alert("Successfully Register");
location.href="login.php"
</script>
<?php
      }
        else{
            ?>
<script>
            alert("Please Enter Data");
     location.href="register.php";
</script>
    <?php        
}
    }
}
?>