<h2>Новини</h2>
<?php
$r = $db->query("SELECT * from news");

while ($row = $r->fetch_assoc()) {
    if ($_GET['id'] == $row['id_news']) {?>
        <h3><?php echo $row['title'];?></h3>
        <img  style="margin: 7px 7px 7px 7px;" src="<?php echo $row['img']?>" width="585" height="300">
        <div><?php echo $row['text']?></div>
        <div style="float: right;">Дата додавання: <?php echo $row['dt']?></div>
   <?php }}?>