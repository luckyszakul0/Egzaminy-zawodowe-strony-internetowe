<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'dane');

    $tytul = $_POST['tytul'];
    $gatunek = $_POST['gatunek'];
    $rok = $_POST['rok'];
    $ocena = $_POST['ocena'];

    $zapytanie = "INSERT INTO filmy (tytul, rok, gatunki_id, ocena) VALUES ('$tytul', $rok, $gatunek, $ocena);";
    $polaczenie->query($zapytanie);

    echo "Film $tytul został dodany do bazy";

    $polaczenie->close();
?>