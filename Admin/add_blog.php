
<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
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
                            Blog Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="addblog_api.php" enctype="multipart/form-data">
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
                                            <label>Blog Id</label>
                                     <input class="form-control" placeholder="Enter Blog Id" name="blogid" required>
                                                   
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Blog Heading</label>
                                     <input class="form-control" placeholder="Enter Blog Heading" name="heading" required>
                                                   
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Publish Date</label>
                                            <input type="date" name="date" class="form-control" required>
                                        </div>
                                        <div>
                                            <label>Blog's Photo</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Blog Text</label>
                                            <textarea name="text" class="form-control" rows="20" required></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-success"
                                               name="publish">
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


