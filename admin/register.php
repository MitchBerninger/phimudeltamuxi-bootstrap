<div class="errorBox">
<div class="alertText">
<?php
//include the database connection
	include('dbconnect.php');

//check to if the connection was successful
	if(!$db){
		echo "<div class='alertBox'>";
		echo"<div id='title'>";
		echo "<h2> Sorry we cannot process your request at this time.
		Please try again later...</h2><br />";
		echo "<a href=\"index.php?content=register\">Try again</a><br />";
		echo "<a href=\"index.php\">Home</a><br />";
		exit;
	}

//check for form submission	

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
//minimal validation
if(isset($_POST['username'], $_POST['password'], $_POST['confirmPassword'])){


		//Declare variables
		$userID = trim($_POST['userID']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$confirmPassword = trim($_POST['confirmPassword']);
		$access = 'U';
		$baduser = 0;  // A flag to detect bad data
		$tablename = 'users';

		//check if email was entered into the form
		if($username == ''){
			
			echo "<div class='alertBox'>";
			echo "<h2> You must enter an username. </h2><br /> \n";
			echo "</div>";
			$baduser = 1;
		}
				
				
		//check if password was entered into the form
		if($password == ''){
			
			echo "<div class='alertBox'>";
			echo "<h2> You must enter a password. </h2><br /> \n";
			echo "</div>";
			$baduser = 1;
		}
		//check if confirmPassword was entered into the form
		if($confirmPassword == ''){
			
			echo "<div class='alertBox'>";
			echo "<h2> You must enter your password again. </h2><br /> \n";
			echo "</div>";
			$baduser = 1;
		}
		//check password and confirm password match
		if($password != $confirmPassword){
		
			echo "<div class='alertBox'>";
			echo "<h2> Your passwords must match. </h2><br /> \n";
			echo "</div>";
			$baduser = 1;
		}
	
		
		
		//check to see if there was any bad data
		if($baduser==0){
			
			//See if the user already exists in the database
			//Use a SELECT query to find out if the user exists
			
			$query = "SELECT username from $tablename WHERE username = '$username';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result, MYSQL_ASSOC);
			if($row['username'] == $username){
				echo "<div class='alertBox'>";
				echo"<div id='title'>";
				echo "<h2> Sorry, this username is already in use.</h2><br />\n";
				echo "</div>";
				echo "</div>";
				$baduser=1;
			}
		}//end if
		
		//if valid user information INSERT into the database table
		if($baduser==0){
		
			$query = "INSERT INTO $tablename VALUES ('$userID','$username',SHA1('$password'),SHA1('$confirmPassword'),'$access');";
			//echo ($query);  //debugging technique 
			$result = mysqli_query($db, $query);
			if($result){
				
				//Create a session for the logged in user
				//Set a session variable
				$_SESSION['access'] = $access;

			
				echo "<div class='alertBox'>";
				echo"<div id='title'>";
				echo "<h2> Your registration was successful.</h2><br />\n";
				//echo "<a href=\"index.php\">Home</a><br />\n";
				//Redirect back to index/login
				echo "<META HTTP-EQUIV='Refresh' Content = '1; URL=admin.php?content=login'>";
				echo "</div>";
				echo "</div>";
				
				
			}
			else {
				echo "<div class='alertBox'>";
				echo"<div id='title'>";
				echo "<h2> Sorry, there was a problem processing request.</h2><br />\n";
				echo "<a href=\"admin.php?content=register\"><h3>Try again</h3></a><br />\n";
				echo "<a href=\"index.php\"><h3>Home</h3></a><br />\n";
				echo "</div>";
				echo "</div>";
			}
		
		} //end if
		
		
  } // end if miminal validation
} // end if form submission		
?>
</div>
</div>

<div class='infoBox'>
<div class='textBox'>
<div id='title'>
<h1>PMD Admin</h1>
<h3>Please enter the following information</h3>
</div>
<div id='bottomFormBox'>
<form action='admin.php' novalidate method='post' target='_self'>
<!-- novalidate = 'nocvalidate'-->
<ul>
<li><label>Username:</label><input type='text' name='username' maxlength='20'
value='<?php  if(isset($_POST['username'])){echo $_POST['username'];}  ?>' required></li>
<li><label>Password:</label><input type='password' name='password' maxlength='41' required></li>
<li><label>Confirm Password:</label><input type='password' name='confirmPassword' maxlength='41' required></li>
</ul>
<div id='formBox'>     
<input type='submit' class='miniButton' value='Submit' />
<input type='reset' class='miniButton' value='Reset' />
<input type='hidden' name='content' value='register'>
</form>
</div>
</div>
</div>
</div>


</div>
</div>