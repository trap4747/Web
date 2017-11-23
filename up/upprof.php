<?php
if(isset($_SESSION['name'])) {

    $tmp = $_SESSION['name'];
    $id_user = null;
    $r = $db->query("SELECT * FROM `users`");
    while ($row = $r->fetch_assoc())
        if ($row["login"] == $tmp) {?>
<form onsubmit="return Test();" action="MP.php?page=upprof_php&id=<?php echo $row['id_user']; ?>" method="POST">
    <H2>Зміна реєстраційних даних</H2>
    <div>
        <label>Ім'я</label>
        <input name="Name" id="Name" type="text" value="<?php echo $row['name']; ?>" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");' >
        <img id="Name_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Name_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <label>Прізвище</label>
        <input name="Surname" id="Surname" type="text" value="<?php echo $row['surname']; ?>"onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
        <img id="Surname_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Surname_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <label>По-бфтькові</label>
        <input name="Pername" id="Pername" type="text" value="<?php echo $row['pername']; ?>" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
        <img id="Pername_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Pername_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>

    <div>
        <label>Область</label>
        <select name='search_oblast' id="search_oblast">
            <option value='Не важно'>Не важно</option>
            <option value='АР Крым'>АР Крым</option>
            <option value='Винницкая'>Винницкая</option>
            <option value='Волынская'>Волынская</option>
            <option value='Днепропетровская'>Днепропетровская</option>
            <option value='Донецкая'>Донецкая</option>
            <option value='Житомирская'>Житомирская</option>
            <option value='Закарпатская'>Закарпатская</option>
            <option value='Запорожская'>Запорожская</option>
            <option value='Ивано-Франковская'>Ивано-Франковская</option>
            <option value='Киевская'>Киевская</option>
            <option value='Кировоградская'>Кировоградская</option>
            <option value='Луганская'>Луганская</option>
            <option value='Львовская'>Львовская</option>
            <option value='Николаевская'>Николаевская</option>
            <option value='Одесская'>Одесская</option>
            <option value='Полтавская'>Полтавская</option>
            <option value='Ровенская'>Ровенская</option>
            <option value='Сумская'>Сумская</option>
            <option value='Тернопольская'>Тернопольская</option>
            <option value='Харьковская'>Харьковская</option>
            <option value='Херсонская'>Херсонская</option>
            <option value='Хмельницкая'>Хмельницкая</option>
            <option value='Черкасская'>Черкасская</option>
            <option value='Черниговская'>Черниговская</option>
            <option value='Черновицкая'>Черновицкая</option>
        </select>
        <script type="text/javascript">
            var op = document.getElementById("search_oblast");
            for (var i = 0;i < op.length;i ++){
                if(op.options[i].value == "<?php echo $row['obl'];?>") {

                    op.options[i].selected = true;
                }
            }
        </script>
        <img id="Search_oblast_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id=Search_oblast_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>

    <div>
        <label>Логін</label>
        <input name="Login" id="Login" type="text" value="<?php echo $row['login']; ?>" onkeyup='this.value=this.value.replace(/[^\w]/ig,"");'>
        <img id="Login_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Login_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <label>Телефон(+38(111)777-77-77)</label>
        <input name="Phone" id="Phone" type="text" value="<?php echo $row['phone']; ?>" onkeyup="return ValidPhone();">
        <img id="Phone_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Phone_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <label>Email</label>
        <input name="Email" id="Email" type="text" value="<?php echo $row['email']; ?>" onkeyup="return TestEmail();">
        <img id="Email_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Email_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <input type="submit" value="Змінити">
        <button ><a style="color: #292929" href="MP.php?page=pass">Змінити пароль</a></button>
    </div>
</form>
<?php }}?>