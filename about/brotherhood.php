<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phi Mu Delta at Penn College | The Brotherhood</title>

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
            <li class="active"><a href="#">About Us</a></li>
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
                <h1>The Brotherhood</h1>
            </div>
        </div>
        </div>
      </section>
          <div class="container brotherhood">
            <div class="row">
            <div class="col-sm-12">
                    <div class="paraBox">
                      <img id="lion" src="../images/pmdLion.png" />
                      <h4>We, as Phi Mu Delta, strive to provide service to the individual, justice to all mankind, and welcome every man as our brother. As gentlemen, we aim to build a better community while promoting leadership, professionalism, and Brotherhood through daily interactions.</h4>
                    </div>
            </div>
        </div>
      </div>
      <div class="accentBox">
          <div class="container brotherhood">
          <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4 subBox">
                        <a class="image-popup-zoom" href="../images/retreatBalance.jpg" >
                            <img class="img-rounded" src="../images/retreatBalance.jpg">
                          </a>

                          <div class="caption">
                            <h3>Brotherhood Retreat</h3>
                              <p>Every fall semester, our chapter hosts a Brotherhood Retreat to help strengthen relationships and develop leadership skills. The reatreat is a weekend long adventure, camping in the woods away from campus.</p>
                          </div>
                </div>
                <div class="col-sm-4 subBox">
                    <a class="image-popup-zoom" href="../images/manicures.jpg" >
                            <img class="img-rounded" src="../images/manicures.jpg">
                          </a>

                          <div class="caption">
                            <h3>Man-i-Cures for a Cause</h3>
                              <p>An annual service event hosted by Penn Collge's Greek Senate that supports several charities. Members of Penn College's Greek Life paint finger nails of donors in a color that represents the charities of their choice.</p>
                          </div>
                </div>
                <div class="col-sm-4 subBox">
                    <a class="image-popup-zoom" href="../images/meeting.jpg" >
                            <img class="img-rounded" src="../images/meeting.jpg">
                          </a>

                          <div class="caption">
                            <h3>Chapter Meetings</h3>
                              <p>Every Sunday at 7 pm we host our Chapter Meeting. We discuss fraternity business, service oppertunities, programming events, and many other topics.</p>
                          </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    <div class="fullimgbox">
    <div class="container brotherhood">
        <div class="row">
            <div class="col-sm-8">
                <div class="col-xs-4 fact">
                    <h1><b>32</b></h1>
                    <h2>Members</h2>
                    <h2>Strong</h2>
                </div>
                <div class="col-xs-4 fact">
                    <h1><b>120+</b></h1>
                    <h2>Chapter</h2>
                    <h2>Alumni</h2>
                </div>
                <div class="col-xs-4 fact">
                    <h1><b>15</b></h1>
                    <h2>Years at</h2>
                    <h2>Penn College</h2>
                </div>
            </div>
            <div class="col-sm-4 factside ">
                <!-- Button trigger modal -->
                    </a><button type="button" class="btn btn-primary btn-lg btn-side" data-toggle="modal" data-target="#rosterModal">Chapter Roster</button>

                    <!-- Modal -->
                    <div class="modal fade" id="rosterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Spring 2017 Chapter Roster</h4>
                          </div>
                          <div class="modal-body">
                            <?php
                    $row = 1;
                    if (($handle = fopen("../data/ChapterRoster.csv", "r")) !== FALSE) {

                        echo '<table class="table table-hover chapterRoster" border="0">';

                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $num = count($data);
                            if ($row == 1) {
                                echo '<thead><tr>';
                            }else{
                                echo '<tr>';
                            }

                            for ($c=0; $c < $num; $c++) {
                                //echo $data[$c] . "<br />\n";
                                if(empty($data[$c])) {
                                   $value = "&nbsp;";
                                }else{
                                   $value = $data[$c];
                                }
                                if ($row == 1) {
                                    echo '<th>'.$value.'</th>';
                                }else{
                                    echo '<td>'.$value.'</td>';
                                }
                            }

                            if ($row == 1) {
                                echo '</tr></thead><tbody>';
                            }else{
                                echo '</tr>';
                            }
                            $row++;
                        }

                        echo '</tbody></table>';
                        fclose($handle);
                    }
?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <a href="http://www.phimudelta.org/find-a-chapter.html" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-side">Other Chapters</button></a>
                <a class="btn btn-primary btn-lg btn-side" href="https://www.pct.edu/campuslife/studentactivities/greekLife.htm" target="_blank" role="button">Greek Life</a>

            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.tablesorter.min.js"></script>
    <script>$(function(){
            $(".chapterRoster").tablesorter();
            });
    </script>
    <script src="../js/lightbox/jquery.magnific-popup.js"></script>
    <script src="../js/lightbox/lightbox.js"></script>
    <script src="../js/googleanalytics.js"></script>
  </body>
</html>
