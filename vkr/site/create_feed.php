<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");
$company = company::get_company();
$list_products = product::get_list_products();

$result = action_post::create_feed();
print_r($result) ;



?>

<main role="main">

<form action="" method="POST">
    <div class="container container-fluid my-5">
    <div class="form-floating my-2">
        <input type="text" class="form-control" id="input_name" name="input_name">
        <label for="input_name">Название фида</label>
      </div>

    <div class="form-floating my-2 ">
        <select class="form-select" id="select_company" name="select_company" aria-label="Компания">

          <?php

          echo "<option value='' selected>Выберите компанию</option>";

          while ($data = $company->fetch()) {

              $option = "<option value=\"" . $data['id_company'] . "\">" . $data['name'] . "</option>";
              echo $option;
            
          }

          ?>
        </select>
        <label for="select_company">Компания</label>
      </div>

      <div class="form-floating my-2 ">
        <select class="form-select" id="select_list_products" name="select_list_products" aria-label="Прайс-лист">

          <?php

          echo "<option value='' selected>Выберите прайс-лист</option>";

          while ($data = $list_products->fetch()) {

              $option = "<option value=\"" . $data['id_list'] . "\">" . $data['name'] . "</option>";
              echo $option;
            
          }

          ?>
        </select>
        <label for="select_list_products">Прайс-лист</label>
      </div>

    </div>

   
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3" name="action" value="create">Создать</button>
    </div>
    </form>


</main>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>