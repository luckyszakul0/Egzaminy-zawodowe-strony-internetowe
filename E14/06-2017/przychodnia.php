<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'przychodnia');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="przychodnia.css">
    <title>Przychodnia</title>
</head>
<body>
    <section id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </section>
    <section id="panel-lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php
            $kwerenda1 = 'SELECT id, imie, nazwisko FROM pacjenci;';
            $wynik1 = $polaczenie->query($kwerenda1);

            while($wiersz1 = $wynik1->fetch_assoc()){
                echo $wiersz1['id'] . ' ' . $wiersz1['imie'] . ' ' . $wiersz1['nazwisko'] . '<br>';
            }
        ?>
        <br><br>
        <form action="./pacjent.php" method="post">
            <p>Podaj id:</p>
            <input type="number" name="id">
            <button type="submit">Pokaż dane</button>
        </form>
        <h3>LEKARZE</h3>
        <ul>
            <li>
                pn - śr
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowalewski</li>
                </ol>
            </li>
            <li>
                czw - pt
                <ol>
                    <li>Krzysztof Nowak</li>
                </ol>
            </li>
        </ul>
    </section>
    <section id="panel-prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <p>Brak wybranego pacjenta</p>
    </section>
    <section id="stopka">
        <p>utworzone przez: 000000000</p>
        <a href="./kwerendy.txt">Pobierz plik z kwerendami</a>
    </section>
</body>
</html>
<?php
    $polaczenie->close();
?>