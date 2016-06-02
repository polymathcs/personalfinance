<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 11/3/15
 * Time: 8:42 AM
 */


?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "personal_finance";

session_start();

// username and password sent from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        header("location: ./index.php");
    }
    else {
        echo "***** test **** ****  " . $_POST["username"] . "  ****";
        $myusername=cleanuserdata($_POST['username']);
    }
    if (empty($_POST["username"])) {
        header("location: ./index.php");
    }
    else {
        $mypassword=cleanuserdata($_POST['userPassword']);
    }

}



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT user_username, user_password FROM user WHERE (user_password = :myusername AND user_username = :mypassword)");
    $stmt->bindParam(':myusername', $myusername);
    $stmt->bindParam(':mypassword', $mypassword);

    $success = $stmt->execute();
    $row_count = $stmt->rowCount();
    echo "the row count is ". $row_count;
    echo " !!!**** Success <br>";
    print $success;
//    while ($row = $stmt->fetch()) {
//        print_r($row);
//    }
    if ($row_count <1) {
        echo "their is was a problem with loging in";
    }

    elseif ($row_count == 1) {
        echo "looks like we loged in";

        $_SESSION[username] = $myusername;

    } elseif ($row_count >1) {
        echo "their is is a problem with your login in information";
    }
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
    echo "!!!!!! clean user data ***** " . $data . "</br>";
    return $data;
}
?>