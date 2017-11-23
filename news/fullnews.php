<h2>Новости</h2>
<script type="text/javascript">

    function confirmDelete() {
        if(confirm("Ви підтверджуєте видалення?")) {
            return true;
        } else {
            return false;
        }
    }

</script>
<?php
include "Connect.php";
$id_user = null;
if(isset($_SESSION['name'])) {
    $tmp = $_SESSION['name'];
    $r = $db->query("SELECT id_user, login, admin FROM users");
    while ($row = $r->fetch_assoc())
        if ($row["login"] == $tmp && $row['admin'] == 1) {
            $id_user = true;
        }
}
$r = $db->query("SELECT id_news, img, title, text, dt from news ORDER BY `dt` DESC");

while ($row = $r->fetch_assoc())
{?>
    <div class="box">
        <?php $ram = $row['id_news'];?>
        <a href="MP.php?page=newsfull&id=<?php echo $ram?>" class="image" style="float: left; margin: 7px 7px 7px 7px; display: inline; "><img src="<?php echo $row['img']?>" width="180" height="135"></a>
        <div class="info" style="font-size: 12px; padding-bottom: 1px;">
            <h4><a href="MP.php?page=newsfull&id=<?php echo $ram?>"><?php echo $row['title']?></a></h4>
            <div><?php echo $row['dt'];?></div>
        </div>
        <div class="cl">&nbsp;</div>
        <a href="MP.php?page=newsfull&id=<?php echo $ram?>" class="up">Показати повністю</a>
        <?php if($id_user == 1){?>
            <a href="MP.php?page=upnews&id=<?php echo $ram?>" class="up">змінити пост</a>
            <a onclick="return confirmDelete();" href="MP.php?page=delnews&id=<?php echo $ram?>" class="up">Видалити пост</a>
        <?php }?>
        <div class="cl">&nbsp;</div>
    </div>
<?php }?>