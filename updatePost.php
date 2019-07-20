<?php
    require("./db.php");
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
$query = "SELECT * FROM post where id=$id";

$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)){
    $title = $row["title"];
    $message = $row["message"];
    $image = $row["image"];
    $id = $row["id"];
}
}else{
    return header("Location: getPost.php");
}
?>
<!-- update file -->
<div>
        <form action="#" method="POST" enctype="multipart/form-data">
            Title: <br>
            <input type="text" value="<?php echo $title; ?>" name="title"  required/>
            Message: <br>
            <textarea name="message" cols="30" rows="10" required><?php echo $message; ?></textarea>
            Image: <br>
            <?php 
                echo "<img src='$image' />";
            ?>
            <input type="file" name="image" required>
            <input type="submit" value="Submit" name="submit">
        </form>
</div>

    <!-- Update Process -->
<?php
    if(isset($_POST["submit"])){
        $id = $_GET["id"];
        $title = $_POST["title"];
        $message = $_POST["message"];

        $filetmp = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        $filepath = "./image/";

        $query = "UPDATE post SET title='$title', message='$message', image = '$filepath/$filename' WHERE id=$id";

        $results = mysqli_query($con, $query);
        move_uploaded_file($filetmp, $filepath.$filename);

        echo "<h1>Success</h1>";
    }
    ?>