<?php
include "Connect.php";
if(isset($_SESSION['name']))
{
$flag = false;
$z = $db->query("select login, admin from users");
while ($row = $z->fetch_assoc()){
if($_SESSION['name'] == $row['login'] && $row['admin'] == 1)
{
    $tmp = $_SESSION['name'];
    $title = $_POST['titnew'];
    $textnew = $_POST['textnew'];
    $dt = date("y-m-d");
    $id_user = null;
    if(isset($_POST['submitted']))
    {
        if($_FILES['files']['error'][0] == 0){
            $ext = pathinfo($_FILES['files']['name'][0], PATHINFO_EXTENSION );
            $newname = time();
            $random = rand(100, 999);
            $name = $newname.$random.'.'.$ext;
            move_uploaded_file($_FILES['files']['tmp_name'][0], 'posts/uploads/'.$name);
        }
        else{
            echo '<script>alert("Не вдалося завантажити картинку.")</script>';
            echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=addnews">';
            exit();
        }
    }
    else{
        echo 'no work submit' ;
    }
    $img = 'http://localhost/Avtoportal/posts/uploads/'.$name;

    $r = $db->query("SELECT id_user, login, admin FROM users");
    while ($row = $r->fetch_assoc())
        if($row['login'] == $tmp && $row['admin'] == 1)
        {
            $id_user = $row['id_user'];
        }
    $title = stripslashes($title);
    $textnew = stripslashes($textnew);
    $r = $db->query("INSERT INTO `news`(`id_news`, `id_user`, `img`, `title`, `text`, `dt`)
        values(NULL, '$id_user', '$img', '$title', '$textnew', '$dt')");?>

    <h2>Новини</h2>
    <p>Новина додана</p>
    <button><a style="color: #292929" href="MP.php?page=fullnews">Новини</a></button>

<?php
$flag = true;}}
if(!$flag){
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
}}else{
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
}?>