<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class logic
{

    public static function signIn(string $login, string $password) :string
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return 'Вы авторизованы';
        }

        $user = users::get_login($login);

        if ($user == null) {
            return "Пользователь не найден";
        }

        if (password_hash($password, PASSWORD_BCRYPT) != $user['password']) {
            return "Неверный пароль";
        }

        $_SESSION['USER_ID'] = $user['id_user'];
        return '';
    }

    public static function signOut()
    {
        unset($_SESSION['USER_ID']);
    }


    public static function authorized()
    {
        return intval($_SESSION['USER_ID']) >0;
    }
}
