<?php include("config.php");

$ip = $_SERVER['REMOTE_ADDR'];

$akcja = $_GET['akcja'];
    if ($akcja == wykonaj) {
//
$nick = substr(addslashes(htmlspecialchars($_POST['nick'])),0,32);
$haslo = substr(addslashes($_POST['haslo']),0,32);
$vhaslo = substr($_POST['vhaslo'],0,32);
$email = substr($_POST['email'],0,32);
$vemail = substr($_POST['vemail'],0,32);
$nick = trim($nick);
//kilka sprawdzen co do nicku i maila
$spr1 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM uzytkownicy WHERE nick='$nick' LIMIT 1")); //czy user o takim nicku istnieje
$spr2 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM uzytkownicy WHERE email='$email' LIMIT 1")); // czy user o takim emailu istnieje
$pos = strpos($email, "@");
$pos2 = strpos($email, ".");
$emailx = explode("@", $email);
if ($emailx[1] == 'o2.pl') {
$emailx1 = $emailx[0].'@go2.pl';
$emailx2 = $emailx[0].'@tlen.pl';
$spr3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM uzytkownicy WHERE email='$emailx1' OR `email`='$emailx2' LIMIT 1"));
}elseif ($emailx[1] == 'go2.pl') {
$emailx1 = $emailx[0].'@o2.pl';
$emailx2 = $emailx[0].'@tlen.pl';
$spr3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM uzytkownicy WHERE email='$emailx1' OR `email`='$emailx2' LIMIT 1"));
}elseif ($emailx[1] == 'tlen.pl') {
$emailx1 = $emailx[0].'@go2.pl';
$emailx2 = $emailx[0].'@o2.pl';
$spr3 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM uzytkownicy WHERE email='$emailx1' OR `email`='$emailx2' LIMIT 1"));
}
$komunikaty = '';
$spr4 = strlen($nick);
$spr5 = strlen($haslo);
//sprawdzenie co uzytkownik zle zrobil
if (!$nick || !$email || !$haslo || !$vhaslo || !$vemail ) {
$komunikaty .= "Musisz wype³niæ wszystkie pola!<br>"; }
if ($spr4 < 4) {
$komunikaty .= "Login musi mieæ przynajmniej 4 znaki<br>"; }
if ($spr5 < 4) {
$komunikaty .= "Has³o musi mieæ przynajmniej 4 znaki<br>"; }
if ($spr1[0] >= 1) {
$komunikaty .= "Ten login jest zajêty!<br>"; }
if ($spr2[0] >= 1) {
$komunikaty .= "Ten e-mail jest ju¿ u¿ywany!<br>"; }
if ($email != $vemail) {
$komunikaty .= "E-maile siê nie zgadzaj¹ ...<br>";}
if ($haslo != $vhaslo) {
$komunikaty .= "Has³a siê nie zgadzaj¹ ...<br>";}
if ($pos == false OR $pos2 == false) {
$komunikaty .= "Nieprawid³owy adres e-mail<br>"; }
if ($spr3[0] >= 1) {
$komunikaty .= "Nie mo¿na zarejestrowaæ kilku kont na jedn¹ pocztê o2.<br>"; }

//jesli cos jest nie tak to blokuje rejestracje i wyswietla bledy
if ($komunikaty) {
echo '
<b>Rejestracja nie powiod³a siê, popraw nastêpuj¹ce b³êdy:</b><br>
'.$komunikaty.'<br>';
} else {
//jesli wszystko jest ok dodaje uzytkownika i wyswietla informacje
$nick = str_replace ( ' ','', $nick );
$haslo = md5($haslo); //szyfrowanie hasla

mysql_query("INSERT INTO `uzytkownicy` (nick, email, haslo, ip) VALUES('$nick','$email','$haslo','$ip')") or die("Nie mog³em Cie zarejestrowaæ!");

echo '<br><span style="color: green; font-weight: bold;">Zosta³eœ zarejestrowany '.$nick.'. Teraz mo¿esz siê zalogowaæ</span><br>';
echo '<br><a href="logowanie.php">Logowanie</a>';
}
}
?>

<form method="post" action="rejestracja.php?akcja=wykonaj">
<table>
<tr class="tlo-b"><td>Nick:</td>
<td><input maxlength="18" type="text" name="nick" value="<?=$nick?>"></td></tr>
<tr class="tlek"><td>Has³o:</td>
<td><input maxlength="32" type="password" name="haslo"></td></tr>
<tr class="tlo-b"><td>Powtórz has³o:</td>
<td><input maxlength="32" type="password" name="vhaslo"></td></tr>
<tr class="tlo-b"><td>E-mail:</td>
<td><input type="text" name="email" maxlength="50" value="<?=$email?>"></td></tr>
<tr class="tlek"><td>Powtórz E-mail:</td>
<td><input type="text" maxlength="50" name="vemail" value="<?=$vemail?>"></span></td></tr>


<tr><td colspan="2" align="center"><input type="submit" value="Zarejestruj"></td></tr>
</table></form>

