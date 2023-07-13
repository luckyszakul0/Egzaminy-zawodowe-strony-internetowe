<?php
    echo 'Dodano rezerwację do bazy';
    $polaczenie = new mysqli('localhost', 'root', '', 'baza');

    $data = $_POST['data'];
    $osoby = $_POST['osoby'];
    $telefon = $_POST['telefon'];
    $zapytanie = 'INSERT INTO rezerwacje (nr_stolika, data_rez, liczba_osob, telefon) VALUES (null, "' . $data . '", ' . $osoby . ', ' . $telefon . ');';

    $wynik = $polaczenie->query($zapytanie);
    $polaczenie->close();
?>