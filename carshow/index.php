<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phi Mu Delta at Penn College | Car Show</title>

    <!-- Custom styles for this template -->
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
            <li class="active"><a href="../carshow/">Car Show</a></li>
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
            <div class="col-sm-12">
                <h1>Annual Car Show</h1>
            </div>
        </div>
        </div>
      </section>
      <div class="container carshow">
            <div class="row">
            <div class="col-md-7">
                <div class="textBox">
                  <div class="titleBox">
                    <h2>Welcome to the Annual Phi Mu Delta Car Show benefitting St. Jude Children’s Research Hospital</h2>
                    <h3>100% of the proceeds raised<br /> will be donated</h3>
                  </div>
                  <div class="alertBox altBox">
                    <div class="row">
                      <div class="col-md-3">
                        <h4><b>Date</b></h4>
                      </div>
                      <div class="col-md-9">
                        <h4>Saturday, October 6, 2018</h4>
                      </div>
                      <div class="col-md-3">
                        <h4><b>Time</b></h4>
                      </div>
                      <div class="col-md-9">
                        <h4>9am - 3pm</h4>
                      </div>
                      <div class="col-md-3">
                        <h4><b>Location</b></h4>
                      </div>
                      <div class="col-md-9">
                          <a href="https://www.google.com/maps/place/Pennsylvania+College+of+Technology/@41.23472,-77.023235,17z" target="_blank"><h4>Pennsylvania College of Technology Williamsport, PA</h4></a>
                          <!-- <h4>TBD</h4> -->
                      </div>
                      <div class="col-md-3">
                        <h4><b>Rain Date</b></h4>
                      </div>
                      <div class="col-md-9">
                        <h4>Saturday, October 27, 2018</h4>
                      </div>
                    </div>
                  </div>
                  <span class="eventContent">
                  <p>All cars are welcome! This event is open to the public. Vehicle entry is a $10 donation per vehicle, collected at event check-in. There will also be raffle baskets at the event. Must be present to win. When you enter your vehicle at the event you will be required to sign a release form stating that you will not do burnouts, touch or damage anyone’s car, and other banned activities. If something does happen to you or your car, Pennsylvania College of Technology and Phi Mu Delta Fraternity are not held liable. For any questions, please email Ryan Pellow at <a href="mailto:rsp3@pct.edu">rsp3@pct.edu</a></p>
                  <p class="textCentered">
                    <a class="image-popup-zoom" href="../images/carshow18.jpg">
                        <img class="img-rounded" src="../images/carshow18.jpg">
                    </a>
                  </p>
                  </span>

                  <a href="https://www.pct.edu/visit/campus-maps" target="_blank" class="button buttonBlue">Campus Map</a>
                  <h2>Looking forward to see you there!</h2>

                </div>
            </div>
            <div class="col-md-5">
              <?php
              include('carshowform.php');
              ?>
              <!-- <h2>Register</h2> -->
              <form id='carshowform' action="index.php" method="post" novalidate>
                <h3 class="formTitle">Registration Form</h3>

                <div class="group">
                  <input type="text" name="firstName" aria-label='First name' maxlength='32' required><span class="highlight"></span><span class="bar"></span>
                  <label>First Name</label>
                </div>
                <div class="group">
                  <input type="text" name="lastName" aria-label='Last name' maxlength='32'><span class="highlight"></span><span class="bar"></span>
                  <label>Last Name</label>
                </div>
                <div class="group">
                  <input type="email" name="email" aria-label='Email address' maxlength='41'><span class="highlight"></span><span class="bar"></span>
                  <label>Email</label>
                </div>
                <div class="group">
                  <input type="text" name="phone" aria-label='Phone number' maxlength="15"><span class="highlight"></span><span class="bar"></span>
                  <label>Phone</label>
                </div>
                <div class="group">
                  <input type="text" name="carYear" aria-label='Vehicle Year' maxlength="7"><span class="highlight"></span><span class="bar"></span>
                  <label>Vehicle Year</label>
                </div>
                <div class="group">
                  <input type="text" name="carMake" aria-label='Vehicle Make' maxlength="32"><span class="highlight"></span><span class="bar"></span>
                  <label>Vehicle Make</label>
                </div>
                <div class="group">
                  <input type="text" name="carModel" aria-label='Vehicle Model' maxlength="32"><span class="highlight"></span><span class="bar"></span>
                  <label>Vehicle Model</label>
                </div>
                <div class="group radio" aria-label='Vehicle Class' >
                  <h4>Vehicle Class</h4>
                  <input type="radio" name="vclass" value='1' aria-label='Antique Car (1985 and prior)'>Antique Car (1985 and prior)<br />
                  <input type="radio" name="vclass" value='2' aria-label='Antique Truck (1985 and prior)'>Antique Truck (1985 and prior)<br />
                  <input type="radio" name="vclass" value='3' aria-label='Modern Car (1986 and after)'>Modern Car (1986 and after)<br />
                  <input type="radio" name="vclass" value='4' aria-label='Modern Truck (1986 and after)'>Modern Truck (1986 and after)<br />
                  <input type="radio" name="vclass" value='5' aria-label='Motorcycle'>Motorcycle<br />

                </div>
                <p>By clicking submit, you agree to the entry fee and all other rules listed on this page.</p>
                <input type="submit" name='submit' class="button buttonBlue submit" />
                <!-- <button type='button' class="btn button buttonBlue disabled">CLOSED</button> -->
              </form>

            </div>
          </div>
      </div>
<!-- Footer -->
<section>
<div class="footer">
    <div class="container">
        <div class="row">
                <div class="col-xs-4">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">Back to Top</a></li>
                        <li><a href="../admin/admin.php">Admin Panel</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <p>Copyright &copy; 2015 - 2019</p>
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
    <script src="../js/lightbox/jquery.magnific-popup.js"></script>
    <script src="../js/lightbox/lightbox.js"></script>
    <script src="../js/googleanalytics.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/carshow.js"></script>
  </body>
</html>
