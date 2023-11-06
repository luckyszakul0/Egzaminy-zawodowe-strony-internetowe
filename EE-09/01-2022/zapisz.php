<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'wedkowanie');
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $zapytanie1 = "INSERT INTO karty_wedkarskie VALUES(null, '$imie', '$nazwisko', '$adres', null, null);";
    $wynik1 = $polaczenie->query($zapytanie1);
    $polaczenie->close();
?>