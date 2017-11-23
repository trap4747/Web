<?php include("Connect.php");

if(isset($_SESSION['name'])) {
    $r = $db->query("SELECT id_user, login, admin FROM users");
    $tmp = $_SESSION['name'];
    while ($row = $r->fetch_assoc())
        if ($row["login"] == $tmp && $row["admin"] == 1) {
            $tmp = $_GET['id'];
            $r = $db->query("delete from posts where id_posts = '$tmp'");
            echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=pokcar">';
        }
    else if($row["login"] == $tmp){
        $tmp = $_GET['id'];
        echo "lol";
        $r = $db->query("delete from posts where id_posts = '$tmp'");
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=mypost">';
    }
}else{?>
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
<?php }?>