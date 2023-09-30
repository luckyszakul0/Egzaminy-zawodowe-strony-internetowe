<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Organizer</title>
</head>
<body>
    <section id="baner-lewy">
        <h2>MÓJ ORGANIZER</h2>
    </section>
    <section id="baner-srodek">
        <form action="" method="post">
            <label for="wpis">Wpis wydarzenia:</label>
            <input type="text" name="wpis">
            <button type="submit">ZAPISZ</button>
        </form>
        <?php
            $polaczenie = new mysqli('localhost', 'root', '', 'egzamin6');
            $zapytanie4 = 'UPDATE zadania SET wpis = "' . $_POST['wpis'] . '" WHERE dataZadania = "2020-08-27";';
            $polaczenie->query($zapytanie4);
        ?>
    </section>
    <section id="baner-prawy">
        <img src="./logo2.png" alt="Mój organizer">
    </section>
    <section id="glowny">
        <?php
            $zapytanie1 = 'SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = "sierpien";';
            $wynik1 = $polaczenie->query($zapytanie1);
            while($wiersz1 = $wynik1->fetch_assoc()){
                echo '<section class="dzien"><h6>' . $wiersz1['dataZadania'] . ', ' . $wiersz1['miesiac'] . '</h6><p>' . $wiersz1['wpis'] . '</p></section>';
            }
        ?>
    </section>
    <section id="stopka">
        <?php
            $zapytanie2 = 'SELECT miesiac, rok FROM zadania WHERE dataZadania="2020-08-01";';
            $wynik2 = $polaczenie->query($zapytanie2);
            $wynik2 = $wynik2->fetch_assoc();
            echo '<h1>miesiąc: ' . $wynik2['miesiac'] . ', rok: ' . $wynik2['rok'] . '</h1>';

            $polaczenie->close();
        ?>
        <p>Stronę wykonał: 00000000</p>
    </section>
</body>
</html>