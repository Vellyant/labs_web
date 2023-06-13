<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/core/index.php");
class sick
{

  private static function  get_sick_bd()
  {
    $statement = 'SELECT * FROM sick';
    $sick = database::prepare($statement);
    $sick->execute();
   
    return $sick;
  }

  public static function get_sickness()
  {
    return  self::get_sick_bd();;
  }
}
