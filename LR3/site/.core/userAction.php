<?

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class action
{
    public static function signIn()
    {
        return;
    }

    public static function signUp() :array
    {
        if ($_SERVER('REQUEST_METHOD') != 'POST')
            return [];
        if ($_SERVER('ACTION') != 'signup.php')
            return [];

        $error = logic::signUp($_POST('login'), $_POST('password'));
        if (!count($error)) {
            header('Location: ' . $_SERVER['PHP_SELF'] . '?success=y');
            die;
        }

        return $error;
    }
}
