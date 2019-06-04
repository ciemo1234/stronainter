<?php include("config.php");
$nick = $_SESSION['nick'];
$haslo = $_SESSION['haslo'];
    if ((empty($nick)) AND (empty($haslo))) {
echo '<br>Nie by³eœ zalogowany albo zosta³eœ wylogowany<br><a href="index.php">Strona G³ówna</a><br>';
exit;
}
$user = mysql_fetch_array(mysql_query("SELECT * FROM uzytkownicy WHERE `nick`='$nick' AND `haslo`='$haslo' LIMIT 1"));
    if (empty($user[id]) OR !isset($user[id])) {
echo '<br>Nieprawid³owe logowanie.<br>';
exit;
}
// tresc dla zalogowanego uzytkownika
echo 'Witaj '.$user[nick].' zosta³eœ/aœ pomyœlnie zalogowany/a, tutaj umieœæ ukryta strone tylko dla zalogowanych';
echo '<br><a href="wyloguj.php">Wyloguj mnie</a>';
?>