<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_detail = uniqid(6);
    $id_trans = $_POST['id_trans'];
    $tanggal = $_POST['date'];
    $operator = $_POST['provider'];
    $nominal = $_POST['nominal'];
    $nomor = $_POST['nomor'];
    $status = "BERHASIL";



    require_once 'connect.php';


    if ($post["provider"] == "Telkomsel") {
        $operator1 = "1";
    }
    if ($post["provider"] == "XL/AXIS") {
        $operator1 = "2";
    }
    if ($post["provider"] == "Tri") {
        $operator1 = "3";
    }
    if ($post["provider"] == "Indosat") {
        $operator1 = "4";
    }
    //==============================================================================
    //==============================================================================
    //==============================================================================
    //==============================================================================

    if ($post["nominal"] == "5.000") {
        $nominal1 = "1";
    }
    if ($post["nominal"] == "10.000") {
        $nominal1 = "2";
    }
    if ($post["nominal"] == "25.000") {
        $nominal1 = "3";
    }
    if ($post["nominal"] == "50.000") {
        $nominal1 = "4";
    }
    if ($post["nominal"] == "100.000") {
        $nominal1 = "5";
    }


    $sql1 = "INSERT INTO trans (id_trans, tanggal) VALUES ('$id_trans', '$tanggal')";

    $sql2 = "INSERT INTO trans_detail (id_detail, id_trans,  nomor, id_operator, id_nominal, status) VALUES ('$id_detail', '$id_trans','$nomor', '$id_operator1', '$id_nominal1', $status )";

    if (mysqli_query($conn, $sql1)) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);
    }
    if (mysqli_query($conn, $sql2)) {
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
