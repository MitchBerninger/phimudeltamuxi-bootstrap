<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phi Mu Delta at Penn College | Alumni Weekend</title>

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
            <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumni<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="newsletter.html">Newsletter</a></li>
                    <li><a href="resources.php">Weekend</a></li>
                    <li><a href="events.php">Events</a></li>
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
                <h1>Alumni Weekend</h1>
            </div>
        </div>
        </div>
      </section>
      <section id="resources">
          <div class="container">
            <div class="row">
            <div class="col-md-7">
              <div class="textBox">
                <div class="titleBox">
                  <h2>Welcome Mu Xi Alumni!</h2>
                  <h3>Join your fellow Alumni and Undergraduates for the Mu Xi Chapter's 6th Annual Alumni Weekend.</h3>
                </div>
                <div class="alertBox altBox">
                  <div class="row">
                    <div class="col-md-3">
                      <h4><b>Date</b></h4>
                    </div>
                    <div class="col-md-9">
                      <h4>April 13-15, 2018</h4>
                    </div>
                    <!-- <div class="col-md-3">
                      <h4><b>Time</b></h4>
                    </div>
                    <div class="col-md-9">
                      <h4>TBD</h4>
                    </div> -->
                    <div class="col-md-3">
                      <h4><b>Location</b></h4>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.google.com/maps/place/Pennsylvania+College+of+Technology/@41.23472,-77.023235,17z" target="_blank"><h4>Pennsylvania College of Technology Williamsport, PA</h4></a>
                    </div>
                  </div>
                </div>
                <span class="eventContent">
                <p>On April 25, 2018 our chapter will celebrate 15 years on the Penn College Campus. Come Celebrate at the 2018 Alumni Weekend Friday, April 13 - Sunday April 15. This weekend will kick off Saturday morning with a service event helping the local community, Followed by a Chapter-Alumni social. After the Chapter-Alumni Social the Alumni Association will host their Annual Meeting to discuss its business. For any questions, please email Steve Kanaley at <a href="mailto:kanaley.steven@gmail.com">kanaley.steven@gmail.com</a></p>
                <br>
                <h4>Alumni Weekend Formal Dinner</h4>
                <p>The Alumni Weekend Formal Dinner will be held on Saturday, April 14 from 6 - 10PM. The event will be located at the Genetti Hotel's Ballroom in downtown Williamsport. Beginning the night, we will be having a social hour with hor d'oeuvres and music. For dinner, you will have your meal option that you chose on your RSVP. The meal options for the night are:</p>
                <ul>
                <li><b>San Diego Chicken</b> Stuffed chicken brest with sun-dried tomatoes, spinach, ham, &amp; Smoked Gouda cheese, topped with sun-dried tomato cream sauce</li>
                <li><b>10oz Prime Rib</b> cooked to perfection</li>
                <li><b>Vegetarian</b> Cheese Tortellini Tossed in a Pesto Cream Sauce with fresh spinach</li>
                </ul>
                  <br>
                <p>The price per ticket is $50.  Check back for more information.</p>
                <h2>Looking forward to seeing you there!</h2>
                <!-- <h2>Looking forward to see you there!</h2> -->
                </span>
              </div>
            </div>
            <div class="col-md-5">
                        <div class="form">
                        <?php
                          include('alumniWeekendForm.php');
                        ?>
                        <form id='alumniWeekendForm' action="resources.php" method="post" novalidate>
                          <h3 class="formTitle">Alumni Weekend Registration Form</h3>

                          <div class="group">
                            <input type="text" name="firstName" maxlength='32' required><span class="highlight"></span><span class="bar"></span>
                            <label>First Name</label>
                          </div>
                          <div class="group">
                            <input type="text" name="lastName" maxlength='32'><span class="highlight"></span><span class="bar"></span>
                            <label>Last Name</label>
                          </div>
                          <div class="group">
                            <input type="email" name="email" maxlength='41'><span class="highlight"></span><span class="bar"></span>
                            <label>Email</label>
                          </div>
                          <div class="group mdl-selectfield">
                            <h4 class="selectTitle">Pledge Class</h4>
                            <select name="pledgeClass">
                                <option value="" disabled selected>Select your option</option>
                                <option value="FF">Founding Father</option>
                                <option value="Alpha">Alpha</option>
                                <option value="Beta">Beta</option>
                                <option value="Gamma">Gamma</option>
                                <option value="Delta">Delta</option>
                                <option value="Epsilon">Epsilon</option>
                                <option value="Zeta">Zeta</option>
                                <option value="Eta">Eta</option>
                                <option value="Theta">Theta</option>
                                <option value="Iota">Iota</option>
                                <option value="Kappa">Kappa</option>
                                <option value="Lambda">Lambda</option>
                                <option value="Mu">Mu</option>
                                <option value="Nu">Nu</option>
                                <option value="Xi">Xi</option>
                                <option value="Omicron">Omicron</option>
                                <option value="Pi">Pi</option>
                                <option value="Rho">Rho</option>
                                <option value="Sigma">Sigma</option>
                                <option value="Tau">Tau</option>
                                <option value="Upsilon">Upsilon</option>
                                <option value="Phi">Phi</option>
                                <option value="Chi">Chi</option>
                                <option value="Psi">Psi</option>
                                <option value="Omega">Omega</option>
                                <option value="AlphaAlpha">Alpha Alpha</option>
                                <option value="AlphaBeta">Alpha Beta</option>
                                <option value="Alpha Gamma">Alpha Gamma</option>
                                <option value="Alpha Delta">Alpha Delta</option>
                                <option value="Alpha Epsilon">Alpha Epsilon</option>
                                <option value="Alpha Zeta">Alpha Zeta</option>
                                <option value="Alpha Eta">Alpha Eta</option>

                            </select>
                            <label>Pledge Class</label>
                          </div>
                          <div class="group check">
                            <h4>Attending Alumni Dinner Event</h4>
                              <input type="radio" name="events" value="Yes" /> Yes <br />
                              <input type="radio" name="events" value="No" /> No<br />
                          </div>
                          <div class="group">
                            <input type="text" name="guests" maxlength='5'><span class="highlight"></span><span class="bar"></span>
                            <label>Number of Guests</label>
                          </div>
                          <div class="group mdl-selectfield">
                            <h4 class="selectTitle">Your Meal Options</h4>
                            <select name="meal1">
                                <option value="" disabled selected>Select your option</option>
                                <option value="CK">San Diego Chicken</option>
                                <option value="RIB">10oz Prime Rib</option>
                                <option value="VEG">Vegetarian</option>

                            </select>
                            <label>Your Meal Options</label>
                          </div>
                          <div class="group mdl-selectfield">
                            <h4 class="selectTitle">Guest's Meal Options</h4>
                            <select name="meal2">
                                <option value="" disabled selected>Select your option</option>
                                <option value="CK">San Diego Chicken</option>
                                <option value="RIB">10oz Prime Rib</option>
                                <option value="VEG">Vegetarian</option>

                            </select>
                            <label>Guest's Meal Options</label>
                          </div>
                          <div class="group">
                            <input type="text" name="comment" maxlength='150'><span class="highlight"></span><span class="bar"></span>
                            <label>Allergies, dietary restrictions, etc</label>
                          </div>
                          <div class="group check">
                            <h4>Days Attending</h4>
                              <input type="checkbox" name="days[]" value="1" /> Friday <br />
                              <input type="checkbox" name="days[]" value="2" /> Saturday<br />
                              <input type="checkbox" name="days[]" value="3" /> Sunday<br />
                          </div>
                          <!-- <input type="submit" name='submit' class="button buttonBlue submit" /> -->
                          <button type='button' class="btn button buttonBlue disabled">CLOSED</button>


                        </form>
                        </div>
            </div>
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
                        <li><a href="../admin/admin.php">Admin Panel</a></li>
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
    <script src="../js/lightbox/jquery.magnific-popup.js"></script>
    <script src="../js/lightbox/lightbox.js"></script>
    <script src="../js/googleanalytics.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/alumniWeekend.js"></script>

  </body>
</html>
