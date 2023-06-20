<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'szkola');

    $zapytanie1 = 'SELECT imie, nazwisko FROM uczen;';
    $zapytanie2 = 'SELECT imie, nazwisko FROM uczen WHERE id = 2;';
    $zapytanie4 = 'SELECT AVG(ocena) as srednia FROM ocena WHERE przedmiot_id = 1 AND uczen_id = 2;';
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Szkoła Ponadgimnazjalna</title>
</head>
<body>
    <div id="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>
    <div id="panel-lewy">
        <h2>Lista uczniów: </h2>
        <ol>
            <?php
                $rezultat1 = $polaczenie->query($zapytanie1);
                while($wiersz1 = $rezultat1->fetch_row()){
                    echo '<li>'. $wiersz1[0] . ' ' . $wiersz1[1] . '</li>';
                }
            ?>
        </ol>
    </div>
    <div id="panel-prawy">
        <h2>Uczeń: 
            <?php
                $rezultat2 = $polaczenie->query($zapytanie2);
                $rezultat2 = $rezultat2->fetch_assoc();
                echo $rezultat2['imie'] . ' ' . $rezultat2['nazwisko'];
            ?>
        </h2>
        <p>Średnia ocen z języka polskiego: 
            <?php
                $rezultat4 = $polaczenie->query($zapytanie4);
                $rezultat4 = $rezultat4->fetch_assoc();
                echo $rezultat4['srednia'];
            ?>
        </p>
    </div>
    <div id="stopka">
        <h3>Zespół Szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował: 0000000000</p>
    </div>
</body>
</html>
<?php
    $polaczenie->close();
?>