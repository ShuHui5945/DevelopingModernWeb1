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
                        <div class="title">
                            <h2>Men's Singles</h2>
                        </div>
                        <div class="section section-mSingle">
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
                                                        <th><a href="profile/ChenLong.php">CHEN Long</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th><a href="profile/LinDan.php">LIN Dan</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th><a href="profile/AndersAntonsen.php">Anders ANTONSEN</a></th>
                                                    </tr>
                                                        <th><span class="icon-f"><img src="images/Flag/germany.png" /></span> GER</th>
                                                    <th><a href="profile/MarcZwiebler.php">Marc ZWIEBLER</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/hongkong.png" /></span> HKG</th>
                                                        <th><a href="profile/HuYun.php">HU Yun</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th><a href="profile/JonathanChriste.php">Jonatan CHRISTE</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/india.png" /></span> IND</th>
                                                        <th><a href="profile/AjayJayaram.php">Ajay JAYARAM</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" class="icon-flag"/></span> KOR</th>
                                                        <th><a href="profile/SonWanHo.php">SON Wan Ho</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/malaysia.png" /></span> MAS</th>
                                                        <th><a href="profile/LeeChongWei.php">LEE Chong Wei</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/chinesetaipei.png" /></span> TPE</th>
                                                        <th><a href="profile/ChouTienChen.php">CHOU Tien Chen</a></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
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