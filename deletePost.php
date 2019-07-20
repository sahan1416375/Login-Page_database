<?php
    require("./db.php");
?>

<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $query = "DELETE FROM post WHERE id=$id";

        $result = mysqli_query($con, $query);

        echo "<h1>Deleted</h1>";
        
    }
    else{
    return header("Location: getPost.php");
    }
?>