 <?php
	$db = new mysqli("localhost", "root", "");
	$db->query("CREATE DATABASE IF NOT EXISTS avtoportal");
	$db->select_db("avtoportal");
    mysqli_set_charset($db, "utf8");
 if(mysqli_connect_errno())
 {
	 echo 'no connect';
 }
?>