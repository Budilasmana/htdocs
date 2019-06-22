<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $nomor = $_POST['nomor'];
    $password = $_POST['password'];


    require_once 'connect.php';

    $sql = "INSERT INTO sign (email, name,  nomor, password) VALUES ('$email', '$name','$nomor', '$password')";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>