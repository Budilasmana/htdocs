<?php
 
    $target_dir = "upload/images";
    $image = $_POST["image"];

    if(!file_exists($target_dir)) {
        //create table upload/images folder
        mkdir($target_dir, 0777, true);
    }

    //set random image file name with time
    $target_dir = $target_dir ."/". rand() ."_". time() . ".jpeg";
    if(file_put_contents($target_dir, base64_decode($image))) {


        echo json_encode([
            "Upload Berhasil",
             "TERIMAKASIH." 
            ]);
        } else{
            echo json_encode([
                "Message" => "Sorry, Gagal Upload.",
                "Status" => "Error"
            ]);
        }

   
?>