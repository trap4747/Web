<?php include("Connect.php");
if(isset($_SESSION['name'])) {
    $tmp = $_GET['id'];
    $r = $db->query("delete from news where id_news = '$tmp'");
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=fullnews">';
}
?>