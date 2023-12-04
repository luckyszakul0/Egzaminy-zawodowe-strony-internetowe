<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <section id="baner-lewy">
        <img src="./logo.png" alt="meteo" height="80">
    </section>
    <section id="baner-srodek">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section id="baner-prawy">
        <p>maj, 2019 r.</p>
    </section>
    <section id="glowny">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
            
                $polaczenie = mysqli_connect('localhost', 'root', '', 'prognoza');
                $zapytanie = 'SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC;';
                $wynik = mysqli_query($polaczenie, $zapytanie);

                while($wiersz = mysqli_fetch_assoc($wynik)){
                    echo '<tr>
                        <td>' . $wiersz['data_prognozy'] . '</td>
                        <td>' . $wiersz['temperatura_noc'] . '</td>
                        <td>' . $wiersz['temperatura_dzien'] . '</td>
                        <td>' . $wiersz['opady'] . '</td>
                        <td>' . $wiersz['cisnienie'] . '</td>
                    </tr>';
                }
            
                mysqli_close($polaczenie);
            ?>
        </table>
    </section>
    <section id="dolny-lewy">
        <img src="./obraz.jpg" alt="Polska, Wrocław" height="200">
    </section>
    <section id="dolny-prawy">
        <a href="./kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="stopka">
        <p>Stronę wykonał: Łukasz Lubaszewski</p>
    </section>
</body>
</html>