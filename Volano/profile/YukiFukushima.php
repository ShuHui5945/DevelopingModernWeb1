<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Volano</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../images/volano_icon.png">	
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <!-- Optional Bootstrap theme -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../volano.css">
    </head>
    <body class="profile-page">
        
        <?php
            require('../header.html');
        ?>
        
        <!--Wrapper-->
        <div class="wrapper">
		  <div class="header header-filter" style="background-image: url('../images/YukiFukushima/background.jpg');"></div>

		  <div class="main main-raised">
              <div class="profile-content">
                  <div class="container">
                      <div class="row">
                          <div class="profile">
                              <div class="avatar">
                                  <img src="../images/YukiFukushima/profile.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                              </div>
                              
                              <div class="name">
                                  <h3 class="title">Yuki Fukushima</h3>
                                  <h6>Japan</h6>
                              </div>
                          </div>
                      </div>
                      <div class="description">
                          <h4><strong>AGE: </strong>24</h4>
                          <br>
                          <h4><strong>DATE OF BIRTH: </strong>05/06/1993</h4>
                          <br>
                          <h4><strong>WOMEN'S DOUBLE WORLD RANK: </strong>9</h4>
                          <br>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <!--End Wrapper-->
        
        <?php
                require('../footer.html');
        ?>
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
