<html>
    <head>
        <style>
            input { display: block; margin: 6px 0; }
        </style>
    </head>
    
    <body>

    <h2>$_GET</h2>
    <pre><?php

        var_dump($_GET);

    ?></pre>

    <h2>$_POST</h2>
    <pre><?php

        var_dump($_POST);

    ?></pre>


    <h2>Links</h2>

    <ul>
        <li>
            <a href="02-post-get.php?page=1">Link 1</a>
        </li>
        <li>
            <a href="02-post-get.php?a=1&amp;b=2&c=dummy">Link 2</a>
        </li>
    </ul>

    <h2>Form</h2>


    <!-- fix this form: method, for, type, require -->
    <form method="post">
        <fieldset>
            <legend>Info</legend>

            <label for="email">Email</label> <!-- ako pritisnemo na label Email prebaci na input polje -->
            <input placeholder="Vasa email adresa" id="email" name="email" type="email" required/> <!-- provjeriti html5 input type's -->
            

            <label>Password</label>
            <input name="password" type="text" pattern="lol|123" required/> <!-- s patternom ograničavamo da samo to može biti lozinka --> 

            <input type="submit" />
        </fieldset>

    </form>

    </body>
</html>
