<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phi Mu Delta at Penn College | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../images/favicon.png" />

  </head>

  <body>
<div id="#"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html"><img alt="Phi Mu Delta Mu Xi Chapter" src="../images/pmdHead-01.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../why.html">Why Us</a></li>
            <li><a href="../about/brotherhood.php">About Us</a></li>
            <li><a href="../carshow/">Car Show</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumni<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../alumni/newsletter.html">Newsletter</a></li>
                    <li><a href="../alumni/resources.php">Weekend</a></li>
                    <li><a href="../alumni/events.php">Events</a></li>
                  </ul>
            </li>
            <li><a href="../connect.php">Connect</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- Page Header -->
<section id="titleBar">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin Panel</h1>
            </div>
        </div>
        </div>
      </section>
      <section id="admin">
          <div class="" style="margin: 0 5%;">
            <div class="row">
                <?php 
                if($_SESSION['access'] != 'A'){
                    echo '<div class="col-md-4 col-md-offset-4">';            
                    include('login.php');
                    echo '</div>';
                    }
                else{include('sidenav.html');
                    $content = $_REQUEST['content'];
                    $nextpage = $content.'.php';
                    include($nextpage);
                    }
            
            echo '</div>';
            echo '</div>';
    ?>
        </div>

        </div>


    </section>
<!-- Footer -->
<section>
<div class="footer">
    <div class="container">
        <div class="row">
                <div class="col-xs-4">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">Back to Top</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <p>Copyright &copy; 2018</p>
                    <p>Phi Mu Delta Mu Xi Chapter</p>
                </div>
            <div class="col-xs-4">
                <ul>
                    <li><a href="http://www.facebook.com/PCTphimudelta" target="_blank"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                    <li><a href="http://twitter.com/PhiMuDeltaPCT" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                    <li><a href="http://instagram.com/phimudeltapct" target="_blank"><i class="fa fa-instagram fa-3x"></i></a></li>
                    <li><a href="mailto:phimudeltamuxi@gmail.com"><i class="fa fa-envelope fa-3x"></i></a></li>
                </ul>
            </div>
            </div>
    </div>
</div>
</section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
