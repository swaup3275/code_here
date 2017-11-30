<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
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
		        content: "UPDATE (Press tab)";
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
		$cnt=0;
		@session_start();
		if(isset($_POST['update']))
		{
			// Grab the score data from the POST
			if(isset($_SESSION['uid']))
			{
				$uid = $_SESSION['uid'];
				$pword = $_POST['pword'];
				$email = $_POST['email'];
				$cpword = $_POST['cpword'];
				$tnumb = $_POST['tnumb'];
				if(!empty($pword) || !empty($cpword) || !empty($email) || !empty($tnumb))
				{
					if ((!empty($cpword) && empty($pword)) || (empty($cpword) && !empty($pword)) || $cpword!=$pword)
						echo '<p> Passwords do not match.</p>';
					else if((!empty($cpword) && !empty($pword) && $cpword==$pword))
					{
					
						$dbc = mysqli_connect('localhost', 'root', '', 'problem')
							or die('Error connecting to MySQL server.');

						$query = "UPDATE user SET pword='$pword' WHERE uid='$uid'";
						$result = mysqli_query($dbc,$query)
							or die('Error querying database1.');
						echo '<p> Password Updated!.</p>';
						$cnt=1;
						mysqli_close($dbc);
					}
					else
						echo '<p> Password not Updated!.</p>';
					if(!empty($email))
					{
						$dbc = mysqli_connect('localhost', 'root', '', 'problem')
							or die('Error connecting to MySQL server.');

						$query = "UPDATE user SET email='$email' WHERE uid='$uid'";
						$result = mysqli_query($dbc,$query)
							or die('Error querying database1.');
						echo '<p> Email Updated!.</p>';
						$cnt=1;
						mysqli_close($dbc);
					}
					else
						echo '<p> Email not Updated!.</p>';
					if(!empty($tnumb))
					{
						$dbc = mysqli_connect('localhost', 'root', '', 'problem')
							or die('Error connecting to MySQL server.');

						$query = "UPDATE user SET tnumb='$tnumb' WHERE uid='$uid'";
						$result = mysqli_query($dbc,$query)
							or die('Error querying database1.');
						echo '<p> Telegram Number Updated!.</p>';
						mysqli_close($dbc);
						$cnt=1;
					}
					else
						echo '<p> Telegram Number not Updated!.</p>';
				}
				else
					echo '<p>Nothing chosen for update.</p>';
			}
			else
				echo '<p> Sorry! :( You need to <a href="signin">LOGIN</a> first</p>';
		}
	?>
	<?php if($cnt!=1){ ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td class="ais">E-mail:</td>
				<td><input type="text" name="email" size="30" maxlength="50" value="<?php if (!empty($email)) echo $email; ?>"></td>
			</tr>
			<tr>
				<td class="ais">New Password:</td>
				<td><input type="password" name="pword" value="<?php if (!empty($pword)) echo $pword; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Confirm New Password:</td>
				<td><input type="password" name="cpword" value="<?php if (!empty($cpword)) echo $cpword; ?>"></td>
			</tr>
			<tr>
				<td class="ais">Telegram Number:</td>
				<td><input type="text" name="tnumb" size="30" maxlength="50" value="<?php if (!empty($tnumb)) echo $tnumb; ?>"></td>
			</tr>
			<tr>
				<td class="ais"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php }; ?>
	</div>
	</div>
	</div>
</body>
</html>
