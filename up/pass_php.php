<h2>Изменение пароля</h2>
<?php
include "Connect.php";
    if(isset($_POST['submitted']) == 1 ) {
        $tmp = $_SESSION['name'];
        $tmp2 = md5($_POST['Password1']);
        $r = $db->query("update users set password = '$tmp2' where login = '$tmp'");
    }
    else{
        $r = $db->query("select * from users");
        while($row = $r->fetch_assoc())
            if($row['login'] == $_SESSION['name'] && $row['SicretQuest'] == $_POST['Ask'] && $row['Answer'] == $_POST['Answer']){?>

                <form method="post" action="MP.php?page=pass_php">
                <div>
                    <label>Пароль</label>
                    <input name="Password1" id="Password1" type="password">
                    <img id="Password1_img_true"  src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
                    <img id="Password1_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
                </div>
                <div>
                    <label>Повторіть пароль</label>
                    <input name="Password2" id="Password2" type="password" onkeyup="return TestPassword();">
                    <img id="Password2_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
                    <img id="Password2_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
                </div>
                    <button type="submit">Змінити</button>
                    <input type="hidden" id="submitted" name="submitted" value="1">
                </form>

    <?php }}
    if (isset($_POST['submitted']))
    { ?>
        <p>Пароль успішно змінений</p>
        <button><a style="color: #292929" href="MP.php?page=prof">Мій профіль</a></button>
    <?php } ?>