<h2>Дані про профіль</h2>
<?php
include "Connect.php";
$r = $db->query("SELECT * FROM users");
while ($row = $r->fetch_assoc())
    if($row['login'] == $_SESSION['name'])
    {?>
        <div>Ім’я:<?php echo $row['name'];?></div>
        <div>Прізвище:<?php echo $row['surname'];?></div>
        <div>По-батькові:<?php echo $row['pername'];?></div>
        <div>Область:<?php echo $row['obl'];?></div>
        <div>Телефон:<?php echo $row['phone'];?></div>
        <div>Email:<?php echo $row['email'];?></div>
        <a href="MP.php?page=upprof">Редагувати</a>
    <?php }?>