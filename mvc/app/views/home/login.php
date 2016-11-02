 
    <style>
        input,button, textarea { display: block; }
    </style>
 
 
<?php
    if( isset($_POST['username']) && $_POST['username'] == 'admin' &&
        isset($_POST['password']) && $_POST['password'] == 'admin'
    ) {
        $_SESSION['is_logged_in'] = true;
    }

?>
    
    
    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>

        <p>Welcome admin, you are now logged in.</p>


		
		<p><b> Podaci u admin folderu </b></p>
		<?php
		$dir = 'admin/';
		$files = scandir($dir);
		$n = count($files);
		
		for($i=2; $i<$n; $i++)
		{
			echo "<a href='".$dir.$files[$i]."'>".$files[$i]."</a>"."<br>";			
		}
		
		
        ?>
		<br>
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
            <input type="password" id="password" name="password" required />

            <label for="remember-me">Remember me</label>
            <input style="display: inline;" id="remember-me" name="remember-me" type="checkbox" />
			
            <button type="submit">Login</button>

        </form>

    <?php endif ?>