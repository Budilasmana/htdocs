<?php
include 'koneksi.php'; {

    $result  = mysqli_query($conn, "SELECT * FROM hape");

    $show = mysqli_fetch_array($result);

    $json_response = array();

    $json_response[] = $show;

    echo json_encode(array('hape' => $json_response));
}
