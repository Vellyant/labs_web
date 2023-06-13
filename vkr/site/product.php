<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $products = product::get_products_bd($_POST['id']);
}

$uniq_elements = product::get_unique_elements_list($_POST['id']);
while ($data = $uniq_elements->fetch())
  $uniq_element[] = $data['name'];
?>

<main role="main">



  <div class="container container-fluid my-5">
    <table class="table table-light  table-striped-columns">
      <thead>
        <tr>
          <th scope='col'>ID Товар</th>
          <?

          foreach ($uniq_element as $data)
            echo "<th scope='col'>" . $data .  "</th>";
          ?>
        </tr>
      </thead>
      <tbody>

        <?php
        $last = -1;
        while ($product = $products->fetch()) {

          $value = $product['value'];
          $id = $product['id_product'];
          $name = $product['name'];

          if ($last == $id) {
            echo "<td>$value</td>";
          } else {
            $element_data = $product['element_data'];
            if ($last != -1) {
              echo "</tr>";
            }
            echo "<tr>";
            echo "<td>$element_data</td>
          <td>$value</td>";
          }
          $count++;
          $last = $product['id_product'];
        }

        ?>



      </tbody>
    </table>

  </div>

</main>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/footer.php");
?>