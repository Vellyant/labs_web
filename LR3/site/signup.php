<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

?>


<div class="container container-fluid my-5">
    <form method="post" action="signup.php">

        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_login" name="input_login" value="<? echo $input_login ?>">
            <label for="input_login">Логин</label>
        </div>

        <div class="form-floating my-2">
            <input type="password" class="form-control" id="input_password" name="input_password" value="<? echo $input_password ?>">
            <label for="input_password">Пароль</label>
        </div>

        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_fio" name="input_fio" value="<? echo $input_fio ?>">
            <label for="input_fio">ФИО</label>
        </div>
        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_dateborn" name="input_dateborn" value="<? echo $input_dateborn ?>">
            <label for="input_dateborn">дата рождения</label>
        </div>
        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_address" name="input_address" value="<? echo $input_address ?>">
            <label for="input_address">адрес</label>
        </div>

        <div class="form-floating my-2 ">
            <select class="form-select" id="select_gender" name="select_gender" aria-label="Пол">
                <option selected></option>
                <option value="1">Мужской</option>
                <option value="2">Женский</option>
                <option value="3">Ламинат</option>
                <option value="4">Хеликоптер</option>
            </select>
            <label for="select_gender">Пол</label>
        </div>

        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_hobby" name="input_hobby" value="<? echo $input_hobby ?>">
            <label for="input_hobby">Интересы</label>
        </div>
        <div class="form-floating my-2">
            <input type="text" class="form-control" id="input_link_vk" name="input_link_vk" value="<? echo $input_link_vk ?>">
            <label for="input_link_vk">Ссылка на профиль ВК</label>
        </div>
        <div class="form-floating my-2 ">
            <select class="form-select" id="select_blood_type" name="select_blood_type" aria-label="Группа крови">
                <option selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="select_blood_type">Группа крови</label>
        </div>
        <div class="form-floating my-2 ">
            <select class="form-select" id="select_rh_factor" name="select_rh_factor" aria-label="Резус-фактор">
                <option selected></option>
                <option value="1">Положительная</option>
                <option value="2">Отрицательная</option>
            </select>
            <label for="select_rh_factor">Резус-фактор</label>
        </div>
        <div class="d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-success mx-3">Зарегестрироваться</button>
            <button type="button" class="btn btn-danger mx-3" id="reset">Очистить</button>
        </div>
    </form>
</div>