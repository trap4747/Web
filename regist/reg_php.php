<?php
	include("Connect.php");
	if(isset($_POST["Name"]))
		$Name = $_POST["Name"];
		$Name = stripcslashes($Name);
	else
		echo "no work";
	$Surname = $_POST['Surname'];
	$Surname = stripcslashes($Surname);
	$Pername  = $_POST['Pername'];
	$Pername = stripcslashes($Pername);
	$Login = $_POST['Login'];
	$Login = stripcslashes($Login);
	$Password1 = md5($_POST['Password1']);
	$obl = $_POST['search_oblast'];
	$Phone = $_POST['Phone'];
	$Email = $_POST['Email'];
	$Ask = $_POST['Ask'];
	$Answer = $_POST['Answer'];

	$Flag = false;
	$r = $db->query("SELECT login FROM users");
			while ($row = $r->fetch_assoc())
				if($row['login'] == $Login)
				{
						$Flag = True;
				}

	if(!$Flag){
			if(!is_null($Name) && !is_null($Surname) && !is_null($Pername) && 
					!is_null($Email) && !is_null($Login) && !is_null($Password1) && !is_null($Phone) && !is_null($Answer) && ($Ask != "Выберите вопрос")){
				$db->query("INSERT INTO users(name, surname, pername, obl,login, password, email, phone, SicretQuest, Answer)
				VALUES ('$Name', '$Surname', '$Pername', '$obl' ,'$Login', '$Password1', '$Email', '$Phone', '$Ask', '$Answer');");
			}
			unset($Name, $Surname, $Pername, $obl, $Login, $Password1, $Email, $Phone, $Ask, $Answer);?>
			<div id="main">
			<h2>Реєстрація</h2>
			<p>Реєстрація успішно пройдена)</br></br>Тепер ви можете увійти під своїм логіном.</p>
		</div>
		<?php
			
		}
		else{
			echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php?page=reg">';
			echo '<script language="javascript">alert("Логін зайнятий!");
					document.getElementById("Login_img_false").style.display = "inline";
					document.getElementById("Login_img_true").style.display = "none";
					document.getElementById("Name").value = "'.$Name.'";
					document.getElementById("Surname").value = "'.$Surname.'";
					document.getElementById("Pername").value = "'.$Pername.'";
					document.getElementById("Login").value = "'.$Login.'";
					document.getElementById("Phone").value = "'.$Phone.'";
					document.getElementById("Email").value = "'.$Email.'";
			</script>';

		}
?>