<div class="errorBox">
<div class="alertText">
<?php
//include the database connection
	include('dbconnect.php');
    
//check to see if the connection was successful
if(!$db){
		echo "<div class='alertBox error'>";
		echo "<div id='title'>";
		echo "<i class='fa fa-times-circle' aria-hidden='true'></i>";
		echo "<h3> Sorry we cannot process your request at this time.
		Please try again later...</h3><br />";
		echo "</div>";
		echo "</div>";
		exit;
	}

//check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//minimal form validation
	if(isset($_POST['username'], $_POST['password'])){

	//check if userid & password is in the database
		$userID = trim($_POST['userID']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$tablename = 'users';
		
		$query = "SELECT userID, username, password, access from $tablename WHERE username = '$username' AND password = SHA1('$password');";	
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_row($result);
		if(!$row){
			echo "<div class='alertBox error'>";
			echo "<div id='title'>";
			echo "<i class='fa fa-times-circle' aria-hidden='true'></i>";
			echo "<h3>Sorry, either the username or password you entered is incorrect.</h3>";
			echo "</div>";
			echo "</div>";
			}
		else{
			//Create a session variable
			$_SESSION['validUser'] = $row[0];
			$_SESSION['access'] = $row[3];
				echo "<div class='alertBox'>";
				echo "<div id='title'>";
				echo '<i class="fa fa-check-circle valid" aria-hidden="true"></i>';
				echo "<h3>Logging in...</h3>";
				echo "<META HTTP-EQUIV='Refresh' Content = '1; URL=admin.php?content=main'>";
				echo "</div>";
				echo "</div>";
		}

	}//end if minimal form validation
}//end if check for form submission
?>
</div>
</div>
<?php
if($_SESSION['access'] != 'A'){
	echo <<<EOD
	<div id="home">
    <div class="infoBox">
        <div class="textBox alertBox">
            <div id="title">
				<div class='iconBg'>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
                <h1 style="font-weight:600;margin-top:12px;">Sign In</h1>
            </div>
        <div id="bottomInfoBox">
    <div id="formBox">
    <form action="admin.php" novalidate method="post" target="_self">
			<div class='loginWrapper'>
				<div class='loginGroup'>
					<label>Username:</label>
					<input type="text" name="username" required="required" />
				</div>
				<div class='loginGroup'>
					<label>Password:</label>
					<input type="password" name="password" required="required" />
				</div>
			</div>
    <input type="submit" class="miniButton" value="Submit" />
    <input type="reset" class="miniButton" value="Reset" />
    <input type="hidden" name="content" value="login" />
    </form>
    </div>
    </div>
    </div>
    </div>
	</div>
EOD;
}
else{

}
?>
    
