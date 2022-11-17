<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
function  get_regions_table()
{
  $region_arr=array();
$statement = 'SELECT * FROM regions';
$regions = database::prepare($statement);
$regions->execute();
//$regions->fetch(PDO::FETCH_ASSOC); //как массив
$i = 0;
while ($region = $regions->fetch()) {
  $region_arr[$i] = $region['name_region'];
  $i++;
}
return $region_arr;
}