<?php 
include 'dbconn.php';
$result = $conn->query("SELECT fname FROM reg");
if ($result->num_rows > 0) {
	echo '<table border="1" width=50% align="center">';
	while ($row = $result->fetch_assoc()) {
		echo '<tr><td align="center">'.$row['fname'] . '</td></tr><br>';
	}
	echo '</table>';
}
?>
