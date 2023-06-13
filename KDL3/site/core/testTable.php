<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/core/db.php");

class test
{
 
  static function  get_test_table(
  $name_test_input,
  $sick_input,
  $description_input,
  $cost_from,
  $cost_to
  )
  {
    $data_post = '';
    


    if (!empty($name_test_input)) {
      $add = "analyzes.name like :test";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
      }
      if (!empty($sick_input)&& $sick_input!="Выберите болезнь") {
      $add = "sick.name_sick=:sickness";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
      }
      if (!empty($description_input)) {
      $add = "analyzes.description like :description";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
      }
      
      if (!empty($cost_from)) {
      $add = "analyzes.cost>= :cost_from";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
      }
      if (!empty($cost_to)) {
      $add = "analyzes.cost<= :cost_to";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
      }
  

    $statement = 'SELECT analyzes.img, analyzes.name,analyzes.description,analyzes.cost,sick.name_sick
  FROM analyzes LEFT JOIN sick ON analyzes.id_sick = sick.id';

    if (!empty($data_post))
      $statement .= " WHERE " . $data_post;
    $analyzes = database::prepare($statement);

    if ($name_test_input) {
      $name_test_input = "%$name_test_input%";
      $analyzes->bindParam('test', $name_test_input, PDO::PARAM_STR);
    }
    if ($description_input) {
      $description_input = "%$description_input%";
      $analyzes->bindParam('description', $description_input, PDO::PARAM_STR);
    }
    if (!empty($sick_input) && $sick_input != "Выберите болезнь") {
      $analyzes->bindParam('sickness', $sick_input, PDO::PARAM_STR);
    }
    if ($cost_from) {
      $analyzes->bindParam('cost_from', $cost_from, PDO::PARAM_STR);
    }
    if ($cost_to) {
      $analyzes->bindParam('cost_to', $cost_to, PDO::PARAM_STR);
    }

    $analyzes->execute();
    $i = 0;
    return $analyzes;
  }

}
