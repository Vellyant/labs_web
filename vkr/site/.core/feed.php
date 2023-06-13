<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class feed
{

    static function get_feed()
    {
        $statement = 'SELECT * FROM feed_yml WHERE feed_yml.user_id=:user_id';
        $feed_yml = database::prepare($statement);
        $id = $_SESSION['USER_ID'];

        $feed_yml->bindParam('user_id',  $id, PDO::PARAM_STR);

        $feed_yml->execute();

        return $feed_yml;
    }


    public static function create($company, $list_product, $name): array
    {
        $error = array();
        if ($company == "") $error[1] = "Выберите компанию";
        if ($list_product == "") $error[2] = "Выберите прайс-лист";

        if (count($error)) return $error;

        //create
        $company = company::get_one_company($company);
        $products = product::get_products_bd($list_product);
        $categories = product::get_category($list_product);
        $path = $_SERVER['DOCUMENT_ROOT'] . "/site/inc/feed/" . $_SESSION['USER_ID'];

        if (!file_exists($path))
            mkdir($path);

        $file = fopen($path . $name . ".yml", "w");
        $today = date("Y-m-d\TH:i:sP");
        $txt = '<?xml version="1.0" encoding="UTF-8"?>
        <yml_catalog date="' . $today . '">
        <shop>';
        fwrite($file, $txt);

        $txt = "<name>$company[name]</name>
        <company>$company[company]</company>
        <url>$company[url]</url>
        <platform>YML</platform>
        <version>1.0</version>
        <agency>$company[agency]</agency>
        <email>$company[email]</email>
        <categories>
        ";
        fwrite($file, $txt);

        while ($category = $categories->fetch()) {
            $id = $category['value'];
            $parentid = $category['parent_id'];
            $text = $category['name'];
            if ($parentid == '')
                $txt = "<category id='$id'>$text</category>
                ";
            else $txt = "<category id='$id' parentId='$parentid'>$text</category>
            ";
            fwrite($file, $txt);
        }
        $txt = '</categories>
        <offers>
        ';
        fwrite($file, $txt);
        $last = 0;
        while ($product = $products->fetch()) {
            $id_product = $product['id_product'];
            $element = $product['name'];
            $value = $product['value'];

            $txt = "<offer id='$product[element_data]'>
            ";

            if ($id_product == $last)
                $txt = "<$element>$product[value]</$element>
                ";
            else $txt = "</offer>
            <offer id='$product[element_data]'>
            <$element>$product[value]</$element>
            ";
            fwrite($file, $txt);
            $last = $product['id_product'];
        }
        $txt = '</offer>
        </offers>
        </shop>
</yml_catalog>
        ';
        fwrite($file, $txt);

        $file_name =$name. ".yml";

        move_uploaded_file($_SERVER['DOCUMENT_ROOT'] . "/site/inc/feed/".$file_name,$path.$file_name);


        $id = $_SESSION['USER_ID'];

        $statement = "INSERT INTO feed_yml  (user_id, file, link, date_edit, name) VALUES (:id, :file,:link,:date,:name)";
        $query = database::prepare($statement);
        $path = "/site/inc/feed/" . $id;
        
        $query->bindParam('id',  $id, PDO::PARAM_STR);
        $query->bindParam('file',  $file_name, PDO::PARAM_STR);
        $query->bindParam('link',  $path, PDO::PARAM_STR);
        $query->bindParam('date',  $today, PDO::PARAM_STR);
        $query->bindParam('name',  $name, PDO::PARAM_STR);

        $query->execute();

        return [];
    }
}
