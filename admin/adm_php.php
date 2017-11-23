<?php
include "Connect.php";
if(isset($_GET) && isset($_POST)) {
    $log = $_GET['id'];
    $ch = $_POST['ch' . $_GET['v']];
    $r = $db->query("update users set admin = $ch WHERE id_user = $log");
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=olusers">';
}
?>