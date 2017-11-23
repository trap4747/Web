			<?php
			include("Connect.php");
			if($_POST) {
				$Login = $_POST['Login'];
				$Password = md5($_POST['Password']);
				$flag = false;
				$r = $db->query("SELECT Login, Password FROM users");
				while ($row = $r->fetch_assoc())
					if ($row['Login'] == $Login && $row['Password'] == $Password) {
						$flag = true;
					}
				if ($flag) {
					$_SESSION['name'] = $_POST['Login'];
					echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
				} else {
					echo '<script language="javascript">document.getElementById("NotIntput").style.display = "inline";</script>';
					echo '<script language="javascript">alert("Неправельный логин или пароль");</script>';
					echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=in">';
				}
				//unset($Login, $Password, $flag);
			}
			?>
			<H2>Вход</H2>
			<form action="#" method="POST">
				<label id="NotIntput" style="display: none;">Невірний логін або пароль.</br></label>
				<label>Логін</label>
				<input name = "Login" type="text">
				<label>Пароль</label>
				<input name= "Password" type="password">
				<input type="submit">
			</form>