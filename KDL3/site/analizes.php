<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/core/index.php");


 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $name_test_input = htmlentities($_GET["input_test"], ENT_QUOTES, 'UTF-8');
  $sick_input = $_GET["select_sickness"];
  $description_input = htmlentities($_GET["input_description"], ENT_QUOTES, 'UTF-8');
  $cost_from  = htmlentities($_GET["cost_from"], ENT_QUOTES, 'UTF-8');
  $cost_to = htmlentities($_GET["cost_to"], ENT_QUOTES, 'UTF-8');
}

$sick = sick::get_sickness();
$i = 0;$sickness_arr = array();
while ($sickness = $sick->fetch()) {
  $sickness_arr[$i] = $sickness['name_sick'];
  $i++;
}

$analyzes = test::get_test_table(
  $name_test_input,
  $sick_input,
  $description_input,
  $cost_from,
  $cost_to
);
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php"); 
?>

<main role="main">


<div class="container border border-danger border-3 my-2">
    <p class="fs-2 my-4 text-center"><strong>Фильтр</strong> </p>
    <form method="get">

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_test" name="input_test" value="<? echo $name_test_input ?>">
        <label for="input_test">Анализ</label>
      </div>

      <div class="form-floating my-2 ">
        <select class="form-select" id="select_sickness" name="select_sickness" aria-label="Регион">

        <?php
          if (!empty($sick_input) && $sick_input != "Выберите болезнь") {
            echo "<option>Выберите болезнь</option><option selected> $sick_input </option>";
          } else echo "<option selected>Выберите болезнь</option>";
          for ($i = 0; $i < count($sickness_arr); $i++)
            if ($sick_input != $sickness_arr[$i])
              echo "<option value=\"$sickness_arr[$i]\">$sickness_arr[$i]</option>";
          ?>
        </select>
        <label for="select_sickness">Болезнь</label>
      </div>

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Описание</label>
      </div>

      <p class="fs-5 my-2 text-center">Цена</p>

      <div class="row g-2  my-2">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="cost_from" name="cost_from" value="<? echo $cost_from ?>">
            <label for="cost_from">От</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="cost_to" name="cost_to" value="<? echo $cost_to ?>">
            <label for="cost_to">До</label>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3">Применить фильтр</button>
        <button type="button" class="btn btn-danger mx-3" id="reset">Очистить фильтр</button>
      </div>
    </form>
  </div>

  <div class="container container-fluid my-5">
    <table class="table table-light  table-striped-columns">
      <thead>
        <tr>
          <th scope="col">Изображение</th>
          <th scope="col">Анализы</th>
          <th scope="col">Болезнь</th>
          <th scope="col">Описание</th>
          <th scope="col">Цена</th>
        </tr>
      </thead>
      <tbody>

        <?php

        while ($enterprise = $analyzes->fetch()) {

          $name_test = $enterprise['name'];
          $sickness = $enterprise['name_sick'];
          $description = $enterprise['description'];
          $cost = $enterprise['cost'];

          $img_path = "inc/pic/" . $enterprise['img'].".jpg";
          echo "<tr><td><img src=\"$img_path\" width=\"100\">
        </td>
        <td>$name_test</td>
        <td>$sickness</td>
        <td>$description</td>
        <td>$cost</td></tr>";
        }

        ?>



      </tbody>
    </table>

  </div>

</main>

<script>
  $("#reset").click(function() {
    $('#input_test').val("");
    $('#input_description').val("");
    $('#cost_from').val("");
    $('#cost_to').val("");

    $('#select_sickness option:contains("Выберите болезнь")').prop('selected', true);
  });
</script>

<?php
include "footer.html";
?>