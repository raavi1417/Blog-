<?php include('head.php');?>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="register_api.php"  enctype="multipart/form-data">
                            <fieldset>
							<div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" autofocus required>
                                </div>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mobile" name="mobile" type="text" autofocus required>
                                </div>
                            
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  name="image" type="file" value="" required>
                                </div>
								 
								<!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Register" class="btn btn-lg btn-success btn-block" name="register">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include('footer.php');?>