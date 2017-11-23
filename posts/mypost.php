<h2>Мої пости</h2>
<script type="text/javascript">

    function confirmDelete() {
        if(confirm("Ви підтверджуєте видалення?")) {
            return true;
        } else {
            return false;
        }
    }

</script>
<?php include("Connect.php");
if(isset($_SESSION['name'])) {
    $tmp = $_SESSION['name'];
    $id_user = null;
    $r = $db->query("SELECT id_user, login FROM users");
    while ($row = $r->fetch_assoc())
        if ($row["login"] == $tmp) {
            $id_user = $row['id_user'];
        }

    $r = $db->query("SELECT id_posts, id_user, img, god_vupysk, ob_dvigatel, kuzov.type_kuzova as type_kuzov, korobka.type_korobki as type_korobki, color, brand.type_brenda as type_brenda, cost, valuta.type_valutu as valuta, state FROM posts
                    inner join brand on brand.id_brenda = posts.id_brenda
                    inner join valuta on valuta.id_valuta = posts.id_valuta
                    inner join kuzov on kuzov.id_kuzova = posts.id_kuzova
                    inner join korobka on korobka.id_korobki = posts.id_korobki");
    while ($row = $r->fetch_assoc())
    {
        if($id_user == $row['id_user'])
        {?>
            <!-- Box Latest Reviews -->
            <div class="box">
                <?php $ram = $row['id_posts'];?>
                <a href="MP.php?page=postfull&id=<?php echo $ram?>" class="image" style="float: left; margin: 7px 7px 7px 7px; display: inline; "><img src="<?php echo $row['img']?>" width="180" height="135"></a>
                <div class="info" style="font-size: 12px; padding-bottom: 1px;">
                    <h3><a href="MP.php?page=postfull&id=<?php echo $ram?>">Продам <?php echo $row['type_brenda'].' '.$row['god_vupysk']." року випуску. "; if($row['state'] == 1){ echo("Стан продажу: продається"); }else echo("Стан продажу: продано");?></a></h3>
                        <div>Ціна: <?php echo $row['cost'].' '.$row['valuta'];?></div>
                        <div>Тип кузова:  <?php echo $row['type_kuzov'];?></div>
                        <div>Коробка передач:  <?php echo $row['type_korobki'];?> </div>
                        <div>Клір:  <?php echo $row['color'];?></div>
                        <div>Об'єм двигуна: <?php echo $row['ob_dvigatel'];?></div>
                    </div>
                <div class="cl">&nbsp;</div>
                <a href="MP.php?page=postfull&id=<?php echo $ram?>" class="up">Показати повністю</a>
                <a href="MP.php?page=uppost&id=<?php echo $ram?>" class="up">змінити пост</a>
                <a onclick="return confirmDelete();" href="MP.php?page=deletpost&id=<?php echo $ram?>" class="up">Видалити пост</a>
                <div class="cl">&nbsp;</div>
            </div>
            <!-- End Box Latest Reviews -->
            <?php
        }
    }
}
?>