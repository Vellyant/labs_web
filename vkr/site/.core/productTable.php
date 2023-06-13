<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
class product
{
   private static function  get_list_products_bd()
   {
      $statement = 'SELECT list_products.*,structure_yml.name AS nameYML  FROM list_products LEFT JOIN structure_yml USING(id_sctructure)  
       WHERE list_products.user_id="1"';
      $list_products = database::prepare($statement);
      $id = $_SESSION['USER_ID'];
      $list_products->bindParam('user_id',  $id, PDO::PARAM_STR);
      $list_products->execute();

      return $list_products;
   }

   public static function get_list_products()
   {
      return  self::get_list_products_bd();
   }

   static function  get_products_bd($list_num)
   {
      $statement = 'SELECT * FROM product LEFT JOIN product_elements USING(id_product) LEFT JOIN elements USING(id_element) 
      WHERE product.id_list=:list_num ORDER BY id_product, id_element';
      $products = database::prepare($statement);

      $products->bindParam('list_num', $list_num, PDO::PARAM_STR);


      $products->execute();

      return $products;
   }


   /* Получение уникальных значений названий элементов*/
   static function  get_unique_elements_list($id_list)
   {
      $statement = 'SELECT DISTINCT name FROM product 
     LEFT JOIN product_elements USING(id_product)
     LEFT JOIN elements USING(id_element)
     WHERE product.id_list=:id_list';
      $count = database::prepare($statement);
      $count->bindParam('id_list', $id_list, PDO::PARAM_STR);
      $count->execute();
      return $count;
   }

   static function  get_category($id_list)
   {
      $statement = 'SELECT * FROM category_products 
      WHERE category_products.id_list_products=:id_list';
      $count = database::prepare($statement);
      $count->bindParam('id_list', $id_list, PDO::PARAM_STR);
      $count->execute();
      return $count;
   }

}
