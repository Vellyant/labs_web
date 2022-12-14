<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class users
{
    private static function  get_user_bd()
    {
        $statement = 'SELECT * FROM users';
        $users = database::prepare($statement);
        $users->execute();
        return $users;
    }

    public static function sign_in(string $input_login, $input_password)
    {
        $statement = 'SELECT * FROM users WHERE users.login = :input_login AND users.password = :input_password';
        $user = database::prepare($statement);
        $user->bindParam('input_login', $input_login, PDO::PARAM_STR);
        $user->bindParam('input_password', $input_password, PDO::PARAM_STR);
        $user->execute();
        $result_user = $user->fetchAll();
        return $result_user;
    }

    private static function registration(
        $input_login,
        $input_password,
        $input_fio,
        $input_dateborn,
        $input_address,
        $select_gender,
        $input_hobby,
        $input_link_vk,
        $select_blood_type,
        $select_rh_factor
    ) {
    }
}
