<?

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class action
{
    public static function signIn()
    {
        return;
    }

    public static function signUp()
    {
        if ($_SERVER('REQUEST_METHOD') != 'POST')
            return [];
        if ($_SERVER('ACTION') != 'signup')
            return [];
    }
}
