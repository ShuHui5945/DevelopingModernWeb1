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
                        <!--Men's Doubles-->
                        <div class="title">
                                <h2>Men's Doubles</h2>
                            </div>
                            
                            <div class="section section-mDouble">
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
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th><a href="profile/ChaiBiao.php">CHAI Biao</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th>
                                                            <a href="profile/HongWei.php">HONG Wei</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th>
                                                            <a href="profile/AndersSkaarup.php">Anders Skaarup RASMUSSEN</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th><a href="profile/KimAstrup.php">Kim ASTRUP</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/england.png" /></span> ENG</th>
                                                        <th><a href="profile/MarcusEllis.php">Marcus ELLIS</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/england.png" /></span> ENG</th>
                                                        <th>
                                                            <a href="profile/ChrisLangridre.php">Chris LANGRIDGE</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th><a href="profile/AnggaPratama.php">Angga PRATAMA</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th>
                                                            <a href="profile/RickyKarandasuwardi.php">Ricky KARANDASUWARDI</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> JPN</th>
                                                        <th><a href="profile/TakeshiKumura.php">Takeshi KAMURA</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> JPN</th>
                                                        <th>
                                                            <a href="profile/KeigoSonoda.php">Keigo SONODA</a>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End men's doubles-->
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