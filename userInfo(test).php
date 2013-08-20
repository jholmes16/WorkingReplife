<?php
	include_once('db.php');
	
	$lasname = $_POST['lastname'];
	
	echo "<table>
			<tr>
				<th width='300' align='left'>Show</th>
				<th width='300' align='left'>Time</th>
			</tr>
		</table>";
	echo "<hr />";
	$query = "SELECT * FROM  tv_listings";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		if($row['show'] == ''){
			echo "<td>".$row[ID]."</td>";
			echo "None". " - " . $row['show'];
			echo "<br /><hr /><br />";
		}
		else{
			echo "<table>
			<tr>
				<td width='300' align='left'>".$row['show']."</td>
				<td width='300' align='left'>".$row['time']."</td>
			</tr>
		</table>";
			echo "<hr />";
		}
	}
	
?>