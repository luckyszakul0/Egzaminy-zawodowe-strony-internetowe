<?php
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $polaczenie = new mysqli('localhost', 'root', '', 'wedkarstwo');

    $zapytanie1 = 'INSERT INTO zawody_wedkarskie(karty_wedkarskie_id, lowisko_id, data_zawodow, sedzia) VALUES (0, ' . $lowisko . ', "' . $data . '", "' . $sedzia . '");';
    $wynik1 = $polaczenie->query($zapytanie1);

    $polaczenie->close();
?>