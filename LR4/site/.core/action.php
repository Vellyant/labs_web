<?
class action
{

  public static function edit_table()
  {
    if ($_SERVER['REQUEST_METHOD'] != 'POST')
      return;

    if ($_POST["action"] == "add") {
      if ($_POST["id"] == "") {
        $error = logic::create(
          $_POST["input_company"],
          $_POST["input_image"],
          intval($_POST["select_region"]),
          $_POST["input_description"],
          intval($_POST["annual_production"])
        );
        $result = "Запись добавлена";
        
      } else {
        $error = logic::edit(
          intval($_POST["id"]),
          $_POST["input_company"],
          $_POST["input_image"],
          intval($_POST["select_region"]),
          $_POST["input_description"],
          intval($_POST["annual_production"])
        );
        $result = "Отредактировано";
      }
      if (count($error)) return $error;
      header("Location: /");
      return $result;
    }

    if ($_POST["action"] == "delete") {
      $error = logic::delete($_POST["id"]);
      if (count($error)) return $error;
  
      header("Location: /");
      return "Запись удалена";
      
    }

    return;
  }

  public static function get_edit_data(): array
  {
    if ($_SERVER['REQUEST_METHOD'] != 'POST')
      return [];
    $data = array();
    if ($_POST["action"] == "edit") {
      $data = company::get_company_one($_POST["id"]);
      return $data;
    }
    header("Location: /");
    return [];
  }
}
