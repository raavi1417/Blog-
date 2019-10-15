<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
     <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Information</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                            <div class="form-group">
                                            <label>Admin Name:</label>
                                <b>  <?=$_SESSION['name'];?></b>
                                        </div>
                            <div class="form-group">
                                            <label>Admin Email:</label>
                                             <b>  <?=$_SESSION['email'];?></b>
                                        </div>                                   <div class="form-group">
                                            <label>Admin Mobile:</label>
                                    <b>  <?=$_SESSION['mobile'];?></b>
                                    <div class="form-group">
                                            <label>Admin Image:</label>
                                        <img src="<?=$_SESSION['image']?>" height="100px" width="100px" style="border-radius:10px;">
                                            </div>
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
<?php include('footer.php');?>