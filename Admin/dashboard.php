<?php
@session_start();
if(isset($_SESSION['email'])):
?>
  <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">Welcome <?=$_SESSION['name']?></h1>
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
<?php endif;?>