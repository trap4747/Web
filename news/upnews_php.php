<?php
include "Connect.php";
$title = $_POST['titnew'];
$text = $_POST['textnew'];
$tmp = $_GET['id'];
$img = null;
if(isset($_POST['submitted']))
{
    if($_FILES['files']['error'][0] == 0){
        $ext = pathinfo($_FILES['files']['name'][0], PATHINFO_EXTENSION );
        $newname = time();
        $random = rand(100, 999);
        $name = $newname.$random.'.'.$ext;
        move_uploaded_file($_FILES['files']['tmp_name'][0], 'posts/uploads/'.$name);
        $img = 'http://localhost/Avtoportal/posts/uploads/'.$name;
    }
    else{
        $r = $db->query("select id_news,img from news");
        while($row = $r->fetch_assoc())
            if($row['id_news'] == $_GET['id'] )
                $img = $row['img'];
    }
}

else{
    echo 'no work submit' ;
}
$title = stripslashes($title);
$text = stripslashes($text);
$db->query("update news set img = '$img', title = '$title', text = '$text' WHERE id_news = $tmp");?>
<h2>Зміна</h2>
<div>Зміну виконано</div>