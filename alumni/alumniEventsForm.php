<?php
//include the database connection
	include('../admin/dbconnect.php');
	if(isset($_POST['submit'])){

		$entryID = null;
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$zip = $_POST['zip'];
		$guests = $_POST['guests'];
		$days = implode(',', $_POST['days']);
		$camp = $_POST['camp'];
		$comments = $_POST['comments'];
		$tablename = 'alumnievents1017';

			$query ="INSERT INTO $tablename (entryID,firstName,lastName,email,address,city,state,country,zip,guests,days,camp,comments) VALUES ('$entryID','$firstName','$lastName','$email','$address','$city','$state','$country','$zip','$guests','$days','$camp','$comments');";
			//echo ($query);  //debugging technique
			if (mysqli_query($db,$query)) {
	        echo '<div class="alertBox"><i class="fa fa-check-circle valid" aria-hidden="true"></i><h3>Thank You!</h3> Your registration was successful!</div>';
	    } else {
	        echo '<div class="alertBox"><i class="fa fa-times-circle" aria-hidden="true"></i><h3>Oops!</h3> We encountered an issue, Please try again.</div>' ;
	    }

	    mysqli_close($db);
	    }
?>
