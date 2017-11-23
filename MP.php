<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>Автопортал</title>
	<link rel="stylesheet" href="http://localhost/Avtoportal/css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/reg.js"></script>
</head>
<body>

<?php
session_start();
include("Connect.php");
function GetUser($db, $id){
	$count = "select * from users where login = '$id'";
	$res = mysqli_query($db, $count);
	$data = mysqli_fetch_assoc($res);
	return $data;
}

?>

<div class="shell">
	

	<div id="header">
	
		<h1 id="logo"><a href="http://localhost/Avtoportal/MP.php">autoportal your friend on the road</a></h1>
	
		
		
		<div id="nav">
			<ul>
			    <li><a href="MP.php?page=fullnews" class="active">Новини</a></li>
			    <li><a href="MP.php?page=pokcar">Купівля авто</a></li>
			</ul>
		</div>
	
		
	</div>
	
	
	
	<div id="content">

		<div id="sidebar">
			<?php if(isset($_SESSION['name'])){
				$r = $db->query("SELECT id_user,login, admin FROM users");
				$flag = null;
				while ($row = $r->fetch_assoc())
				if($row["login"] == $_SESSION['name'] && $row["admin"] == 1)
				{
					$flag = 1;
				}
				if($flag == 1 ){?>

				<div id="admInputlinks" class="admInputlinks">
					<a href="MP.php?page=upprof" style="display: block; width: 285px;"><?php $user = GetUser($db, $_SESSION['name']); echo $user['login']."(админ)";?></a>
					<div>
						<a href="MP.php?page=addnews" class="right" style="width: 135px">Добавити новину</a>
						<a href="MP.php?page=olusers" class="left" style="width: 150px">Всі користувачі</a>
						<a href="Output/out.php" class="right"  style="display: block; width: 285px;">Выхід</a>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
			<?php }else{?>
				<div id="Inputlinks" class="Inputlinks">
					<div class="cl">&nbsp;</div>
					<a href="MP.php?page=prof" style="display: block; width: 285px;"><?php $user = GetUser($db, $_SESSION['name']); echo $user['login'];?></a>
					<div>
						<a href="MP.php?page=addpost" class="left" >Додати пост</a>
						<a href="MP.php?page=mypost" class="left" >Мої пости</a>
						<a href="Output/out.php" class="right" >Выхід</a>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
		<?php }}else{?>
			<!-- Sign In Links -->
			<div class="links" id="links" >
				<div class="cl">&nbsp;</div>
				<a href="?page=in" class="left" >Вхід</a>
				<a href="?page=reg" class="right">Реєстрація</a>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Sign In Links -->
		<?php }?>
			<!-- Box Latest News -->
			<div class="box">
				<?php include"news/lastnews.php";?>
			</div>
			<!-- End Box Latest News -->
			
			<!-- Box Latest Reviews -->
			<div class="box">
				<?php include "posts/lastPosts.php";?>
			</div>
			<!-- End Box Latest Reviews -->
			
		</div>
		<!-- End Sidebar -->

		<!-- Main -->
		<div id="main">
			<?php
			if(isset($_GET['page'])) {
				switch ($_GET['page']) {
					case 'in':{
						include "input/in.php";
						break;
					}
					case 'reg': {
						include "regist/reg.php";
						break;
					}
					case 'reg_php':{
						include "regist/reg_php.php";
						break;
					}
					case 'addpost':{
						include "posts/addpost.php";
						break;
					}
					case 'addpost_php':{
						include "posts/addpost_php.php";
						break;
					}
					case 'addpost_ok':{
						include "posts/addpost_ok.php";
						break;
					}
					case 'mypost':{
						include "posts/mypost.php";
						break;
					}
					case 'postfull':{
						include "posts/postfull.php";
						break;
					}
					case 'deletpost':{
						include "posts/deletpost.php";
						break;
					}
					case 'uppost':{
						include "posts/uploads.php";
						break;
					}
					case 'uploads_php':{
						include "posts/uploads_php.php";
						break;
					}
					case 'pokcar':{
						include "car/pokcar.php";
						break;
					}
					case 'upprof':{
						include "up/upprof.php";
						break;
					}
					case 'upprof_php':{
						include "up/upprof_php.php";
						break;
					}
					case 'olusers':{
						include "admin/olusers.php";
						break;
					}
					case 'prof':{
						include "up/prof.php";
						break;
					}
					case 'pass':{
						include "up/pass.php";
						break;
					}
					case 'pass_php':{
						include "up/pass_php.php";
						break;
					}
					case 'addnews':{
						include "news/addnews.php";
						break;
					}
					case 'fullnews':{
						include "news/fullnews.php";
						break;
					}
					case 'newsfull':{
						include "news/newsfull.php";
						break;
					}
					case 'addnews_php':{
						include "news/addnews_php.php";
						break;
					}
					case 'delnews':{
						include "news/delnews.php";
						break;
					}
					case 'upnews':{
						include "news/upnews.php";
						break;
					}
					case 'upnews_php':{
						include "news/upnews_php.php";
						break;
					}
					case 'adm':{
						include "admin/adm.php";
						break;
					}
					case 'adm_php':{
						include "admin/adm_php.php";
						break;
					}
					case 'searchpost':{
						include "posts/searchpost.php";
						break;
					}
					case 'searchpost_php':{
						include "posts/searchpost_php.php";
						break;
					}
					default:{
						include "news/fullnews.php";
						break;
					}
				}
			} else{
				include "news/fullnews.php";
			}
			?>
		</div>
	
		
		<div class="cl">&nbsp;</div>
	</div>
</div></body></html>