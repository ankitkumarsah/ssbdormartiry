<?php
include_once 'includes/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Using Named Placeholder
    $sql = "SELECT * FROM  admin WHERE email= :email && password= :pwd";


    $result = $conn->prepare($sql);

    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':pwd', $pwd, PDO::PARAM_INT);

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $result->execute();

    if ($result->rowCount() > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        unset($result);
    }
    else{
        header("Location: index.php");
    }

  $conn = null;

}
