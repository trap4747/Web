<?php
include("Connect.php");
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$pername = $_POST['Pername'];
$search_oblast = $_POST['search_oblast'];
$login = $_POST['Login'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$Flag = false;
$r = $db->query("SELECT id_user,login FROM users");
while ($row = $r->fetch_assoc())
    if($row['login'] == $login && $row['id_user'] != $_GET['id'])
    {
        $Flag = True;
    }
$tmp = $_GET['id'];
if(!$Flag)
{
    if(!is_null($name) && !is_null($surname) && !is_null($pername) &&
        !is_null($email) && !is_null($login) && !is_null($phone)) {

        $r = $db->query("UPDATE users set name = '$name', surname = '$surname', pername = '$pername', obl = '$search_oblast', login = '$login', email = '$email', phone = '$phone'
        where id_user = $tmp");
    }
    unset($Name, $Surname, $Pername, $obl, $Login, $Password1, $Email, $Phone, $Ask, $Answer);?>
    <div id="main">
        <h2>Зміна реєстраційних даних</h2>
        <p>Зміни виконані успішно)</p>
        <a href="MP.php?page=prof">Мій профіль</a>
    </div>
<?php }else {

    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=upprof">';
}?>
