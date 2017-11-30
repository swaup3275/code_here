<!DOCTYPE html>
<html>
<head>
	<title>Online Judge</title>
	<style type="text/css">
		textarea{
   			resize: none;
		}
		table {
		    width: 50%;
		    margin-left: auto;
		    margin-right: auto;
		    background-color: none;
		    border-style: solid;
		    color: #ffffff;
		    border-width: 0px;
		    border-color: #550f9d;
		}
		body {
			background-image:url(128-127.jpg);
			background-repeat:repeat;
		}
		.ais {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_POST['submit'])) {
			// Grab the score data from the POST
			$pname = $_POST['pname'];
			$ptext = $_POST['ptext'];
			$plevel = $_POST['plevel'];
			$pcat = $_POST['pcat'];
			$ptl = $_POST['ptl'];
			$ahname= $_POST['ahname'];//author's handle name
			if (!empty($pname) && !empty($ptext) && !empty($plevel) && !empty($pcat) && !empty($ptl) && !empty($ahname) && $_FILES['outputfile']['error']==0 && $_FILES['inputfile']['error']==0 && $_FILES['inputfile']['type'] == 'text/plain' && $_FILES['outputfile']['type'] == 'text/plain') {
			
				$dbc = mysqli_connect('localhost', 'root', '', 'problem')
					or die('Error connecting to MySQL server.');

				$query = "SELECT * FROM probtab ORDER BY pid DESC LIMIT 1";
				$result = mysqli_query($dbc,$query)
					or die('Error querying database.');
				$cnt=0;
				while($row=mysqli_fetch_array($result))
					$cnt=$row['pid'];
				$cnt++;

				$query = "INSERT INTO probtab (pname, ptext,plevel, pcat,ptl,ahname, pid,user_solved,attempted) " .
					"VALUES ('{$pname}', '{$ptext}', '$plevel', '{$pcat}',  " .
					"'$ptl','{$ahname}', 0,0,0)";

				$result = mysqli_query($dbc, $query)
					or die('Error querying database1.');

				mysqli_close($dbc);
				move_uploaded_file($_FILES["inputfile"]["tmp_name"], "problem/".$cnt."input.txt");
				move_uploaded_file($_FILES["outputfile"]["tmp_name"], "problem/".$cnt."output.txt");
				// Confirm success with the user
				echo '<p>Thanks for adding your new high score!'.$cnt.'</p>';
				echo '<p>Uploaded files are'.$_FILES['inputfile']['name'].'  '.$_FILES['outputfile']['name'].'</p>';
				echo '<p><strong>pname:</strong> ' . $pname . '<br />';
				echo '<strong>ptext:</strong> ' . $ptext . '</p>';
				echo '<strong>plevel:</strong> ' . $plevel . '</p>';
				echo '<strong>pcat:</strong> ' . $pcat . '</p>';
				echo '<strong>ptl:</strong> ' . $ptl . '</p>';
				echo '<strong>ahname:</strong> ' . $ahname . '</p>';
				// Clear the score data to clear the form
				$pname = "";
				$ptext = "";
				$plevel = "";
				$pcat = "";
				$ptl = "";
				$ahname = "";
			}
			else {
				echo '<p>Please enter all of the information and confirm file uploaded is .txt format</p>';
			}
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Attributes</th>
				<th>Values</th>
			</tr>
			<tr>
				<td class="ais">Problem Name:</td>
				<td><input type="text" name="pname" size="50" maxlength="50" value="<?php if (!empty($pname)) echo $pname; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Problem Text:</td>
				<td><textarea cols="39" rows="12" charswidth="50" name="ptext" value="<?php if (!empty($ptext)) echo  $ptext; ?>"></textarea></td>
			</tr>
			<tr>
				<td class="ais">Problem Level:</td>
				<td>
					<input type="radio" name="plevel" value="easy" checked="checked">&nbsp easy</br>
					<input type="radio" name="plevel" value="easy-medium">&nbsp easy-medium</br>
					<input type="radio" name="plevel" value="medium">&nbsp medium</br>
					<input type="radio" name="plevel" value="medium-hard">&nbsp medium-hard</br>
					<input type="radio" name="plevel" value="hard">&nbsp hard</br>
				</td>
			</tr>
			<tr>
				<td class="ais">Category:</td>
				<td><input type="text" name="pcat" size="50" placeholder="Write all categories separated by comma" value="<?php if (!empty($pcat)) echo $pcat; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Time Limit:</td>
				<td><input type="number" name="ptl" size="50" placeholder="atleast 1" min="1" max="10" value="<?php if (!empty($ptl)) echo $ptl; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Input file(.txt format only)</td>
				<td><input type="file" name="inputfile" id="inputfile"></td>
			</tr>
			<tr>
				<td class="ais">Output file(.txt format only)</td>
				<td><input type="file" name="outputfile" id="outputfile"></td>
			</tr>
			<tr>
				<td class="ais">Author's Handle Name:</td>
				<td><input type="text" name="ahname" size="50" placeholder="your handle name" value="<?php if (!empty($ahname)) echo $ahname; ?>"></td>
			</tr>
			<tr>
				<td class="ais"></td>
				<td><input type="submit" name="submit" value="Submit the problem"></td>
			</tr>
		</table>
	</form>
</body>
</html>
