<?php require 'partials/header.php'?>
    Home page <?php echo $name ?>

    <form action="/" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
    <?php if(!isset($_SESSION['isLoggedIn'])): ?>
        <form action="/login?username=kaspar" method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit">
        </form>
    <?php else: ?>
        <a href="/logout">Logout</a>
    <?php endif; ?>
<?php require 'partials/footer.php'?>