<?php
session_start();
include('database/connection.php');
extract($_POST);
if(isset($login))
{
  $email=mysqli_real_escape_string($link,$email);
  $password=md5(mysqli_real_escape_string($link,$password));
  $q="select * from register where email='$email' AND password='$password'";
  $res=mysqli_query($link,$q);
  if(mysqli_num_rows($res)==1)
  {
    $row=mysqli_fetch_assoc($res);
      $_SESSION['name']=$row['name'];
      $_SESSION['email']=$row['email'];
      $_SESSION['image']=$row['image'];
      $_SESSION['mobile']=$row['mobile'];
    ?>
         <script type="text/javascript">
            alert("Successfully Login");
          location.href="index.php";
         </script>
         <?php
  }
  else{
    ?>
         <script type="text/javascript">
             alert("Enter Right Information");
          location.href="login.php";
         </script>
         <?php
     }

}
?>
