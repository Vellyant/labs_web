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
        string $input_fio
    ) {
        $statement = "INSERT INTO users (login, password, name)
        VALUES (:input_login,:input_password,:input_fio)";
        
        $query = database::prepare($statement);
        $query->bindValue(':input_login', $input_login);
        $query->bindValue(':input_password', $input_password);
        $query->bindValue(':input_fio', $input_fio);

        if (!$query->execute()) {
            throw new PDOException("Ошибка регистрации");
        }
    }
}
