<?php
// Include the database configuration file
include 'd1.php';
//$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $title=$_POST['title'];
$description=$_POST['description'];
$sender=$_POST['sender'];
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (title,description,file_name, uploaded_on,sender) VALUES ('$title','$description','".$fileName."', now(),'$sender')");
            header('location:Add_Notice.php');
            }
        }
    }
?>