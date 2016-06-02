<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 10/29/15
 * Time: 12:32 PM
 */

?>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "personal_finance";
$todaysdate = date('Y-m-d');

session_start();


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO user (user_fname, user_lname, user_username, user_password, user_date, user_email) VALUES (:fname, :lname, :usersname, :userspassword, :entdate, :usersemail)");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':usersname', $usersname);
    $stmt->bindParam(':userspassword', $userspassword);
    $stmt->bindParam(':entdate', $entdate);
    $stmt->bindParam(':usersemail', $usersemail);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_fname"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $fname = cleanuserdata($_POST["user_fname"]);
        }
        if (empty($_POST["user_lname"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $lname = cleanuserdata($_POST["user_lname"]);
        }
        if (empty($_POST["user_lname"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $lname = cleanuserdata($_POST["user_lname"]);
        }
        if (empty($_POST["user_username"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $usersname = cleanuserdata($_POST["user_username"]);
        }
        if (empty($_POST["user_password"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $userspassword = cleanuserdata($_POST["user_password"]);
        }
        if (empty($_POST["user_email"])) {
            header("Location: ./login.php");
            exit;
        }
        else{
            $usersemail = cleanuserdata($_POST["user_email"]);
        }


    }
    $entdate = $todaysdate;

    $stmt->execute();

    echo "new User Created ". $usersname;
    $_SESSION["username"] = $usersname;
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;






?>

<?php

function cleanuserdata($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
