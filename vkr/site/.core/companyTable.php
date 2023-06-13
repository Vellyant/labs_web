<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class company
{

  static function  get_company()
  {
     $statement = 'SELECT * FROM company WHERE company.user_id=:user_id';
     $company = database::prepare($statement);
     $id = $_SESSION['USER_ID'];
    
    $company->bindParam('user_id',  $id, PDO::PARAM_STR);
    
     $company->execute();

     return $company;
  }

  static function  get_one_company($id_company)
  {
     $statement = 'SELECT * FROM company WHERE company.user_id=:user_id AND company.id_company=:id_company';
     $company = database::prepare($statement);
     $id = $_SESSION['USER_ID'];
    
    $company->bindParam('user_id',  $id, PDO::PARAM_STR);
    $company->bindParam('id_company',  $id_company, PDO::PARAM_STR);
     $company->execute();
    $companys = $company->fetchAll();
     return $companys[0];
  }
  
}
