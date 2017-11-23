<h2>Додавання прав адміністратора</h2>
<?php
if($_SESSION['name'])
{
include("Connect.php");
    $r = $db->query("select login, admin from users");
    while ($row = $r->fetch_assoc())
        if($_SESSION['name'] == $row['login'] && $row['admin'] == 1)
        {
            $r = $db->query("select id_user,login, admin from users");
            $i = 0;
            while ($row = $r->fetch_assoc()) {?>
                <form method="post" action="MP.php?page=adm_php&id=<?php echo $row['id_user'];?>&v=<?php echo $i;?>">
                <div style="display: inline" >
                    <div style="display: inline"><?php echo $row['login']?></div>
                   <select name="<?php echo 'ch'.$i;?>" <?php if($row['login'] == $_SESSION['name']) echo 'disabled';?> id="<?php echo 'ch'.$i;?>">
                       <option value="1">true</option>
                       <option value="0">false</option>
                   </select>
                    <script type="text/javascript">
                        var OptionTrue = document.getElementById("<?php echo 'ch'.$i;?>");
                        OptionTrue.options["<?php  if($row['admin'] == 1){ echo 0; }else{ echo 1;}?>"].selected = true;
                    </script>
                </div>
                <input type="submit" value="Змінити">
                </form>
            <?php $i++;
            }
        }else{
            echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
       }
}else{
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
}?>

