<?php

include "conn.php";

$id=$_REQUEST["id"];


$sql = "select * from uploads where id='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {



    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       $file=$row["filename"];
       
   }

   
if (file_exists("uploads/".$file)) {
    unlink("uploads/".$file);
} else {
    // File not found.
}

}








$sql = "DELETE FROM uploads WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


?>