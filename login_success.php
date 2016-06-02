<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 10/29/15
 * Time: 1:23 PM
 */

?>

<?php
$_SESSION['name'] = $username;

session_start();
if(!isset($_SESSION['name'])){
    header("location:index.php"); //main_login.php is the login page
}else{
    header("location:Members_area.php");
}
?>
<!DOCTYPE html>

<html>
<head>

</head>
<body>
Login Successful

</body>
</html>