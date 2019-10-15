<div class="col-md-10">
<?php
@session_start(); 
if(isset($_SESSION['email']))
{
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
		switch($page)
		{
		 case "logout":require_once("logout.php");break;
         //case "adminupdate":require_once("adminupdate.php");break;
         case "Add_cat":require_once("Add_cat.php");break;
         case "add_blog":require_once("add_blog.php");break;
         case "all_cat":require_once("all_cat.php");break;
         case "all_blog":require_once("all_blog.php");break;
	

        default : require_once("404.php");break;
		}
	}
else
	{
		require_once("dashborad.php");
	}

}else if(isset($_GET['page']))
{
	if(($_GET['page'])=="login")
	{
		 require_once("login.php");
	}
	else if($_GET['page']=="register")
	{

		require_once("register.php");
	}
	else
	{
		require_once("404.php");
	}

}
else
{
	require_once("login.php");
}

?>
</div>		
	