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
    <body class="signUp-page">
        
        <?php
            require('header.php');
        ?>
        
        <!--Wrapper-->
        <div class="wrapper">
            <div class="header header-filter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offsset-3">
                            <div class="card card-signup">
                                <form class="form" method="POST" action="signUp.php">
                                    <div class="header header-primary text-center">
                                        <h4>Sign Up</h4>
                                    </div>
                                    <div class="content">
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <div class="form-group is-empty">
                                                <input type="text" name="username" required="required" class="form-control" placeholder="Username..." />
                                            </div>
                                        </div>
                                        
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
                                        <input type="submit"  value="Get Started " class="btn btn-simple btn-primary btn-lg" /> 
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
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $bool = true;

    mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
    mysql_select_db("volano") or die("Cannot connect to database"); //connec to database
    $query = mysql_query("Select * from users"); // Query users table
    while($row = mysql_fetch_array($query)) //display all rows from query
    {
        $table_users = $row['username']; //first username row is passed to $table_users, and so on until query finished
        if($username == $table_users) // checks if there are any matching fields
        {
            $bool = false; // sets bool to false
            print '<script>alert("Username has been taken!");</script>'; //prompt user
            print '<script>window.location.asssign("signUp.php");</scrpt>'; //redirects to signUp.php
        }
    }

    if($bool) //check if bool is true
    {
        mysql_query("INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')"); //insert value to table users
        print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
        print '<script>window.location.assign("signUp.php");</script>'; //redirects to signUp.php
    }
}
?>