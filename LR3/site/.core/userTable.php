<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class users
{
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
        string $input_login,
        string $input_password,
        string $input_fio,
        string $input_dateborn,
        string $input_address,
        int $select_gender,
        string $input_hobby,
        string $input_link_vk,
        int  $select_blood_type,
        int $select_rh_factor
    ) {
        $statement = 'INSERT INTO users (login,password,blood_group,rhesus_factor,link_vk,interests, gender, address, DOB, fio)
        VALUES (:input_login,:input_password,:select_blood_type, :select_rh_factor, :input_link_vk,
        :input_hobby, :select_gender, :inputaddress, :input_dateborn,:input_fio)';
        
        $query = database::prepare($statement);
        $query->bindValue(':input_login', $input_login);
        $query->bindValue(':input_password', $input_password);
        $query->bindValue(':select_blood_type', $select_blood_type);
        $query->bindValue(':select_rh_factor', $select_rh_factor);
        $query->bindValue(':input_link_vk', $input_link_vk);
        $query->bindValue(':input_hobby', $input_hobby);
        $query->bindValue(':select_gender', $select_gender);
        $query->bindValue(':inputaddress', $input_address);
        $query->bindValue(':input_dateborn', $input_dateborn);
        $query->bindValue(':input_fio', $input_fio);

        if (!$query->execute()) {
            throw new PDOException("Ошибка регистрации");
        }
    }
}
