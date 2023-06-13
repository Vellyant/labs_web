<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
$errors = action::signUp();
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

?>


<div class="container container-fluid my-5">

    <?
    foreach ($errors as $key => $value) {
        echo "$value <br>";
    }
    ?>
    <form method="post" action="sign_up.php">
        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_login" name="input_login" value="<? echo htmlspecialchars($_POST['input_login']) ?>">
            <label for="input_login">Логин</label>
        </div>
        <div class="form-floating my-2">
            <input type="password" class="form-control" id="input_password" name="input_password" value="<? echo htmlspecialchars($_POST['input_password']) ?>">
            <label for="input_password">Пароль</label>
        </div>

        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_fio" name="input_fio" value="<? echo htmlspecialchars($_POST['input_fio']) ?>">
            <label for="input_fio">ФИО</label>
        </div>
       
        <div class="d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-success mx-3">Зарегестрироваться</button>
            <button type="button" class="btn btn-danger mx-3" id="reset">Очистить</button>
        </div>
    </form>
</div>