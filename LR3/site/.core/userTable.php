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

    public static function get_login(string $input_login)
    {
        $statement = 'SELECT * FROM users WHERE login = :input_login LIMIT 1';
        $query = database::prepare($statement);
        $query->bindParam('input_login', $input_login, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetchAll();
        if (!count($user)) return null;
        return $user[0];
    }

    public static function sign_up(
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
        $statement = 'INSERT INTO users (login, password, fio, DOB, address, gender,
        hobby,link_vk,blood_type, rh_factor)
        VALUES (:input_login, :input_password, :input_fio, :input_dateborn, :input_address, :select_gender,
        :input_hobby, :input_link_vk, :select_blood_type, :select_rh_factor)';
        $query = database::prepare($statement);
        $query->bindValue(':input_login', $input_login);
        $query->bindValue(':input_password', $input_password);
        $query->bindValue(':input_fio', $input_fio);
        $query->bindValue(':input_dateborn', $input_dateborn);
        $query->bindValue(':input_address', $input_address);
        $query->bindValue(':select_gender', $select_gender);
        $query->bindValue(':input_hobby', $input_hobby);
        $query->bindValue(':input_link_vk', $input_link_vk);
        $query->bindValue(':select_blood_type', $select_blood_type);
        $query->bindValue(':select_rh_factor', $select_rh_factor);

        if (!$query->execute()) {
            throw new PDOException("Ошибка регистрации");
        }
    }
}
