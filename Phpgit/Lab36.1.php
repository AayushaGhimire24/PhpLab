<!doctype html>
<body>
    <h2>Login</h2>
    <?php
    //display error message if authenticarion failed
    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form action="Lab36.0.php" method="post">
        Username:
        <input type="text" name="username">
    Password:
<input type="password" name="password">
<button type="submit">login</button>
</form>
</body>
</html>
