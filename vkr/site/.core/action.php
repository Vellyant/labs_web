<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class action_post
{
    static function  create_feed()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST')
            return;

        if ($_POST["action"] == "create") {
            
                $error = feed::create(
                    $_POST["select_company"],
                    $_POST["select_list_products"],
                    $_POST["input_name"]
                );
                $result = "Запись добавлена";
            

            if (count($error)) return $error;
            else return $result;
        }
    }
}
