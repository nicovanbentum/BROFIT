<?php
class Connect {

    static $DatabaseObject = null;

    static function getDatabaseObject() {

        if(Connect::$DatabaseObject != null) return Connect::$DatabaseObject;

        $host = 'mysql.hostinger.nl';
        $dbname = 'u307395658_sport';
        $username = 'u307395658_sport';
        $password = 'Ww]=poFWw>2O';

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try
        {
            Connect::$DatabaseObject = new PDO("mysql:dbname={$dbname};host={$host};charset=utf8", $username, $password, $options);
        }
        catch(PDOException $ex)
        {
            die("Geen connectie met database: " . $ex->getMessage());
        }

        Connect::$DatabaseObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Connect::$DatabaseObject->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
        {
            function undo_magic_quotes_gpc(&$array)
            {
                foreach($array as &$value)
                {
                    if(is_array($value))
                    {
                        undo_magic_quotes_gpc($value);
                    }
                    else
                    {
                        $value = stripslashes($value);
                    }
                }
            }

            undo_magic_quotes_gpc($_POST);
            undo_magic_quotes_gpc($_GET);
            undo_magic_quotes_gpc($_COOKIE);
        }
        return Connect::$DatabaseObject;
    }
}

?>
