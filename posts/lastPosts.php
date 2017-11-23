<?php
include("Connect.php");?>

<h2>Останні пропозиції</h2>
<ul>
<?php
$r = $db->query("SELECT id_posts, id_user, img, god_vupysk, ob_dvigatel, kuzov.type_kuzova as type_kuzov, korobka.type_korobki as type_korobki, color, brand.type_brenda as type_brenda, cost, valuta.type_valutu as valuta,DATE_FORMAT(`date_add`,'%d.%m.%Y') FROM posts
                    inner join brand on brand.id_brenda = posts.id_brenda
                    inner join valuta on valuta.id_valuta = posts.id_valuta
                    inner join kuzov on kuzov.id_kuzova = posts.id_kuzova
                    inner join korobka on korobka.id_korobki = posts.id_korobki
                    ORDER BY `date_add` DESC");
$maxpost = 0;
while ($row = $r->fetch_assoc() ) {?>
    <li>
        <?php $ram = $row['id_posts'];
            if($maxpost == 4) break;
            $maxpost++;?>
        <a href="MP.php?page=postfull&id=<?php echo $ram?>" class="image"><img src="<?php echo $row['img']?>" alt="" width="70" height="70"></a>
        <div class="info">
            <h5><a href="MP.php?page=postfull&id=<?php echo $ram?>">Продам <?php echo $row['type_brenda'].' '.$row['god_vupysk']?> року випуску</a></h5>
            <p>Рік випуску: <?php echo $row['god_vupysk'];?>  </p>
            <p>Тип кузова:  <?php echo $row['type_kuzov'];?>  </p>
            <p>Колір: <?php echo $row['color'];?></p>
        </div>
        <div class="cl">&nbsp;</div>
    </li>
<?php
}?>
</ul>
<a href="MP.php?page=pokcar" class="up">Показати більше</a>
<div class="cl">&nbsp;</div>