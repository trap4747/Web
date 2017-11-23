		<form onsubmit="return Test();" action="MP.php?page=reg_php" method="POST">
				<H2>Реєстрація</H2>
				<div>
					<label>Ім'я</label>
					<input name="Name" id="Name" type="text" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");' >
					<img id="Name_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id="Name_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>
				<div>
					<label>Прізвище</label>
					<input name="Surname" id="Surname" type="text" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
					<img id="Surname_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id="Surname_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>
				<div>
					<label>По-батькові</label>
					<input name="Pername" id="Pername" type="text" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
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
					<img id="Search_oblast_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id=Search_oblast_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>

				<div>
					<label>Логін</label>
					<input name="Login" id="Login" type="text" onkeyup='this.value=this.value.replace(/[^\w]/ig,"");'>
					<img id="Login_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id="Login_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>
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
				<div>
					<label>Телефон(+38(111)777-77-77)</label>
					<input name="Phone" id="Phone" type="text" onkeyup="return ValidPhone();">
					<img id="Phone_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id="Phone_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>
				<div>
					<label>Email</label>
					<input name="Email" id="Email" type="text" onkeyup="return TestEmail();">
					<img id="Email_img_true" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px.jpg" style="display:none;" width="15px"; height="15px"; >
					<img id="Email_img_false" src="http://localhost/Avtoportal/image/1305031403_psd-check-and-cross-icons12802151024-px — копия.jpg" width="15px"; height="15px"; style="display:none;">
				</div>
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
				<div>
					<input type="submit" value="Відправити">
				</div>
			</form>