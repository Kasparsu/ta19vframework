<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Home page <?php echo $name ?>

    <form action="/" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>