<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
  $progname=$_FILES['file_upload']['name'];
  $ofilename=substr($progname, 0, -2);
  echo 'Uploaded file is '.$progname.' '.$ofilename.'</br>';
  if(!move_uploaded_file($_FILES['file_upload']['tmp_name'],$_FILES['file_upload']['name'])){
    die('Error uploading file - check destination is writeable.');
}
$tl=1;
//$answer = shell_exec("sh compi.sh $progname");
//$answer = str_replace(' ', '', $answer);
$answer = shell_exec("gcc -o $ofilename $progname");
$answer = shell_exec("$ofilename");
$success="su";
//$answer = substr($answer, 0, 2);
echo strcmp($success,$answer)."</br>";
echo "</br> hereoutif ".$answer."hello</br>";
if($answer==$success)
{
	echo "</br> hereif ".$answer."</br>";
	$answer = shell_exec("gcc -o $ofilename $progname");
	$answer = shell_exec("sh proj.sh $tl $ofilename");
	echo "</br>".$answer."</br>";
	//$answer = shell_exec("fc fileo.txt just/fileout.txt");
	echo "</br>".$answer."</br>";
	if($answer=="")
		echo "</br>Accepted</br>";
	else
		echo "</br>Wrong Answer</br>";
}
else
	echo "</br>compilation error</br>";
?>

</body>
</html>
