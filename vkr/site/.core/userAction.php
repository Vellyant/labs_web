<?
class action
{
    public static function signUp(): array
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST')
            return [];

        if ($_SERVER['PHP_SELF'] != '/site/sign_up.php')
            return [];

        $error = logic::signUp(
            $_POST['input_login'],
            $_POST['input_password'],
            $_POST['input_fio']
        );


        if (!count($error)) {

            logic::signIn($_POST['input_login'], $_POST['input_password']);
        }

        return $error;
    }
    public static function signOut()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signOut'])) {

            logic::signOut();
        }
    }
    public static function signIn()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST' || $_POST["action"] != "signin")
            return;


        $result = logic::signIn($_POST['input_login'], $_POST['input_password']);

        return $result;
    }
}
