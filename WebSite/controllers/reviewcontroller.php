<?php
    class Response{
        public $message;
        public $error;
    }
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');
    $response = new Response();
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 2000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = "/images/reviewImages/".$fileNameNew;
                move_uploaded_file($fileTmpName,$_SERVER['DOCUMENT_ROOT'].$fileDestination);
                $response -> message = $fileNameNew;
                $response -> error = null;
                echo json_encode($response);
            }
            else
            {
                $response -> error= "Your file is too big!";
                $response -> message= null;
                echo json_encode($response);
            }
        }
        else
        {
            $response -> error = "Error uploading file!";
            $response -> message = null;
            echo json_encode($response);
        }
    }
    else
    {
        $response -> error = "You cannot upload that type!";
        $response -> message = null;
        echo json_encode($response);
    }

?>