<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<!--<style type="text/css">
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
	</style>-->
	<style type="text/css">
		body {
		        height: 100%;
		        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/concrete-wall-background.jpg) center center fixed;
		        background-size: cover;
		}

		.shade {
		        overflow: auto;
		        position: absolute;
		        top: 0;
		        left: 0;
		        bottom: 0;
		        right: 0;
		        background-image: linear-gradient( 150deg, rgba(0, 0, 0, 0.65), transparent);
		}

		.blackboard {
		        position: relative;
		        width: 640px;
		        margin: 7% auto;
		        border: tan solid 12px;
		        border-top: #bda27e solid 12px;
		        border-left: #b19876 solid 12px;
		        border-bottom: #c9ad86 solid 12px;
		        box-shadow: 0px 0px 6px 5px rgba(58, 18, 13, 0), 0px 0px 0px 2px #c2a782, 0px 0px 0px 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
		        background-image: radial-gradient( circle at left 30%, rgba(34, 34, 34, 0.3), rgba(34, 34, 34, 0.3) 80px, rgba(34, 34, 34, 0.5) 100px, rgba(51, 51, 51, 0.5) 160px, rgba(51, 51, 51, 0.5)), linear-gradient( 215deg, transparent, transparent 100px, #222 260px, #222 320px, transparent), radial-gradient( circle at right, #111, rgba(51, 51, 51, 1));
		        background-color: #333;
		}

		.blackboard:before {
		        box-sizing: border-box;
		        display: block;
		        position: absolute;
		        width: 100%;
		        height: 100%;
		        background-image: linear-gradient( 175deg, transparent, transparent 40px, rgba(120, 120, 120, 0.1) 100px, rgba(120, 120, 120, 0.1) 110px, transparent 220px, transparent), linear-gradient( 200deg, transparent 80%, rgba(50, 50, 50, 0.3)), radial-gradient( ellipse at right bottom, transparent, transparent 200px, rgba(80, 80, 80, 0.1) 260px, rgba(80, 80, 80, 0.1) 320px, transparent 400px, transparent);
		        border: #2c2c2c solid 2px;
		        content: "Sign Up (Press tab)";
		        font-family: 'Permanent Marker', cursive;
		        font-size: 2.2em;
		        color: rgba(238, 238, 238, 0.7);
		        text-align: center;
		        padding-top: 20px;
		}

		.form {
		        padding: 70px 20px 20px;
		}

		p {
		        position: relative;
		        margin-bottom: 1em;
		        font-family: 'Permanent Marker', cursive;
		        font-size: 1.2em;
		        color: rgba(238, 238, 238, 0.7);
		        text-align: center;
		}

		label {
		        vertical-align: middle;
		        font-family: 'Permanent Marker', cursive;
		        font-size: 1.6em;
		        color: rgba(238, 238, 238, 0.7);
		}

		p:nth-of-type(5) > label {
		        vertical-align: top;
		}

		input,
		textarea {
		        vertical-align: middle;
		        padding-left: 10px;
		        background: none;
		        border: none;
		        font-family: 'Permanent Marker', cursive;
		        font-size: 1.2em;
		        color: rgba(238, 238, 238, 0.8);
		        line-height: 1.5em;
		        outline: none;
		}

		textarea {
		        height: 120px;
		        font-size: 1.4em;
		        line-height: 1em;
		        resize: none;
		}

		input[type="submit"] {
		        cursor: pointer;
		        color: rgba(238, 238, 238, 0.7);
		        line-height: 1.5em;
		        padding: 0;
		}

		input[type="submit"]:focus {
		        background: rgba(238, 238, 238, 0.2);
		        color: rgba(238, 238, 238, 0.2);
		}

		::-moz-selection {
		        background: rgba(238, 238, 238, 0.2);
		        color: rgba(238, 238, 238, 0.2);
		        text-shadow: none;
		}

		::selection {
		        background: rgba(238, 238, 238, 0.4);
		        color: rgba(238, 238, 238, 0.3);
		        text-shadow: none;
		}
		table{
			text-align: center;
			padding-left: 2%;
			font-family: 'Permanent Marker', cursive;
		    font-size: 1.1em;
		    color: rgba(238, 238, 238, 0.7);
		}
	</style>
</head>
<body>
	<div class="shade">
        <div class="blackboard">
            <div class="form">
	<?php
		$cnt=11;
		if(isset($_POST['signup'])) {
			// Grab the score data from the POST
			$fname = $_POST['fname'];
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pword = $_POST['pword'];
			$cpword = $_POST['cpword'];
			$tnumb = $_POST['tnumb'];
			if (!empty($fname) && !empty($uname) && !empty($email) && !empty($pword) && !empty($cpword) && $pword==$cpword)
			{
			
				$dbc = mysqli_connect('localhost', 'root', '', 'problem')
					or die('Error connecting to MySQL server.');

				$query = "SELECT * FROM user WHERE uname='$uname'";
				$result = mysqli_query($dbc,$query)
					or die('Error querying database1.');
				$cnt=0;
				while($row=mysqli_fetch_array($result))
				{
					$cnt++;
					break;
				}
				if($cnt==0)
				{
					$query = "INSERT INTO user (fname, uname,email, pword,tnumb,uid,solved,attempted) " .
						"VALUES ('$fname','$uname','$email','$pword','$tnumb',0,0,0)";

					$result = mysqli_query($dbc, $query)
						or die('Error querying database2.');

					$query = "CREATE TABLE ".$uname." (status varchar(20),langu varchar(20),pid int,pname varchar(255))";
					$result = mysqli_query($dbc, $query)
						or die('Error querying database3.');

					mysqli_close($dbc);
					// Confirm success with the user
					echo '<p><strong>fname:</strong> ' . $fname . '<br /></p>';
					echo '<p><strong>uname:</strong> ' . $uname . '</p>';
					echo '<p><strong>email:</strong> ' . $email . '</p>';
					echo '<p><strong>pword:</strong> ' . $pword . '</p>';
					echo '<p><strong>cpword:</strong> ' . $cpword . '</p>';
					echo '<p><strong>tnumb:</strong> ' . $tnumb . '</p>';
					echo '<p>Go to<a href="newhomepage.php">homepage</a>.</p>';
					// Clear the score data to clear the form
					$fname = "";
					$uname = "";
					$email = "";
					$pword = "";
					$cpword = "";
					$tnumb = "";
				}
				else
				{
					echo '<p>USERNAME ALREADY EXIST IN DATABASE</p>';
					mysqli_close($dbc);
				}
			}
			else if($pword!=$cpword)
			{
				echo '<p>PASSWORDS DO NOT MATCH</p>';
			}
			else {
				echo '<p>Please enter all of the information.</p>';
			}
		}
		if($cnt!=0)
		{
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td class="ais">Full Name:</td>
				<td><input required="required" type="text" name="fname" size="30" maxlength="50" value="<?php if (!empty($fname)) echo $fname; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Userame:</td>
				<td><input required="required" type="text" name="uname" size="30" maxlength="50" value="<?php if (!empty($uname)) echo $uname; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Email:</td>
				<td><input required="required" type="text" name="email" size="30" maxlength="50" value="<?php if (!empty($email)) echo $email; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Password:</td>
				<td><input required="required" type="password" name="pword" value="<?php if (!empty($pword)) echo $pword; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Confirm Password:</td>
				<td><input required="required" type="password" name="cpword" value="<?php if (!empty($cpword)) echo $cpword; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Telegram No:</td>
				<td><input type="text" name="tnumb" size="30" maxlength="50" value="<?php if (!empty($tnumb)) echo $tnumb; ?>"></td>
			</tr>
			<tr>
				<td class="ais"></td>
				<td><input type="submit" name="signup" value="Sign Up"></td>
			</tr>
		</table>
	</form>
	<?php }; ?>
	</div>
	</div>
	</div>
</body>
</html>
