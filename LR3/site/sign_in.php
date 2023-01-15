<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");


require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

$result = action::signIn();

?>
<div class="container container-fluid my-5">
    <? echo $result;
    ?>
    <form method="post" action="sign_in.php">
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_login" name="input_login" value="<? echo $login?>">
        <label for="input_login">Логин</label>
    </div>

    <div class="form-floating my-2">
        <input type="password" class="form-control" id="input_password" name="input_password" value="<? echo $input_password ?>">
        <label for="input_password">Пароль</label>
    </div>
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3">Войти</button>
        <button type="button" class="btn btn-danger mx-3" id="reset">Очистить</button>
    </div>
    </form>
</div>