<?php
include("Connect.php");
$tmp = $_GET['id'];
$brand = $_POST['brand'];
$god_vupysk = $_POST['year'];
$probeg = $_POST['probeg'];
$ob_dvigatel = $_POST['ob_dvigatel'];
$fueltype = $_POST['fueltype'];
$carbody = $_POST['carbody'];
$transmission = $_POST['transmission'];
$privod = $_POST['privod'];
$quantity_door = $_POST['quantity_door'];
$color = $_POST['color'];
$complect = $_POST['komplekt'];
$complect = stripslashes($complect);
$dop = $_POST['dop'];
$dop = stripslashes($dop);
$cost = $_POST['cost'];
$many = $_POST['many'];
$state = $_POST['st'];
$dt = date("y-m-d");
$img = null;
if(isset($_POST['updat']))
{
    if($_FILES['files']['error'][0] == 0){
        $ext = pathinfo($_FILES['files']['name'][0], PATHINFO_EXTENSION );
        $newname = time();
        $random = rand(100, 999);
        $name = $newname.$random.'.'.$ext;
        move_uploaded_file($_FILES['files']['tmp_name'][0], 'posts/uploads/'.$name);
        $img = 'http://localhost/Avtoportal/posts/uploads/'.$name;
    }
    else{
        $r = $db->query("select id_posts, img from posts");
        while($row = $r->fetch_assoc())
            if($row['id_posts'] == $_GET['id'] )
                $img = $row['img'];
    }
}

else{
    echo 'no work submit' ;
}

$db->query("update posts set
                    img = '$img',
                    god_vupysk = '$god_vupysk',
                    ob_dvigatel = '$ob_dvigatel',
                    id_topleva = '$fueltype',
                    id_kuzova = '$carbody',
                    id_korobki = '$transmission',
                    id_privoda = '$privod',
                    color = '$color',
                    quantity_door = '$quantity_door',
                    id_brenda = '$brand',
                    cost = '$cost',
                    id_valuta = '$many',
                    probeg = '$probeg',
                    komplekt = '$complect',
                    dop = '$dop',
                    state = '$state'
                    WHERE id_posts = $tmp");
?>
<h2>Зміна</h2>
<div>Зміна виконано</div>
