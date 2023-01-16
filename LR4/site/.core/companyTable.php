<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class company
{

  static function  get_company_table()
  {
    $statement = 'SELECT enterprises.id_company,enterprises.photo, enterprises.name,enterprises.description, enterprises.annual_production, regions.id ,regions.name_region 
  FROM enterprises LEFT JOIN regions ON enterprises.id_region = regions.id';
    $enterprises = database::prepare($statement);
    $enterprises->execute();
    return $enterprises;
  }

  static function  get_company_one($id): array
  {
    $statement = 'SELECT enterprises.id_company,enterprises.photo, enterprises.name,enterprises.description, enterprises.annual_production, enterprises.id_region 
  FROM enterprises WHERE enterprises.id_company=:id LIMIT 1';
    $enterprises = database::prepare($statement);
    $enterprises->bindValue(':id', $id);
    $enterprises->execute();
    $enterprise = $enterprises->fetchAll();
    if (!count($enterprise)) return [];
    return $enterprise[0];
  }

  public static function delete_company(int $id)
  {
    $statement = 'SELECT enterprises.id_company,enterprises.photo FROM enterprises WHERE enterprises.id_company=:id LIMIT 1';

    $query = database::prepare($statement);
    $query->bindValue(':id', $id);
    $query->execute();
    $enterprises = $query->fetchAll();
    $enterprise = $enterprises[0];
    if ($enterprise['photo'] != "no_image.png") {
      $filepath = $_SERVER['DOCUMENT_ROOT'] . "/site/inc/logo_enterprises/" . $enterprise['photo'];
      unlink($filepath);
    }
    
    $statement = 'DELETE FROM enterprises WHERE id_company=:id';
    $enterprises = database::prepare($statement);
    $enterprises->bindValue(':id', $id);
    $enterprises->execute();
  }

  static function  create_company(
    string $name_company_input,
    string  $image_input,
    int $region_input,
    string $description_input,
    int $annual_production
  ) {

    if ($image_input != "") {
      $statement = 'INSERT INTO enterprises (photo, name, id_region, description, annual_production)
      VALUES (:photo, :name, :id_region, :description, :annual_production)';
      $query = database::prepare($statement);
      $query->bindValue(':photo', $image_input);
    } else {
      $statement = 'INSERT INTO enterprises (name, id_region, description, annual_production)
    VALUES (:name, :id_region, :description, :annual_production)';
      $query = database::prepare($statement);
    }
    $query->bindValue(':name', $name_company_input);
    $query->bindValue(':description', $description_input);
    $query->bindValue(':annual_production', $annual_production);
    $query->bindValue(':id_region', $region_input);

    if (!$query->execute())
      throw new PDOException("Ошибка добавления");
  }

  static function  edit_company(
    int $id,
    string $name_company_input,
    string  $image_input,
    int $region_input,
    string $description_input,
    int $annual_production
  ) {

    $statement = "UPDATE `enterprises` SET photo = :photo, name=:name,
    id_region=:id_region,description=:description,annual_production=:annual_production WHERE id_company=:id_company";
    $query = database::prepare($statement);
    $query->bindValue(':id_company', $id);
    $query->bindValue(':photo', $image_input);
    $query->bindValue(':name', $name_company_input);
    $query->bindValue(':description', $description_input);
    $query->bindValue(':annual_production', $annual_production);
    $query->bindValue(':id_region', $region_input);
    if (!$query->execute())
      throw new PDOException("Ошибка редактирования");
  }
}
