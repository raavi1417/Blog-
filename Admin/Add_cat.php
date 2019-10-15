
<?php include('head.php');?>
<?php include('navbar.php');?>
<?php include('sidenav.php');?>
     <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">Add Category</h1>
                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="addcat_api.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Category Id</label>
                                            <input class="form-control" placeholder="Enter Category Id" name="catid" required>
                                            <p class="help-block">
                                        </div>
                                        <div class="form-group">
                                            <label>Category's Name</label>
                                            <input class="form-control" placeholder="Enter Category's Name" name="catname" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" required>
                                        </div>
                                        <input type="submit" class="btn btn-success" name="addcat" value="Publish">                                    </form>
                                </div>
                       
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>


