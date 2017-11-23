<?php include("Connect.php");
    $r = $db->query("SELECT id_posts,
                    posts.id_user as id_user,
                    users.name as name, users.surname as surname, users.pername as pername, users.obl as obl,users.email as email, users.phone as phone,
                    img,
                    god_vupysk,
                    ob_dvigatel,
                    toplevo.type_topleva as type_topleva,
                    kuzov.type_kuzova as type_kuzov,
                    korobka.type_korobki as type_korobki,
                    privod.type_privoda as type_privoda,
                    color,
                    quantity_door,
                    brand.type_brenda as type_brenda,
                    cost,
                    valuta.type_valutu as valuta,
                    probeg,
                    komplekt,
                    dop,
                    date_add,
                    state
                    FROM posts
                    inner join users on users.id_user = posts.id_user
                    inner join toplevo on toplevo.id_topleva = posts.id_topleva
                    inner join kuzov on kuzov.id_kuzova = posts.id_kuzova
                    inner join korobka on korobka.id_korobki = posts.id_korobki
                    inner join privod on privod.id_privoda = posts.id_privoda
                    inner join brand on brand.id_brenda = posts.id_brenda
                    inner join valuta on valuta.id_valuta = posts.id_valuta");
    while ($row = $r->fetch_assoc()) {
        if ($_GET['id'] == $row['id_posts']) {
            ?>
            <h2>Продам <?php echo $row['type_brenda'].' '.$row['god_vupysk']." року випуску.".' '; if($row['state'] == 1) echo("Стан продажу: продається"); else echo("Стан продажу: продано"); ?></a></h2>
            <img  style="float: left; margin: 7px 7px 7px 7px; display: inline; " src="<?php echo $row['img']?>" width="215" height="160">

            <div>Рік випуску авто: <?php echo $row['god_vupysk'];?></div>
            <div>Об'єм двигуна: <?php echo $row['ob_dvigatel'];?></div>
            <div>Тип палива: <?php echo $row['type_topleva'];?></div>
            <div>Тип кузова: <?php echo $row['type_kuzov']; ?></div>
            <div>Тип коробки передач: <?php echo $row['type_korobki']; ?> </div>
            <div>Тип приводу: <?php echo $row['type_privoda']; ?> </div>
            <div>Колір: <?php echo $row['color']; ?></div>
            <div>Кількість дверей: <?php echo $row['quantity_door']; ?></div>
            <div>Модель: <?php echo $row['type_brenda']; ?></div>
            <div>Ціна: <?php echo $row['cost'] . ' ' . $row['valuta']; ?></div>
            <div>Пробіг: <?php echo $row['probeg']; ?> км.</div>
            <div>Комплектація: <?php echo $row['komplekt']; ?></div>
            <div>Додатково: <?php echo $row['dop']; ?></div>

            <div>П.І.Б. <?php echo $row['surname'].' '.$row['name'].' '.$row['pername'];?></div>
            <div>Область: <?php echo $row['obl'];?></div>

            <div>Email: <?php echo $row['email'];?></div>
            <div>Телефон: <?php echo $row['phone'];?></div>

            <div>
                <div style="float: left"><a href="MP.php?page=pokcar">Назад</a></div>
                <div style="float: right">Дата створення поста: <?php echo $row['date_add']; ?></div>
            </div>
            <?php
        }
}?>
