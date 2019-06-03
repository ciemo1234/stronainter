<?php include("config.php"); ?>
<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$haslo = addslashes($haslo);
$login = addslashes($login);
$login = htmlspecialchars($login);

if ($_GET['login'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}
if ($_GET['haslo'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}

$haslo = md5($haslo); //szyfrowanie hasla
    if (!$login OR empty($login)) {
include("head2.php");
echo '<p class="alert">Wype³nij pole z loginem!</p>';
include("foot.php");
exit;
}
    if (!$haslo OR empty($haslo)) {
include("head2.php");
echo '<p class="alert">Wype³nij pole z has³em!</p>';
include("foot.php");
exit;
}
$istnick = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `uzytkownicy` WHERE `nick` = '$login' AND `haslo` = '$haslo'")); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($istnick[0] == 0) {
echo 'Logowanie nieudane. SprawdŸ pisowniê nicku oraz has³a.';
    } else {

$_SESSION['nick'] = $login;
$_SESSION['haslo'] = $haslo;

header("Location: indeks.php");
}
?>