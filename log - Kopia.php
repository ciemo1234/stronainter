<!DOCTYPE html>
<html lang="pl">
    <head>
        
        <!-- kodowanie znaków, możemy używać polskich znaków-->
        <meta charset="UTF-8">
        <!-- sposób wyświetlania na urządzeniach mobilnych-->
        <meta name="viewport" content="width=device-width, initrail-scale=1.0">
        <!-- tytuł stron. m.in. w wynikach wyszukiwania -->
        <title>AUKCJONER</title>
        <!-- importujemy czcionkę, żeby jej użyć -->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin-ext" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
        <!-- ikona strony -->
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="style.css">
        
    </head>
    
    <body>
        <div id="wrapper">
        
            <header>
                <img src="aukcja.jpg" alt="aukcja - header"/>
                  <p align="right" >
                <a href="rej.html">Rejstracja</a>
                <a href="log.html">Logowanie</a>
  <a href="log.html">Wyloguj</a>
                </p>
            </header>
            <p >
			Logowanie  <strong></strong><br /><br />
			<form action="zaloguj.php" method="post">
			Login: <br /> <input type="text" name="login" /> <br />
			Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
			<input type="submit" value="Zaloguj się" />
			</form>
					</p>
            <nav>
                <a class="menu" href="index.html">0 nas</a><a class="menu active" href="Aukcje.html">Aukcje</a><a class="menu" href="#">Okazje</a><a class="menu" href="Aukcje.html">Kontakt</a>
            </nav>
            
       
            <footer>Znajdź nas na jednym z innych portali: Facebook, Instagram, Twitter. </footer>
            
        </div>
    
    </body>
    
</html>