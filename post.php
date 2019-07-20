<?php
    require("./db.php");
?>

<?php

    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $message = $_POST["message"];

        $filetmp = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        $filepath = "./image/";

        $query = "INSERT INTO post (title, message, image) VALUES ('$title', '$message', '$filepath/$filename')";

        $results = mysqli_query($con, $query);
        move_uploaded_file($filetmp, $filepath.$filename);
    }  
    return header("Location: index.php");

?>