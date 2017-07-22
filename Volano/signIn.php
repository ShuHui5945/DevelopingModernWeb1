<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Volano</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/volano_icon.png">	
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- Optional Bootstrap theme -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="volano.css">
    </head>
    <body class="signIn-page">
        
        <?php
            require('header.php');
        ?>
        
        <!--Wrapper-->
        <div class="wrapper">
            <div class="header header-filter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offsset-3">
                            <div class="card card-signin">
                                <form class="form" method="POST" action="checklogin.php">
                                    <div class="header header-primary text-center">
                                        <h4>Sign In</h4>
                                    </div>
                                    <div class="content">
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </span>
                                            <div class="form-group is-empty">
                                                <input type="text" name="email" required="required" class="form-control" placeholder="Email..." />
                                            </div>
                                        </div>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <div class="form-group is-empty">
                                                <input type="password" name="password" required="required" class="form-control" placeholder="Password..." />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="footer text-center">
                                        <input type="submit" value="Log in" class="btn btn-simple btn-primary btn-lg"/>
                                    </div>
                                    
                                    <div class="footer text-center">
                                        <a href="signUp.php">No account yet?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Wrapper-->
        
        <?php
                require('footer.php');
        ?>
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
