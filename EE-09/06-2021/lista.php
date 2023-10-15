<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Lista przyjaciół</title>
</head>
<body>
    <section id="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </section>
    <section id="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $polaczenie = new mysqli('localhost', 'root', '', 'dane');
            $zapytanie1 = 'SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN(1, 2, 6);';
            $wynik1 = $polaczenie->query($zapytanie1);
            while($wiersz1 = $wynik1->fetch_assoc()){
                echo '<section class="zdjecie"><img src="' . $wiersz1['zdjecie'] . '" alt="przyjaciel"></section>';
                echo '<section class="opis"><h3>' . $wiersz1['imie'] . ' ' . $wiersz1['nazwisko'] . '</h3><p>Ostatni wpis: ' . $wiersz1['opis'] . '</p></section>';
                echo '<section class="linia"><hr></section>';
            }

            $polaczenie->close();
        ?>
    </section>
    <section id="stopka-1">
        Stronę wykonał: 00000000
    </section>
    <section id="stopka-2">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </section>
</body>
</html>