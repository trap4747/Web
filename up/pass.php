<h2>Изменение пароля</h2>
<form method="post" action="MP.php?page=pass_php">
    <div>
        <label>Питання:</label>
        <select name="Ask" id="Ask" >
            <option selected disabled>Оберіть питання</option>
            <option value="Прозвище">Яке прізвисько було у вас в дитинстві?</option>
            <option value="Первый раз">Де ви в перший раз поцілувалися?</option>
            <option value="Улица">На якій вулиці ви жили в третьому класі?</option>
            <option value="Фамилия">Яка дівоче прізвище вашої бабусі?</option>
            <option value="Город">У якому місті живе ваш найближчий родич?</option>
        </select>
        <img id="Ask_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Ask_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <div>
        <label>Відповідь</label>
        <input name="Answer" id="Answer" type="text" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
        <img id="Answer_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
        <img id="Answer_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
    </div>
    <input type="submit" value="Перевірити">
</form>





