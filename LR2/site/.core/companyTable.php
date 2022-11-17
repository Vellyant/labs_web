<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");

function  get_company_table($name_company_input,$region_input,
$description_input,
$annual_production_from,$annual_production_to)
{
    $data_post = '';

    if (!empty($name_company_input)) {
      $add = "enterprises.name like :company";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
    }
    if (!empty($region_input) && $region_input != "Выберите регион") {
      $add = "regions.name_region=:region";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
    }
    if (!empty($description_input)) {
      $add = "enterprises.description like :description";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
    }
    if (!empty($annual_production_from)) {
      $add = "enterprises.annual_production>= :annual_production_from";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
    }
    if (!empty($annual_production_to)) {
      $add = "enterprises.annual_production<= :annual_production_to";
      !empty($data_post) ? $data_post .= " AND $add" : $data_post = $add;
    }

    if (empty($data_post))
    $statement = 'SELECT enterprises.photo, enterprises.name,enterprises.description,enterprises.annual_production,regions.name_region 
   FROM enterprises INNER JOIN regions ON enterprises.id_region = regions.id';
  
  else
    $statement = 'SELECT enterprises.photo, enterprises.name,enterprises.description,enterprises.annual_production,regions.name_region 
  FROM enterprises LEFT JOIN regions ON enterprises.id_region = regions.id 
  WHERE ' . $data_post;
  //var_dump($name_company_input);
  $enterprises = database::prepare($statement);

  if ($name_company_input) {
    $name_company_input = "%$name_company_input%";
    $enterprises->bindParam('company', $name_company_input, PDO::PARAM_STR);
  }
  if ($description_input) {
    $description_input = "%$description_input%";
    $enterprises->bindParam('description', $description_input, PDO::PARAM_STR);
  }
  if (!empty($region_input) && $region_input != "Выберите регион") {
    $enterprises->bindParam('region', $region_input, PDO::PARAM_STR);
  }
  if ($annual_production_from) {
    $enterprises->bindParam('annual_production_from', $annual_production_from, PDO::PARAM_STR);
  }
  if ($annual_production_to) {
    $enterprises->bindParam('annual_production_to', $annual_production_to, PDO::PARAM_STR);
  }
  
  $enterprises->execute();
  $i = 0;

  while ($enterprise = $enterprises->fetch()) {
    $img[$i] = $enterprise['photo'];
    $name_company[$i] = $enterprise['name'];
    $region[$i] = $enterprise['name_region'];
    $description[$i] = $enterprise['description'];
    $annual_production[$i] = $enterprise['annual_production'];
    $i++;
  }
return [$img,$name_company,$region,$description, $annual_production];
}