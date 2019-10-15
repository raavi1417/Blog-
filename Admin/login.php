<?php include('head.php');?>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="images/logo.png" alt="" style="margin-right:50%"/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login_api.php" enctype="multipart/form-data">
                            <fieldset>
							    <div class="form-group" >
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                               
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                               
								 
								<!-- Change this to a button or input when using this as a form -->
                               <input type="submit" name="login" class="btn btn-lg btn-success btn-block">
                              <div style="margin-top:20px; margin-left:200px; text-decoration:none;"> <a href="register.php">Register Here ?</a>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include('footer.php');?>