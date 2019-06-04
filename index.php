
<?php

$add_site = true;

include "include/function.php";
?>

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
                <a href="rejstracja.html">Rejstracja</a>
                <a href="logowanie.html">Logowanie</a>
                <a href="log.html">Wyloguj</a>
                </p>
            </header>
            <nav>
                <a class="menu active" href="index.html">0 nas</a>
                <a class="menu" href="Aukcje.html">Aukcje</a>
                <a class="menu" href="okazja.html">Okazje</a>
                <a class="menu" href="kontakt.html">Kontakt</a>
            
            </nav>
            
            <section>
                <article>
                    <h1>Pomożemy znaleźć Ci to czego szukasz!</h1>
                    <p><img class="left" src="aukcja2.jpg" alt="aukcja2 - header"/>Największy portal aukcyjny na świecie. Znajdziesz tu wszystko czego potrzebujesz. Chcesz się pozbyć niepotrzebnych rzeczy? Bądź chciałbyś kupić coś w promocyjnej cenie? To wszystko jest u nas! Kupuj i sprzedawaj na AUKCJONER! </p>
                    <p>AUKCJONER to internetowa platforma handlowa umożliwiająca przeprowadzanie transakcji. Umożliwia przede wszystkim wystawianie na sprzedaż przedmiotów posiadanych przez użytkowników. Dzięki szerokiemu dostępowi do Internetu serwis na początku działalności stał się popularny wśród kolekcjonerów, a z czasem również zawodowych handlarzy.</p>
                    <p>Za wystawienie przedmiotów na sprzedaż, a także za dokonanie sprzedaży za pośrednictwem AUKCJONER, przedsiębiorstwo pobiera prowizję.</p>
                    <p><img src="zdj1.jpg" alt="zdj1 - header"/></p>
                </article>
                <!-- tutaj iframe -->
            
            </section>
            <footer>Znajdź nas na jednym z innych portali: Facebook, Instagram, Twitter. </footer>
            
        </div>
        <script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140309076-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140309076-1');
</script>
        </script>
    </body>
    
</html>