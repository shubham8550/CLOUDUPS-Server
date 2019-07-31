<?php  
include "conn.php";

$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['uploadFile']['name']); 
$username=$_REQUEST["u"];
$filename=basename( $_FILES['uploadFile']['name']); 

  
if(move_uploaded_file($_FILES['uploadFile']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully! yey"; 
    $extension = end(explode(".",$target_path)); 
    $filesize=filesize($target_path); 

        $sql = "INSERT INTO uploads (username, filename, ext, filesize)
                VALUES ('$username', '$filename', '$extension',$filesize)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>  