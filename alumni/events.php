<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phi Mu Delta at Penn College | Alumni Events</title>

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
                <h1>Alumni Events</h1>
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
                  <h2>Family Weekend</h2>
                  <h3>Bring your loved ones and join your fellow Alumni at Penn College's Homecoming And Parent &amp; Family Weekend.</h3>
                </div>
                <div class="alertBox altBox">
                  <div class="row">
                    <div class="col-md-3">
                      <h4><b>Date</b></h4>
                    </div>
                    <div class="col-md-9">
                      <h4>October 6-8, 2017</h4>
                    </div>
                    <div class="col-md-3">
                      <h4><b>Location</b></h4>
                    </div>
                    <div class="col-md-9">
                        <a href="https://www.google.com/maps/place/Williamsport+South+%2F+Nittany+Mtn.+KOA+Holiday/@41.0473961,-76.9566559,17z" target="_blank"><h4>Nittany Mountain KOA</h4></a>
                    </div>
                    <div class="col-md-3">
                      <h4><b>Register By</b></h4>
                    </div>
                    <div class="col-md-9">
                      <h4>August 4, 2017</h4>
                    </div>
                  </div>
                </div>
                <span class="eventContent">
                <p>To expand our outreach and involvement as an alumni association our board has decided to offer a Family Alumni Weekend starting this fall, October 6-8, in addition to our Spring Alumni Weekend. With the short time frame in planning this event we have decided to take advantage of Penn College's Homecoming And Parent &amp; Family Weekend to kick start this tradition. Penn College is offering several actives through the weekend including a golf outing and an Oktoberfest Beer tasting.</p>
                <div class="col-md-12 textCentered">
                    <img class="img-rounded" src="https://www.pct.edu/files/newsAndEvents/homecoming/img/hfw2.svg">
                </div>
                <p>We are working with the Nittany Mountain KOA in Watsontown, PA for lodging rates. The Nittany Mountain KOA offering special rates for Columbus Day Weekend. The weekend is pack full of adult and family activities from pumpkin carving &amp; Caramel apple making to beer &amp; wine tasting for the adults and cider and root beer for the kids. (This is a pet friendly campground). If you are looking for a family fun weekend and some time to catch up with old colleges friends please join us for the Mu Xi Chapter First Annual Family Alumni Weekend on October 6-8, 2017.</p>
                <p>If you have any questions, please contact the Alumni Association Secretary, Steve Kanaley, at <a href="mailto:kanaley.steven@gmail.com">kanaley.steven@gmail.com</a>. If you interested or planning on attending please register here so we can reserve a block of camp sites. RSVP by August 4th if you plan on camping. Please check the <a href="https://www.facebook.com/MuXiAlumni/" target="_blank">Mu Xi Alumni Association Facebook page</a> and your emails for further updates.</p>
                </span>


                <a href="https://www.pct.edu/newsandevents/homecoming" target="_blank" class="button buttonBlue submit btn-primary btn">Schedule of Events</a>
                <h2>Looking forward to see you there!</h2>

              </div>
            </div>
            <div class="col-md-5">
                        <div class="form">
                        <?php
                          include('alumniEventsForm.php');
                        ?>
                        <form id='alumniEventsForm' action="events.php" method="post" novalidate>
                          <h3 class="formTitle">Family Weekend Registration Form</h3>

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
                          <div class="group">
                            <input type="text" name="address" maxlength='41'><span class="highlight"></span><span class="bar"></span>
                            <label>Address</label>
                          </div>
                          <div class="group">
                            <input type="text" name="city" maxlength='41'><span class="highlight"></span><span class="bar"></span>
                            <label>City</label>
                          </div>
                          <div class="group mdl-selectfield">
                            <h4 class="selectTitle">State</h4>
                            <select name="state">
                                <option value="" disabled selected>Select your option</option>
                                <<option value="XX">Outside the United States</option>
                                <option value="AK">Alaska</option>
                          			<option value="AL">Alabama</option>
                          			<option value="AR">Arkansas</option>
                          			<option value="AZ">Arizona</option>
                          			<option value="CA">California</option>
                          			<option value="CO">Colorado</option>
                          			<option value="CT">Connecticut</option>
                          			<option value="DC">District of Columbia</option>
                          			<option value="DE">Delaware</option>
                          			<option value="FL">Florida</option>
                          			<option value="GA">Georgia</option>
                          			<option value="HI">Hawaii</option>
                          			<option value="IA">Iowa</option>
                          			<option value="ID">Idaho</option>
                          			<option value="IL">Illinois</option>
                          			<option value="IN">Indiana</option>
                          			<option value="KS">Kansas</option>
                          			<option value="KY">Kentucky</option>
                          			<option value="LA">Louisiana</option>
                          			<option value="MA">Massachusetts</option>
                          			<option value="MD">Maryland</option>
                          			<option value="ME">Maine</option>
                          			<option value="MI">Michigan</option>
                          			<option value="MN">Minnesota</option>
                          			<option value="MO">Missouri</option>
                          			<option value="MS">Mississippi</option>
                          			<option value="MT">Montana</option>
                          			<option value="NC">North Carolina</option>
                          			<option value="ND">North Dakota</option>
                          			<option value="NE">Nebraska</option>
                          			<option value="NH">New Hampshire</option>
                          			<option value="NJ">New Jersey</option>
                          			<option value="NM">New Mexico</option>
                          			<option value="NV">Nevada</option>
                          			<option value="NY">New York</option>
                          			<option value="OH">Ohio</option>
                          			<option value="OK">Oklahoma</option>
                          			<option value="OR">Oregon</option>
                          			<option value="PA">Pennsylvania</option>
                          			<option value="PR">Puerto Rico</option>
                          			<option value="RI">Rhode Island</option>
                          			<option value="SC">South Carolina</option>
                          			<option value="SD">South Dakota</option>
                          			<option value="TN">Tennessee</option>
                          			<option value="TX">Texas</option>
                          			<option value="UT">Utah</option>
                          			<option value="VA">Virginia</option>
                          			<option value="VT">Vermont</option>
                          			<option value="WA">Washington</option>
                          			<option value="WI">Wisconsin</option>
                          			<option value="WV">West Virginia</option>
                          			<option value="WY">Wyoming</option>
                            </select>
                            <label>State</label>
                          </div>
                          <div class="group">
                            <input type="text" name="country" maxlength='41'><span class="highlight"></span><span class="bar"></span>
                            <label>Country (If outside the United States)</label>
                          </div>
                          <div class="group">
                            <input type="text" name="zip" maxlength='41'><span class="highlight"></span><span class="bar"></span>
                            <label>Postal Code</label>
                          </div>
                          <div class="group">
                            <input type="text" name="guests" maxlength='5'><span class="highlight"></span><span class="bar"></span>
                            <label>Number of Guests</label>
                          </div>
                          <div class="group check">
                            <h4>Days Attending</h4>
                              <input type="checkbox" name="days[]" value="1" /> Friday, October 6 <br />
                              <input type="checkbox" name="days[]" value="2" /> Saturday, October 7<br />
                              <input type="checkbox" name="days[]" value="3" /> Sunday, October 8<br />
                          </div>
                          <div class="group check">
                            <h4>Do you plan on camping?</h4>
                              <input type="radio" name="camp" value="Yes" /> Yes<br />
                              <input type="radio" name="camp" value="No" /> No<br />
                          </div>
                          <div class="group">
                            <input type="text" name="comments" maxlength='300' ><span class="highlight"></span><span class="bar"></span>
                            <label>Comments</label>
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
    <script src="../js/alumniEvents.js"></script>

  </body>
</html>
