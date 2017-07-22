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
    <body class="rank-page">
        
        <?php
            require('header.php');
        ?>
        
        <!--Wrapper-->
        <div class="wrapper">
            
            <div class="main main-raised">
                <!--Player section-->
                <div class="section section-rank">
                    <div class="container">
                        <!--Mixed doubles-->
                            <div class="title">
                                <h2>Mixed Doubles</h2>
                            </div>
                            
                            <div class="section section-mixDouble">
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png"/></span> CHN</th>
                                                        <th><a href="profile/ZhengSiWei.php">ZHENG Siwei</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA<br></th>
                                                        <th>
                                                            <a href="profile/Lilliyana.php">Liliyana NATSIR</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA<br></th>
                                                        <th><a href="profile/TontowiAhmad.php">Tontowi AHMAD</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/england.png" /></span> ENG</th>
                                                        <th><a href="profile/ChrisAdcock.php">Chris ADCOCK</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/england.png" /></span> ENG</th>
                                                        <th>
                                                            <a href="profile/GabrielleAdcock.php">Gabrielle ADCOCK</a>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Mixed Doubles-->
                    </div>
                </div>
                <!--End player section-->
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