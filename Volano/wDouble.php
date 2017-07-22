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
                        <!--Women's doubles-->
                            <div class="title">
                                <h2>Women's Doubles</h2>
                            </div>
                            
                            <div class="section section-wDouble">
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
                                                        <th><span class="icon-f"><img src="images/Flag/bulgaria.png" /></span> BUL
                                                        <th><a href="profile/Gabriela.php">Gabriela STOEVA</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/bulgaria.png" /></span> BUL</th>
                                                        <th>
                                                            <a href="profile/Stefani.php">Stefani STOEVA</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th><a href="profile/ChenQingchen.php">CHEN Qingchen</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th><a href="profile/HuangDongping.php">HUANG Dongping</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th>
                                                            <a href="profile/Christinna.php">Christinna PEDERSEN</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th><a href="profile/KmillaRytterJuhl.php">Kmilla Rytter JUHL</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png"/></span> JPN</th>
                                                        <th>
                                                            <a href="profile/AyakaTakahashi.php">Ayaka TAKAHASHI</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> JPN</th>
                                                        <th><a href="profile/YukiFukushima.php">Yuki FUKUSHIMA</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR</th>
                                                        <th><a href="profile/ChangYeNa.php">CHANG Ye Na</a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR</th>
                                                        <th><a href="profile/JungKyungEun.php">JUNG Kyung Eun</a>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End women's doubles-->
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