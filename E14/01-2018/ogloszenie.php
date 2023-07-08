<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'ogloszenia');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <section id="baner">
        <h1>Portal Ogłoszeniowy</h1>
    </section>
    <section id="panel-lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="./ksiazki.jpg" alt="Kupię / sprzedam książkę">
        <table>
            <tr>
                <td>Liczba ogłoszeń</td>
                <td>Cena ogłoszenia</td>
                <td>Bonus</td>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td>0,80 PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0,60 PLN</td>
            </tr>
        </table>
    </section>
    <section id="panel-prawy">
        <h2>Ogłoszenia kategorii książki</h2>
        <?php
            $zapytanie1 = 'SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1;';
        
            $wynik1 = $polaczenie->query($zapytanie1);
            while($wiersz1 = $wynik1->fetch_assoc()){
                echo '<h3>' . $wiersz1['id'] . ' ' . $wiersz1['tytul'] . '</h3>';
                echo '<p>' . $wiersz1['tresc'] . '</p>';
                
                $zapytanie2 = "SELECT uzytkownik.telefon FROM uzytkownik, ogloszenie WHERE ogloszenie.uzytkownik_id = uzytkownik.id AND ogloszenie.id =" . $wiersz1['id'];

                $wynik2 = $polaczenie->query($zapytanie2);
                $wiersz2 = $wynik2->fetch_assoc();

                echo '<p>telefon kontaktowy: ' . $wiersz2['telefon'] . '</p>';
            }
        ?>
    </section>
    <section id="stopka">
        <p>Portal ogłoszeniowy opracował: 000000000</p>
    </section>
</body>
</html>
<?php
    $polaczenie->close();
?>