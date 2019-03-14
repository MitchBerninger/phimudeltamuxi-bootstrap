<?php
//include the database connection
	include('dbconnect.php');
if($_SESSION['access'] != 'A'){
	include('login.php');
}
else{
$table = 'alumnievents1017';


//Search for matching records
$query = "SELECT * FROM $table;";
$result = mysqli_query($db, $query);
//$row = mysqli_fetch_row($result);

echo "<table border='1'>";
echo "<tr><th class='colEven'>Entry ID</th><th class='colOdd'>First Name</th><th class='colEven'>Last Name</th><th class='colOdd'>Email</th><th class='colEven'>Address</th><th class='colOdd'>City</th><th class='colEven'>State</th><th class='colOdd'>Country</th><th class='colEven'>Zip</th><th class='colOdd'>Guests</th><th class='colEven'>Days</th><th class='colOdd'>Camping</th><th class='colEven'>Comments</th></tr>";

if(mysqli_num_rows($result) == 0) {
	echo "<h3>Empty</h3>";
}

else{
	while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
echo "<tr>
	<td class='colEven'>$row[entryID]</td>
	<td class='colOdd'>$row[firstName]</td>
	<td class='colEven'>$row[lastName]</td>
	<td class='colOdd'>$row[email]</td>
	<td class='colEven'>$row[address]</td>
	<td class='colOdd'>$row[city]</td>
	<td class='colEven'>$row[state]</td>
	<td class='colOdd'>$row[country]</td>
	<td class='colEven'>$row[zip]</td>
	<td class='colOdd'>$row[guests]</td>
	<td class='colEven'>$row[days]</td>
	<td class='colOdd'>$row[camp]</td>
	<td class='colEven'>$row[comments]</td>
</tr>";
	}
	$row = mysqli_fetch_row($result);
}
echo "</table>";
echo "<div id='classKey'>
			<h4>Day Key</h4>
			<ol>
				<li>Friday</li>
				<li>Saturday</li>
				<li>Sunday</li>
			</ol>
			</div> ";

mysqli_close($db);
    }
?>
