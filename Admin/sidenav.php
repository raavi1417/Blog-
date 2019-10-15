<?php
@session_start();
if(isset($_SESSION['email'])):
?>
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?=$_SESSION['image'];?>" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong><?=$_SESSION['name'];?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                   
                    <li class="">
                        <a href="index.php"><i ></i>Dashboard</a>
                    </li>
                  
                     <li>
                        <a href="Add_cat.php"><i class=""></i>Add category</a>
                    </li>
                    <li>
                        <a href="all_cat.php"><i class=""></i>All Category</a>
                    </li>
                    <li>
                        <a href="add_blog.php"><i class=""></i>Add Blogs</a>
                    </li>
                     <li>
                        <a href="all_blog.php"><i class=""></i>All Blogs</a>
                    </li>
                   
                   
                     
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
<?php endif;?>