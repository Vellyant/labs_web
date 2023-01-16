<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
class regions
{

  private static function  get_regions_bd()
  {
    $statement = 'SELECT * FROM regions';
    $regions = database::prepare($statement);
    $regions->execute();
   
    return $regions;
  }

  public static function get_region()
  {
    return  self::get_regions_bd();;
  }
}
