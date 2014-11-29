<?php
 /*Enter the details for your database*/
define ('DB_HOST', 'localhost');//usually localhost
define ('DB_NAME', '');
define ('DB_USERNAME', '');
define ('DB_PASSWORD', '');
define ('DB_CHARSET', 'utf8');

class DatabaseHelpers
{
   public static function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
 
   public static function getDatabaseConnection()
   {
      $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME. ';charset='.DB_CHARSET, DB_USERNAME, DB_PASSWORD);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
      return $dbh;
   }
}
 
?>