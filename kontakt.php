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
                <a href="rejestracja.php">Rejstracja</a>
                <a href="log.php">Logowanie</a>
  <a href="wyloguj.php">Wyloguj</a>
                </p>
            </header>
            
            <nav>
                <a class="menu" href="index.php">0 nas</a><a class="menu" href="Aukcje.php">Aukcje</a><a class="menu" href="okazja.php">Okazje</a><a class="menu active" href="Kontakt.php">Kontakt</a>
            </nav>
    
        <section class="main home">
            
            <h1>Skontaktuj się z nami!</h1>
            
            <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Musisz wypełnić wszystkie pola.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
return true; }
</script>
<table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>
<label for="Name">Imię:</label>
</td> <td>
<input name="Name" type="text" maxlength="60" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="PhoneNumber">Numer telefonu:</label>
</td> <td>
<input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="FromEmailAddress">Email:</label>
</td> <td>
<input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="Comments">Wiadmość:</label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
</td> </tr> <tr> <td>
</td> <td>
<input name="skip_Submit" type="submit" value="Wyślij" />
</td> </tr>
</table>
</form>
            <p>Nasz adres: Złota 7, Złota, Warszawa</p>
            <p>Numer kontaktowy: 510 913 965</p>
            <p>Email: aukcjoner@gmail.com</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.5872848669314!2d21.009507915762175!3d52.232715665232234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccf4bcc2caef%3A0x3a890ca2bc28c804!2zWsWCb3RhIDc!5e0!3m2!1spl!2spl!4v1558032876065!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
            </section>
            <footer>Znajdź nas na jednym z innych portali: Facebook, Instagram, Twitter. </footer>
            
        </div>
    
    </body>
    
</html>