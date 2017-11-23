<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 08.12.2015
 * Time: 20:37
 */
include("Connect.php");
$brand = $_POST['brand'];
$god_vupysk = $_POST['year'];
$probeg = $_POST['probeg'];
$ob_dvigatel = $_POST['ob_dvigatel'];
$fueltype = $_POST['fueltype'];
$carbody = $_POST['carbody'];
$transmission = $_POST['transmission'];
$privod = $_POST['privod'];
$quantity_door = $_POST['quantity_door'];
$col = $_POST['col'];
$complect = $_POST['complect'];
$complect = stripcslashes($complect);
$dop = $_POST['dop'];
$dop = stripcslashes($dop);
$cost = $_POST['cost'];
$many = $_POST['many'];
$dt = date("y-m-d");
if(isset($_POST['send-request']))
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
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=addpost">';
        exit();
    }
}

else{
    echo 'no work submit' ;
}
$img = 'http://localhost/Avtoportal/posts/uploads/'.$name;
if(isset($_SESSION['name'])) {
    $tmp = $_SESSION['name'];
    $id_user = null;
    $r = $db->query("SELECT id_user, login FROM users");
    while ($row = $r->fetch_assoc())
        if($row["login"] == $tmp)
        {
            $id_user = $row['id_user'];
        }
    if(!is_null($brand) && !is_null($god_vupysk) && !is_null($probeg) &&
        !is_null($ob_dvigatel) && !is_null($fueltype) && !is_null($carbody) && !is_null($transmission) && !is_null($privod) && !is_null($quantity_door && !is_null($col) && !is_null($many))){
        $db->query("INSERT INTO `posts` (`id_posts`, `id_user`, `img`, `god_vupysk`, `ob_dvigatel`, `id_topleva`, `id_kuzova`, `id_korobki`, `id_privoda`, `color`, `quantity_door`, `id_brenda`, `cost`, `id_valuta`, `probeg`, `komplekt`, `dop`,`date_add`, `state`)
                               VALUES (NULL, '$id_user', '$img', '$god_vupysk', '$ob_dvigatel' ,'$fueltype', '$carbody', '$transmission', '$privod', '$col', '$quantity_door', '$brand', '$cost', '$many', '$probeg', '$complect', '$dop','$dt','1');");

}
   echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=addpost_ok">';
}
?>