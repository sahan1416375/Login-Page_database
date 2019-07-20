<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body>
    <div>
        <form action="post.php" method="POST" enctype="multipart/form-data">
            Title: <br>
            <input type="text" name="title"  required/>
            Message: <br>
            <textarea name="message" cols="30" rows="10" required></textarea>
            Image: <br>
            <input type="file" name="image" required>
            <input type="submit" value="Submit" name="submit">
        </form>
           
        <a href="getPost.php"><button>View All</button></a>
    </div>
</body>

</html>