<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");
?>




<div class="container container-fluid my-5">
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Логин</label>
    </div>

    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Пароль</label>
    </div>

    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">ФИО</label>
    </div>
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">дата рождения</label>
    </div>
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">адрес</label>
    </div>

    <div class="form-floating my-2 ">
        <select class="form-select" id="select_region" name="select_region" aria-label="Пол">
            <option value="1">Мужской</option>
            <option value="2">Женский</option>
            <option value="3">Ламинат</option>
            <option value="4">Хеликоптер</option>
        </select>
        <label for="select_region">Пол</label>
    </div>

    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Интересы</label>
    </div>
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Ссылка на профиль ВК</label>
    </div>
    <div class="form-floating my-2 ">
        <select class="form-select" id="select_region" name="select_region" aria-label="Группа крови">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <label for="select_region">Группа крови</label>
    </div>
    <div class="form-floating my-2 ">
        <select class="form-select" id="select_region" name="select_region" aria-label="Резус-фактор">
            <option value="1">Положительная</option>
            <option value="2">Отрицательная</option>
        </select>
        <label for="select_region">Резус-фактор</label>
    </div>
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3">Зарегестрироваться</button>
        <button type="button" class="btn btn-danger mx-3" id="reset">Очистить</button>
      </div>
</div>