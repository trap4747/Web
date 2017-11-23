<?php
/**
 * Created by PhpStorm.
 * User: Æåíÿ
 * Date: 08.12.2015
 * Time: 11:56
 */
session_start();
unset($_SESSION['name']);

header('Location: ../MP.php');
?>