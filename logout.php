<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 10/29/15
 * Time: 1:45 PM
 */
?>

<?php
session_start();
session_destroy();
header("location:index.php");
?>