<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Klub wędkowania</title>
</head>
<body>
    <header id="baner">
        <h2>Wędkuj z nami!</h2>
    </header>
    <section id="lewy">
        <img src="./ryba2.jpg" alt="Szczupak">
    </section>
    <section id="prawy">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php
            $polaczenie = new mysqli('localhost', 'root', '', 'wedkowanie');
            $zapytanie1 = 'SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 2;';

            $wynik1 = $polaczenie->query($zapytanie1);

            while($wiersz1 = $wynik1->fetch_assoc()){
                echo $wiersz1['id'] . '. ' . $wiersz1['nazwa'] . ', występuje w: ' . $wiersz1['wystepowanie'] . '<br>';
            };

            $polaczenie->close();
        ?>
        <ol>
            <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
    </section>
    <footer id="stopka">
        <p>Stronę wykonał: 000000</p>
    </footer>
</body>
</html>