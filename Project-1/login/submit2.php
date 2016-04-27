<?php
$msg = "";
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $postDate = $_POST["postDate"];
    $fixDate = $_POST["fixDate"];

    $title = mysqli_real_escape_string($db, $title);
    $desc = mysqli_real_escape_string($db, $desc);
    $postDate = mysqli_real_escape_string($db, $postDate);
    $fixDate = mysqli_real_escape_string($db, $fixDate);


    $sql="SELECT title FROM bugs WHERE title='$title'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $speech = "'" ;
        $email1 = $speech . $title . $speech;
        $msg1 = "Sorry...This bug ";
        $msg2 = " already exists...";
        $msg = $msg1 . $email1 . $msg2;
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ('$name', '$email', '$password')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
        }

    }
}
?>