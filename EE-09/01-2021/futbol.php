<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>
<body>
    <section id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="./obraz1.jpg" alt="boisko">
    </section>
    <section id="mecze">
        <?php
            $polaczenie = new mysqli('localhost', 'root', '', 'egzamin');
            $zapytanie1 = 'SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = "EVG";';
            $wynik1 = $polaczenie->query($zapytanie1);
            
            while($wiersz1 = $wynik1->fetch_assoc()){
                echo '<section class="mecz"><h3>' . $wiersz1['zespol1'] . ' - ' . $wiersz1['zespol2'] . '</h3><h4>' . $wiersz1['wynik'] . '</h4><p>w dniu: ' . $wiersz1['data_rozgrywki'] . '</p></section>';
            }
        ?>
    </section>
    <section id="glowny">
        <h2>Reprezentacja Polski</h2>
    </section>
    <section id="lewy">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="post">
            <input type="number" name="pozycja">
            <button type="submit">Sprawdź</button>
        </form>
        <ul>
            <?php
                if(isset($_POST['pozycja'])){
                    $pozycja = $_POST['pozycja'];
                    $zapytanie2 = 'SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = ' . $pozycja . ';';
                    $wynik2 = $polaczenie->query($zapytanie2);

                    while($wiersz2 = $wynik2->fetch_assoc()){
                        echo '<li>' . $wiersz2['imie'] . ' ' . $wiersz2['nazwisko'] . '</li>';
                    }
                }

                $polaczenie->close();
            ?>
        </ul>
    </section>
    <section id="prawy">
        <img src="./zad1.png" alt="piłkarz">
        <p>Autor: 00000000</p>
    </section>
</body>
</html>