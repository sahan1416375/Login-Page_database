<?php
    require("./db.php");
?>

<?php

    $query = "SELECT * FROM post";

    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($result)){
        // $row["database eke api gnna one variable eke name, meka database eke thyena namama wenna one"]
        $title = $row["title"];
        $message = $row["message"];
        $image = $row["image"];
        $id = $row["id"];

        echo "<h1>$title</h1>
        <p>$message</p>
        <img src='$image' />
        <a href='deletePost.php?id=$id'>Delete</a>
        <a href='updatePost.php?id=$id'>Update</a>
        ";
    }
?>
