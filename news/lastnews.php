<?php
include("Connect.php");?>

<h2>Останні новини</h2>
<ul>
    <?php
    $r = $db->query("SELECT * from news ORDER BY `dt` DESC");
    $maxpost = 0;
    while ($row = $r->fetch_assoc() ) {?>
        <li>
            <?php $ram = $row['id_news'];
            if($maxpost == 4) break;
            $maxpost++;?>
            <a href="MP.php?page=newsfull&id=<?php echo $ram?>" class="image"><img src="<?php echo $row['img']?>" alt="" width="70" height="70"></a>
            <div class="info">
                <h5><a href="MP.php?page=newsfull&id=<?php echo $ram?>"><?php echo $row['title'];?></a></h5>
            </div>
            <div class="cl">&nbsp;</div>
        </li>
        <?php
    }?>

</ul>
<a href="MP.php?page=fullnews" class="up">Показати більше</a>
<div class="cl">&nbsp;</div>