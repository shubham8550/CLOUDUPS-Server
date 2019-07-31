<?php
include "conn.php";
$user=$_REQUEST["u"];
   
$sql = "select * from uploads where username='$user' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    //$c=1;
    $imgdata=array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       $new=array('id'=> $row["id"] , 'filename'=> $row["filename"], 'ext'=> $row["ext"], 'filesize'=> $row["filesize"] );
       
       array_push($imgdata,$new);
   }
   echo json_encode($imgdata,JSON_FORCE_OBJECT);

   }

?>