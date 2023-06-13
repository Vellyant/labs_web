<?php
class database
{
   private  static $instance = null;

   private  $connection = null;

   protected function __construct($file = 'setting.ini')
   {
      if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

      $this->connection = new \PDO(

         $dns = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['dbname'],

         $user = $settings['database']['username'],
         $password = $settings['database']['password'],
         [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
         ]
      );
   }

   public static function getInstatce(): database
   {
      if (self::$instance === NULL) self::$instance = new self;
      return self::$instance;
   }


   public static function connection()
   {
      return static::getInstatce()->connection;
   }

   public static function prepare($statement): \PDOStatement
   {

      return static::connection()->prepare($statement);
   }

   


}

