<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $name_company_input = htmlentities($_GET["input_company"], ENT_QUOTES, 'UTF-8');
  $region_input = $_GET["select_region"];
  $description_input = htmlentities($_GET["input_description"], ENT_QUOTES, 'UTF-8');
  $annual_production_from  = htmlentities($_GET["annual_production_from"], ENT_QUOTES, 'UTF-8');
  $annual_production_to = htmlentities($_GET["annual_production_to"], ENT_QUOTES, 'UTF-8');
}

$regions = regions::get_region();
$i = 0;$region_arr = array();
while ($region = $regions->fetch()) {
  $region_arr[$i] = $region['name_region'];
  $i++;
}

$enterprises = company::get_company_table(
  $name_company_input,
  $region_input,
  $description_input,
  $annual_production_from,
  $annual_production_to
);

?>

<main role="main">
  <div class="container container-fluid my-3 bg-light border border-success border-3">
    <p class="fs-2 my-4 text-center"><strong>Фильтрация</strong> </p>
    <form method="get">

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_company" name="input_company" value="<? echo $name_company_input ?>">
        <label for="input_company">Компания</label>
      </div>

      <div class="form-floating my-2 ">
        <select class="form-select" id="select_region" name="select_region" aria-label="Регион">

          <?php
          if (!empty($region_input) && $region_input != "Выберите регион") {
            echo "<option>Выберите регион</option><option selected> $region_input </option>";
          } else echo "<option selected>Выберите регион</option>";
          for ($i = 0; $i < count($region_arr); $i++)
            if ($region_input != $region_arr[$i])
              echo "<option value=\"$region_arr[$i]\">$region_arr[$i]</option>";
          ?>
        </select>
        <label for="select_region">Регион</label>
      </div>

      <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_description" name="input_description" value="<? echo $description_input ?>">
        <label for="input_description">Описание</label>
      </div>

      <p class="fs-5 my-2 text-center">Выработка в год</p>

      <div class="row g-2  my-2">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="annual_production_from" name="annual_production_from" value="<? echo $annual_production_from ?>">
            <label for="annual_production_from">От</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="annual_production_to" name="annual_production_to" value="<? echo $annual_production_to ?>">
            <label for="annual_production_to">До</label>
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
          <th scope="col">Картинка</th>
          <th scope="col">Компания</th>
          <th scope="col">Регион</th>
          <th scope="col">Описание</th>
          <th scope="col">выработка</th>
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
          echo "<tr><td><img src=\"$img_path\" width=\"100\">
        </td>
        <td>$name_company</td>
        <td>$region</td>
        <td>$description</td>
        <td>$annual_production</td></tr>";
        }

        ?>



      </tbody>
    </table>

  </div>

</main>

<script>
  $("#reset").click(function() {
    $('#input_company').val("");
    $('#input_description').val("");
    $('#annual_production_from').val("");
    $('#annual_production_to').val("");

    $('#select_region option:contains("Выберите регион")').prop('selected', true);
  });
</script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>