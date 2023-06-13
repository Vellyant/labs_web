<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");


$list_pr = product::get_list_products();
?>

<main role="main">
  

  <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3">Создать прайс-лист</button>
      </div>

  <div class="container container-fluid my-5">
    <table class="table table-light  table-striped-columns">
      <thead>
        <tr>
          <th scope="col">Название</th>
          <th scope="col">категория YML</th>
          <th scope="col">Открыть</th>
        </tr>
      </thead>
      <tbody>

        <?php

        while ($list = $list_pr->fetch()) {

          $name = $list['name'];
          $nameYML = $list['nameYML'];
          echo "<tr><form action='product.php' method='post'><input type='hidden' name='id' value='" . $list["id_list"] . "' />";
          echo "<td>$name</td>
        <td>$nameYML</td>
        <td><input type='submit' class='btn btn-outline-primary' name='open' value='Открыть'></td></tr>
        </form>";
        }

        ?>



      </tbody>
    </table>

  </div>

</main>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>