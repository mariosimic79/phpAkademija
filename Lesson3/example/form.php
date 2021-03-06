<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
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

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

	 <!-- Upload datoteke -->
    <?php
        if(isset($_FILES['attach']))
        {
            $file_name = $_FILES['attach']['name'];
            $file_temp = $_FILES['attach']['tmp_name'];
			$naziv = "admin/".$_POST["name"]."-".$file_name;
           
            if(empty($errors)==true)
            {
                move_uploaded_file($file_temp, $naziv);
                echo 'Uspijšno ste se prijavili';
            }
            else
            {
                print_r($errors);   
            }   
        }
    ?>
    
	<!-- Pravljnje txt datoteke s podacima -->	
		<?php
		
		if(isset($_POST["submit"]))
		{
			$ime = $_POST["name"];
			$email = $_POST["email"];
			$smjer = $_POST["smjer"];
			$godina = $_POST["godina"];
			$progJezik = $_POST["prJezik"];
			$motivacija = htmlspecialchars($_POST['motiv']);
			$predznanje = htmlspecialchars($_POST["znanje"]);
			$prJezik = "";
			
			$n = count($progJezik);
			for($i=0; $i<$n; $i++)
			{
				$prJezik .= $progJezik[$i].",";
				
			}
			
			$upis = "Ime i prezime: ".$ime."\r\nEmail: ".$email."\r\nSmjer: ".$smjer."\r\nGodina: ".$godina."\r\nProgramski jezici: ".$prJezik
			."\r\nMotivacija: ".$motivacija."\r\nPredznanje: ".$predznanje;
			
			file_put_contents("admin/".$ime.".txt", $upis);
			
	
			
		}			
	   ?>
    <!-- fix form -->   
	
	
	
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend> Prijava </legend>
                <label>Ime i prezime</label><br>
                <input name="name" placeholder="Marko Marković" required/><br>

                <label>Mail adresa</label><br>
                <input name="email" type="email" placeholder="example@email.com" required /><br>

                <label>Smjer</label> <br>
                <input name="smjer" type="text" placeholder="Informatika" required /> <br><br>

                <label>Godina studija</label> <br>
                <input name="godina" type="radio" value="1"> 1. godina <br>
                <input name="godina" type="radio" value="2"> 2. godina <br>
                <input name="godina" type="radio" value="3"> 3. godina <br>
                <input name="godina" type="radio" value="4"> 4. godina <br>
                <input name="godina" type="radio" value="5"> 5. godina <br>


                <br>
                <label>Što te motiviralo da se prijaviš?</label>
                <textarea name="motiv" cols="40" rows="4"></textarea><br>


                <label>Imaš li predznanje vezano uz web development?</label>
                <textarea name="znanje" cols="40" rows="4"></textarea><br>

                U kojim jezicima si do sada programirao?<br>
                <input name="prJezik[]" type="checkbox" value="HTML"/>HTML<br>
                <input name="prJezik[]" type="checkbox" value="Javascript"/>Javascript<br>
                <input name="prJezik[]" type="checkbox" value="PHP"/>PHP<br>
                <input name="prJezik[]" type="checkbox" value="Java"/>Java<br><br>

                
                Uploadaj primjer svoga koda:<br>
                <input type="file" name="attach"><br><br>

                <input name="submit" type="submit" value="Prijavi se">
        </fieldset>
    </form>
	
	
</main>

   
    
<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>