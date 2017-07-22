<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <body class="index-page">
        
        <?php
            require('header.php');
        ?>
        
        <!--Wrapper-->
        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('images/jumbotron.png'); background-color: rgba(255, 255, 255, 0.8);background-blend-mode: screen;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1><span style="color: #a200ff">Volano</span></h1>
                            <h3> Watch latest match result and get details of your favourite player</h3>
                            <br />
                            <a href="tournament.php" class="btn btn-danger btn-raised btn-lg">
							<i class="fa fa-play"></i> More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="main main-raised">
                <!--Tournament section-->
                <div class="section section-tournaments">
                    <div class="container">
                        <div class="title">
                            <h2>Tournaments</h2>
                        </div>
                        
                        <div id="tournament">
                            <div class="title">
                                <h3>Latest Tournament Result</h3>
                            </div>
                            
                            <div class="section section-live">
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="title">
                                            <h4>[XD] KIM Won Ho, SHIN Seung Chan  vs Kohei GONDO, Wakana NAGAHARA </h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <th>Player</th>
                                                    <th>Player</th>
                                                    <th>Round 1</th>
                                                    <th>Round 2</th>
                                                    <th>Round 3</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KIM Won Ho<br><br><span class="icon-f"><img src="images/Flag/korea.png" /></span> SHIN Seung Chan </th>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> Kohei GONDO<br><br><span class="icon-f"><img src="images/Flag/japan.png" /></span> Wakana NAGAHARA </th>
                                                        <th>15 - 21</th>
                                                        <th>21 - 10</th>
                                                        <th>21 - 10</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tournaments section-->
                        
                        <div class="space-50"></div>
                        
                        <!--Best player section-->
                        <div class="section best-section">
                            <div class="title">
                                <h2>World Rankings</h2>
                            </div>
                            
                            <div class="best">
                                <!--Men's Singles-->
                                <div class="title">
                                    <h3>Men's Singles</h3>
                                </div>
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th>Rank</th>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                    <th>Win - Lose</th>
                                                    <th>Points</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" class="icon-flag"/></span> KOR</th>
                                                        <th>SON Wan Ho</th>
                                                        <th>270 - 147</th>
                                                        <th>72,968 /18</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th><span class="icon-f"><img src="images/Flag/malaysia.png" /></span> MAS</th>
                                                        <th>LEE Chong Wei</th>
                                                        <th>672 - 124</th>
                                                        <th>71,704 /9</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th>viktor AXELSEN</th>
                                                        <th>247 - 103</th>
                                                        <th>69,240 /14</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--End Men's Singles-->
                                
                                <div class="space-50"></div>
                                
                                <!--Women's Singles-->
                                <div class="title">
                                    <h3>Women's Singles</h3>
                                </div>
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th>Rank</th>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                    <th>Win - Lose</th>
                                                    <th>Points</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th><span class="icon-f"><img src="images/Flag/chinesetaipei.png" class="icon-flag"/></span> TPE</th>
                                                        <th>TAI Tzu Ying</th>
                                                        <th>262 - 123</th>
                                                        <th>94,409 /15</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" /></span> JPN</th>
                                                        <th>akane YAMAGUCHI</th>
                                                        <th>180 - 63</th>
                                                        <th>78,199 /18</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR</th>
                                                        <th>SUNG Ji Hyun</th>
                                                        <th>306 - 146</th>
                                                        <th>77,735 /17</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--End Women's Singles-->
                                
                                <div class="space-50"></div>
                                
                                <!--Men's Doubles-->
                                <div class="title">
                                    <h3>Men's Doubles</h3>
                                </div>
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th>Rank</th>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                    <th>Win - Lose</th>
                                                    <th>Points</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" class="icon-flag"/></span> CHN<br><br><span class="icon-f"><img src="images/Flag/china.png" class="icon-flag"/></span> CHN</th>
                                                        <th>LI Junhui
                                                            <br><br>
                                                            LIU Yuchen
                                                        </th>
                                                        <th>84 - 35</th>
                                                        <th>81,121 /17</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN<br><br><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th>Mathias BOE
                                                            <br><br>
                                                            Carsten MOGENSEN
                                                        </th>
                                                        <th>348 - 112</th>
                                                        <th>80,064 /14</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA<br><br><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th>Marcus Fernaldi GIDEON
                                                            <br><br>
                                                            Kevin Sanjaya SUKAMULJO
                                                        </th>
                                                        <th>54 - 24</th>
                                                        <th>75,217 /11</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--End Men's Doubles-->
                                
                                <div class="space-50"></div>
                                
                                <!--Women's Doubles-->
                                <div class="title">
                                    <h3>Women's Doubles</h3>
                                </div>
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th>Rank</th>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                    <th>Win - Lose</th>
                                                    <th>Points</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th><span class="icon-f"><img src="images/Flag/japan.png" class="icon-flag"/></span> JPN<br><br><span class="icon-f"><img src="images/Flag/japan.png" class="icon-flag"/></span> JPN</th>
                                                        <th>Misaki MATSUTOMO
                                                            <br><br>
                                                            Ayaka TAKAHASHI
                                                        </th>
                                                        <th>234 - 96</th>
                                                        <th>90,723 /15</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN<br><br><span class="icon-f"><img src="images/Flag/denmark.png" /></span> DEN</th>
                                                        <th>Kmilla Rytter JUHL
                                                            <br><br>
                                                            CHristinna PEDERSEN
                                                        </th>
                                                        <th>184 - 82</th>
                                                        <th>86,138 /17</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR<br><br><span class="icon-f"><img src="images/Flag/korea.png" /></span> KOR</th>
                                                        <th>CHANG Ye Na
                                                            <br><br>
                                                            LEE So Hee
                                                        </th>
                                                        <th>65 - 24</th>
                                                        <th>82,549 /17</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--End Women's Doubles-->
                                
                                <div class="space-50"></div>
                                
                                <!--Mixed Doubles-->
                                <div class="title">
                                    <h3>Mixed Doubles</h3>
                                </div>
                                <div class="container-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <th>Rank</th>
                                                    <th>Country</th>
                                                    <th>Player</th>
                                                    <th>Win - Lose</th>
                                                    <th>Points</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" class="icon-flag"/></span> CHN<br><br><span class="icon-f"><img src="images/Flag/china.png" class="icon-flag"/></span> CHN</th>
                                                        <th>ZHENG Siwei
                                                            <br><br>
                                                            CHEN Qingchen
                                                        </th>
                                                        <th>46 - 7</th>
                                                        <th>92,737 /17</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN<br><br><span class="icon-f"><img src="images/Flag/china.png" /></span> CHN</th>
                                                        <th>LU Kai
                                                            <br><br>
                                                            HUANG Yaqiong
                                                        </th>
                                                        <th>87 - 36</th>
                                                        <th>82,995 /15</th>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA<br><br><span class="icon-f"><img src="images/Flag/indonesia.png" /></span> INA</th>
                                                        <th>Tontowi AHMAD
                                                            <br><br>
                                                            Liliyana NATSIR
                                                        </th>
                                                        <th>235 - 65</th>
                                                        <th>70,030 /10</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--End Mixed Doubles-->
                            </div>
                        </div>
                        <!--End best player section-->
                        
                        <div class="space-50"></div>
                        
                        <!--Contact Section-->
                        <div class="section contact-section">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-center title">
                                        Contact Us
                                    </h2>
                                    <h4 class="text-center description">
                                        We will get back to you as soon as possible.
                                    </h4>
                                    <form class="contact-form" action="index.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" for="name">Your Name</label>
                                                    <input type="text" name="name" required="required" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label" for="email">Your Email</label>
                                                    <input type="text" name="email" required="required" class="form-control">
                                                </div>
                                            </div>
	                                    </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Message</label>
                                            <textarea class="form-control" rows="4" name="mtext" required="required"></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-4 text-center">
                                                <input type="submit"  value="Send Message" class="btn btn-primary btn-raised" />
                                            </div>
                                        </div>
	                               </form>
                                </div>
                            </div>
                        </div>
                        <!--End contact section-->
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
    $name = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $mtext = mysql_real_escape_string($_POST['mtext']);
    $bool = true;

    mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
    mysql_select_db("volano") or die("Cannot connect to database"); //connec to database
    $query = mysql_query("Select * from message"); // Query message table

    if($bool) //check if bool is true
    {
        mysql_query("INSERT INTO message (name, email, mtext) VALUES ('$name','$email','$mtext')"); //insert value to table message
        print '<script>alert("Successfully sent!");</script>'; // Prompts the message
        print '<script>window.location.assign("index.php");</script>'; //redirects to index.php
    }
}
?>