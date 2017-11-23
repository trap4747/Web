<h2>Пошук<a style="float: right; color: #292929; padding-right: 7px " href="MP.php?page=searchpost">Пошук</a></h2>
<script type="text/javascript">

    function confirmDelete() {
        if(confirm("Ви підтверджуете видалення?")) {
            return true;
        } else {
            return false;
        }
    }

</script>
<?php
include("Connect.php");
$brand = $_POST['brand'];
$fueltype = $_POST['fueltype'];
$carbody = $_POST['carbody'];
$transmission = $_POST['transmission'];
$privod = $_POST['privod'];
$cost = $_POST['cost'];
$many = $_POST['many'];
$id_user = null;
$flag = false;
$flag1 = false;
$zp = null;
if($brand == 0 && $fueltype == 0 && $carbody == 0 && $transmission == 0 && $privod == 0)
{
    $zp = null;
}
else{
    $zp = "WHERE ";
    if($brand != 0)
    {
        $zp .= "posts.id_brenda = $brand ";
        $flag1 = true;
    }
    if($fueltype != 0) {
        if($flag1)
            $zp .= "AND ";
        $zp .= "id_topleva = $fueltype ";
    }
    if($carbody != 0) {
        if($flag1)
            $zp .= "AND ";
        $zp .= "posts.id_kuzova = $carbody ";
    }
    if($transmission != 0) {
        if($flag1)
            $zp .= "AND ";
        $zp .= "posts.id_korobki = $transmission ";
    }
    if($privod != 0) {
        if($flag1)
            $zp .= "AND ";
        $zp .= "id_privoda = $privod ";
    }
}


if(isset($_SESSION['name'])) {
    $tmp = $_SESSION['name'];
    $z = $db->query("SELECT id_user, login, admin FROM users");
    while ($row = $z->fetch_assoc())
        if ($row["login"] == $tmp) {
            if($row["admin"] == 1){
                $flag = true;
            }
            $id_user = $row['id_user'];
        }}
$flag1 = true;
$rz = $db->query("SELECT id_posts, id_user, img, id_topleva, god_vupysk, id_privoda, ob_dvigatel, kuzov.type_kuzova as type_kuzov, posts.id_kuzova,
                korobka.type_korobki as type_korobki,  posts.id_korobki, color,
                  brand.type_brenda as type_brenda, posts.id_brenda as id_brenda, cost, valuta.type_valutu as valuta, state, date_add FROM posts
                    inner join brand on brand.id_brenda = posts.id_brenda
                    inner join valuta on valuta.id_valuta = posts.id_valuta
                    inner join kuzov on kuzov.id_kuzova = posts.id_kuzova
                    inner join korobka on korobka.id_korobki = posts.id_korobki
                    $zp
                     ORDER BY `date_add` DESC");

while ($row = $rz->fetch_assoc()) {
    $flag1 = false;
        ?>
        <!-- Box Latest Reviews -->
        <div class="box">
            <?php $ram = $row['id_posts']; ?>
            <a href="MP.php?page=postfull&id=<?php echo $ram ?>" class="image"
               style="float: left; margin: 7px 7px 7px 7px; display: inline; "><img src="<?php echo $row['img'] ?>"
                                                                                    width="180" height="135"></a>

            <div class="info" style="font-size: 12px; padding-bottom: 1px;">
                <h3>
                    <a href="MP.php?page=postfull&id=<?php echo $ram ?>">Продам <?php echo $row['type_brenda'] . ' ' . $row['god_vupysk'] . ' ' . "года выпуска. ";
                        if ($row['state'] == 1) {
                            echo("Стан продажу: продається");
                        } else echo("Стан продажу: продано"); ?></a></h3>

                <div>Ціна: <?php echo $row['cost'] . ' ' . $row['valuta']; ?></div>
                <div>Тип кузова: <?php echo $row['type_kuzov']; ?></div>
                <div>Коробка передач: <?php echo $row['type_korobki']; ?> </div>
                <div>Колір: <?php echo $row['color']; ?></div>
                <div>Об’єм двигуна: <?php echo $row['ob_dvigatel']; ?></div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="MP.php?page=postfull&id=<?php echo $ram ?>" class="up">Показати повністю</a>
            <?php if ($flag) { ?>
                <a href="MP.php?page=uppost&id=<?php echo $ram ?>" class="up">Змінити пост</a>
                <a onclick="return confirmDelete();" href="MP.php?page=deletpost&id=<?php echo $ram ?>" class="up">Видалити
                    пост</a>
            <?php } else if ($id_user == $row['id_user']) { ?>
                <a href="MP.php?page=uppost&id=<?php echo $ram ?>" class="up">Змінити пост</a>
                <a onclick="return confirmDelete();" href="MP.php?page=deletpost&id=<?php echo $ram ?>" class="up">Видалити
                    пост</a>
            <?php } ?>
            <div class="cl">&nbsp;</div>
        </div>
        <!-- End Box Latest Reviews -->
        <?php
}
if($flag1)
    echo "Пошук не дав результатів.";
?>