<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "biuro@kof-24.pl";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "ersoft66@gmail.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Kompleksowa Obsługa firm";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>