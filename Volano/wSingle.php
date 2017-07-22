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
                                <h2>Women's Singles</h2>
                            </div>
                            
                            <div class="section section-wSingle">
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
                                                        <th><a href="profile/ChenYuFei.php">CHEN Yufei</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/spain.png" /></span> ESP</th>
                                                        <th><a href="profile/BeatrizCorrales.php">Beatriz CORRALES</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/hongkong.png" /></span> HKG</th>
                                                        <th><a href="profile/CheungNagnYi.php">CHEUNG Ngan Yi</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th><a href="profile/Fitriani.php">Fitriani FITRIANI</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> JPN</th>
                                                        <th><a href="profile/AkaneYamaguchi.php">Akane YAMAGUCHI</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR</th>
                                                        <th><a href="profile/SungJiHyun.php">SUNG Ji Hyun</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/malaysia.png" /></span> MAS</th>
                                                        <th><a href="profile/SoniiaCheah.php">Soniia CHEAH</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/thailand.png" /></span> THA</th>
                                                        <th><a href="profile/Busanan.php">Busanan ONGBAMRUNGRHAN</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/chinesetaipei.png" /></span> TPE</th>
                                                        <th><a href="profile/LeeChiaHsin.php">LEE Chia Hsin</a></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/usa.png" /></span> USA</th>
                                                        <th><a href="profile/BeiwenZhang.php">Beiwen ZHANG</a></th>
                                                    </tr>   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End women's singles-->
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