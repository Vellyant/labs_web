<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");
if (!logic::authorized()) echo "<p class='text-center  my-5'>Доступно только для авторизированных пользователей</p>";
else require_once($_SERVER['DOCUMENT_ROOT'] . "/site/enterprises.php");
?>
