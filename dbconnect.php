<?php

define('$host','localhost');
define('$port','3306');
define('$username','root');
define('$password','root');
define('$db_name','personal_finance');
define('$tbl_name','user');



try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
?>