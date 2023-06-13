<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

$company1 = company::get_company();

?>

<main role="main">
  

  <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-success mx-3">Создать компанию</button>
        <button type="button" class="btn btn-danger mx-3" id="reset">Редактировать компанию</button>
      </div>

  <div class="container container-fluid my-5">
    <table class="table table-light  table-striped-columns">
      <thead>
        <tr>
          <th scope="col">Название</th>
          <th scope="col">Компания</th>
          <th scope="col">Ссылка</th>
          <th scope="col">Описание</th>
          <th scope="col">Почта</th>
        </tr>
      </thead>
      <tbody>

        <?php

        while ($company = $company1->fetch()) {
          $name = $company['name'];
          $name_company = $company['company'];
          $url = $company['url'];
          $agency = $company['agency'];
          $email = $company['email'];

          echo "<tr><td>$name</td>
        <td>$name_company</td>
        <td>$url</td>
        <td>$agency</td>
        <td>$email</td></tr>";
        }

        ?>



      </tbody>
    </table>

  </div>

</main>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>