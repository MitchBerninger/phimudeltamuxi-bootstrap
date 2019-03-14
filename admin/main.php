<?php
//include the database connection
	include('dbconnect.php');
if($_SESSION['access'] != 'A'){
	include('login.php');
}
else{echo <<<EOD
<h3>Welcome Admin</h3>
EOD;
    }
?>
