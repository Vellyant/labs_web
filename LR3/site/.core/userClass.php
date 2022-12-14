<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class user
{
    private static function  get_user_bd()
    {
        $statement = 'SELECT * FROM user';
        $user = database::prepare($statement);
        $user->execute();
        return $user;
    }

    private static function sign_in($input_login,
    $input_password)
    {
        $statement = 'SELECT * FROM user';
    }

    private static function registration($input_login,
    $input_password,
    $input_fio,
    $input_dateborn,
    $input_address,
    $select_gender,
    $input_hobby,
    $input_link_vk,
    $select_blood_type,
    $select_rh_factor)
    {

    }
}
