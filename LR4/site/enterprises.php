<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

$id_company =  htmlentities($_POST["id"], ENT_QUOTES, 'UTF-8');
$name_company_input = htmlentities($_POST["input_company"], ENT_QUOTES, 'UTF-8');
$region_input = $_POST["select_region"];
$description_input = htmlentities($_POST["input_description"], ENT_QUOTES, 'UTF-8');
$annual_production  = htmlentities($_POST["annual_production"], ENT_QUOTES, 'UTF-8');
$input_image = htmlentities($_POST["input_image"], ENT_QUOTES, 'UTF-8');


$enterprise = action::get_edit_data();
$id_company = $enterprise['id_company'];
$name_company_input = $enterprise['name'];
$region_input = $enterprise['id_region'];
$description_input = $enterprise['description'];
$annual_production = $enterprise['annual_production'];
$input_image =  $enterprise['photo'];

$result = action::edit_table();

$regions = regions::get_region();
$enterprises = company::get_company_table();

?>

<main role="main">
  <div class="container container-fluid my-3 bg-light border border-success border-3">

    <p class="fs-2 my-4 text-center"><strong>Добавить запись</strong> </p>
    <?
    if (is_array($result)) {
      foreach ($result as $arr)
        echo $arr . "<br>";
    } else echo $result;

    ?>
    <form method="POST">

      <input type='hidden' id="id" name='id' value='<? echo $id_company ?>' />
      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_company" name="input_company" value="<? echo $name_company_input ?>">
        <label for="input_company">Компания</label>
      </div>

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_image" name="input_image" value="<? echo $input_image ?>">
        <label for="input_image">Картинка</label>
      </div>

      <div class="form-floating my-2 ">
        <select class="form-select" id="select_region" name="select_region" aria-label="Регион">

          <?php

          echo "<option>Выберите регион</option>";

          while ($region = $regions->fetch()) {

            if ($region_input != $region['id']) {
              $option = "<option value=\"" . $region['id'] . "\">" . $region['name_region'] . "</option>";
              echo $option;
            } else {
              $option = "<option value=\"" . $region['id'] . "\" selected>" . $region['name_region'] . "</option>";
              echo $option;
            }
          }

          ?>
        </select>
        <label for="select_region">Регион</label>
      </div>

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Описание</label>
      </div>

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="annual_production" name="annual_production" value="<? echo $annual_production ?>">
        <label for="annual_production">Выработка в год</label>
      </div>


      <div class="d-flex justify-content-center my-4">
        <input type="submit" class="btn btn-success mx-3" name="action" value="save"  id="save">
        <input type="submit" class="btn btn-success mx-3" name="action" value="add">
        <button type="button" class="btn btn-danger mx-3" id="reset">Очистить</button>
      </div>
    </form>
  </div>


  <div class="container container-fluid my-5">
    <table class="table table-light  table-striped-columns">
      <thead>
        <tr>
          <th scope="col">Картинка</th>
          <th scope="col">Компания</th>
          <th scope="col">Регион</th>
          <th scope="col">Описание</th>
          <th scope="col">Выработка</th>
          <th scope="col">Редактировать</th>
          <th scope="col">Удалить</th>
        </tr>
      </thead>
      <tbody>

        <?php

        while ($enterprise = $enterprises->fetch()) {

          $name_company = $enterprise['name'];
          $region = $enterprise['name_region'];
          $description = $enterprise['description'];
          $annual_production = $enterprise['annual_production'];
          $img_path =  "inc/logo_enterprises/" . $enterprise['photo'];

          echo "<tr><form method='post'><input type='hidden' name='id' value='" . $enterprise["id_company"] . "' />";
          echo "<td><img src=\"$img_path\" width=\"100\">
        </td>
        <td>$name_company</td>
        <td>$region</td>
        <td>$description</td>
        <td>$annual_production</td>
        <td><input type='submit' class='btn btn-outline-primary' name='action' value='edit'></td>
        <td><input type='submit' class='btn btn-outline-primary' name='action' value='delete'></td>
        </form>
        </tr>";
        }

        ?>



      </tbody>
    </table>

  </div>

</main>

<script>
  $("#reset").click(function() {
    $('#id').val("");
    $('#input_company').val("");
    $('#input_description').val("");
    $('#annual_production').val("");
    $('#input_image').val("");

    $('#select_region option:contains("Выберите регион")').prop('selected', true);
  });


</script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>