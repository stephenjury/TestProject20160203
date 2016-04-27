<?php
session_start();
include("connection.php"); //Establishing connection with our database

$msg = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{

    $desc = $_POST["desc"];
    $photoID = $_POST["photoID"];
    $name = $_SESSION["username"];

    //Clean Stuff
    $clean_desc=mysqli_real_escape_string($db,$desc);
    $clean_photoID=mysqli_real_escape_string($db,$photID);
    $clean_name=mysqli_real_escape_string($db,$name);


    $sql="SELECT userID FROM users WHERE username='$clean_name'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1) {
        //echo $name." ".$email." ".$password;
        $id = $row['userID'];
        $addsql = "INSERT INTO comments (description, postDate,photoID,userID) VALUES ('$clean_desc',now(),'$clean_photoID','$clean_id')";
        $query = mysqli_query($db, $addsql) or die(mysqli_error($db));
        if ($query) {
            $msg = "Thank You! comment added. click <a href='photo.php?id=".$clean_photoID."'>here</a> to go back";
        }
    }
    else{
        $msg = "You need to login first";
    }
}

?>