<?
class logic
{

    public static function signUp($login, $password, $fio, $dateborn, $address,  $gender, $hobby, $link_vk,  $blood_type,  $rh_factor): array
    {
        $errors = array();

        if ($login == "") $errors[1] = "Введите email";
        else if (users::get_login($login) != null) $errors[1] = "Такой email существует";
        else if (!filter_var($login, FILTER_VALIDATE_EMAIL)) $errors[1] = "Неккоректный email";


        if ($password == "") $errors[2] = "Введите пароль";
        else {
            $hash_pass = password_hash($password, PASSWORD_BCRYPT);
        }

        if ($fio == "") $errors[3] = "Введите фио";

        if (!count($errors)) users::sign_up($login, $hash_pass, $fio, $dateborn, $address, intval($gender), $hobby, $link_vk, intval($blood_type), intval($rh_factor));

        return $errors;
    }

    public static function signIn(string $login, string $password): string
    {
        if (static::authorized()) {
            return 'Вы авторизованы';
        }

        $user = users::get_login($login);

        if ($user == null) {
            return "Пользователь не найден";
        }

        if (!password_verify($password, $user['password'])) {
            return "Неверный пароль";
        }

        $_SESSION['USER_ID'] = $user['id_user'];
        $_SESSION['USER_LOGIN'] = $user['login'];
        header("Location:/");
        return '';
    }

    public static function signOut()
    {

        unset($_SESSION['USER_ID']);
        unset($_SESSION['USER_LOGIN']);
    }


    public static function authorized()
    {
        return intval($_SESSION['USER_ID']) > 0;
    }
}
