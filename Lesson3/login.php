<?php


    
    
    if( isset($_POST['username']) && $_POST['username'] == 'student' &&
        isset($_POST['password']) && $_POST['password'] == 'phpakademija'
    ) {
        $_SESSION['is_logged_in'] = true;
    }

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Login example</title>
    <style>
        textarea { display: block; }
    </style>
</head>
<body>
    
    <header>
    <ul>
        <li><a href="index.php">Naslovnica</a></li>
        <li><a href="form.php">Prijavi se</a></li>
        <li><a href="login.php">Login (za admine)</a></li>
    </ul>
    </header>
    
    
    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>

        <p>Welcome admin, you are now logged in.</p>

        <p>Some secret admin only content goes here :]</p>
        
        <form action="login.php">
            <input type="submit" value="Logout" onclick="logout()"/>
        </form>

       <?php 
       function logout()
        {
            session_unset();
            session_destroy();
        }
        ?>
    <?php else: ?>

        
        
        <form method="post">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password</label>
            <input type="text" id="password" name="password" required />

            <label for="remember-me">Remember me</label>
            <input style="display:none;" id="remember-me" name="remember-me" type="checkbox" />

            <button type="submit">Login</button>

        </form>

    <?php endif ?>

</body>
</html>
