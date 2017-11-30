<?php
	@session_start();
	echo '<h1>'.$_SESSION['uid'].'&nbsp'.$_SESSION['uname'].'<br></h1>';
	unset($_SESSION['uid']);
	unset($_SESSION['uname']);
	unset($_SESSION['pid']);
	header('Location: newhomepage.php');
?>