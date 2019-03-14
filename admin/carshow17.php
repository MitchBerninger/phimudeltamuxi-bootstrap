<?php
//include the database connection
	include('dbconnect.php');
if($_SESSION['access'] != 'A'){
	include('login.php');
}
else{
$table = 'carshow17';


//Search for matching records
$query = "SELECT * from $table;";
$result = mysqli_query($db, $query);
//$row = mysqli_fetch_row($result);

echo "<table border='1'>";
echo "<tr><th class='colEven'>Entry ID</th><th class='colOdd'>First Name</th><th class='colEven'>Last Name</th><th class='colOdd'>Email</th><th class='colEven'>Phone</th><th class='colOdd'>Year</th><th class='colEven'>Make</th><th class='colOdd'>Model</th><th class='colEven'>Class</th></tr>";

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
	<td class='colEven'>$row[phone]</td>
	<td class='colOdd'>$row[carYear]</td>
	<td class='colEven'>$row[carMake]</td>
	<td class='colOdd'>$row[carModel]</td>
	<td class='colEven'>$row[vclass]</td>


</tr>";
	}
	$row = mysqli_fetch_row($result);
}
echo "</table>";
echo "<div id='classKey'>
			<h4>Vehicle Class Key</h4>
			<ol>
				<li>Antique Car (1985 and prior)</li>
				<li>Antique Truck (1985 and prior)</li>
				<li>Modern Car (1986 and after)</li>
				<li>Modern Truck (1986 and after)</li>
				<li>Motorcycle</li>
			</ol>
			</div> ";

mysqli_close($db);
    }
?>
