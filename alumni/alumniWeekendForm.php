<?php
//include the database connection
	include('../admin/dbconnect.php');
	if(isset($_POST['submit'])){

		$entryID = null;
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$pledgeClass = $_POST['pledgeClass'];
		$events = $_POST['events'];
		$guests = $_POST['guests'];
		$meal1 = $_POST['meal1'];
		$meal2 = $_POST['meal2'];		
		$comment = $_POST['comment'];
		$days = implode(',', $_POST['days']);
		$tablename = 'alumniweekend19';

			$query ="INSERT INTO $tablename (entryID,firstName,lastName,email,pledgeClass,events,guests,meal1,meal2,comment,days) VALUES ('$entryID','$firstName','$lastName','$email','$pledgeClass','$events','$guests','$meal1','$meal2','$comment','$days');";
			//echo ($query);  //debugging technique
			if (mysqli_query($db,$query)) {
	        echo '<div class="alertBox"><i class="fa fa-check-circle valid" aria-hidden="true"></i><h3>Thank You!</h3> Your registration was successful!</div>';
	    } else {
	        echo '<div class="alertBox"><i class="fa fa-times-circle" aria-hidden="true"></i><h3>Oops!</h3> We encountered an issue, Please try again.</div>' ;
	    }

	    mysqli_close($db);
	    }
?>
