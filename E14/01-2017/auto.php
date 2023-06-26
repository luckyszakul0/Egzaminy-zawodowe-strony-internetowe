<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'komis');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="auto.css">
    <title>Komis Samochodowy</title>
</head>
<body>
    <section id="baner">
        <h1>SAMOCHODY</h1>
    </section>
    <section id="panel-lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php
                #skrypt 1

                $kwerenda1 = 'SELECT id, marka, model FROM samochody;';
                $rezultat1 = $polaczenie->query($kwerenda1);
                while($wiersz1 = $rezultat1->fetch_assoc()){
                    echo '<li>' . $wiersz1['id'] . ' ' . $wiersz1['marka'] . ' ' . $wiersz1['model'] . '</li>';
                }
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
                #skrypt 2

                $kwerenda2 = 'SELECT Samochody_id, Klient FROM zamowienia;';
                $rezultat2 = $polaczenie->query($kwerenda2);
                while($wiersz2 = $rezultat2->fetch_assoc()){
                    echo '<li>' . $wiersz2['Samochody_id'] . ' ' . $wiersz2['Klient'] . '</li>';
                }
            ?>
        </ul>
    </section>
    <section id="panel-prawy">
        <h2>Pełne dane: Fiat</h2>
        <?php
            #skrypt 3
            
            $kwerenda3 = 'SELECT * FROM samochody WHERE marka = "Fiat";';
            $rezultat3 = $polaczenie->query($kwerenda3);
            while($wiersz3 = $rezultat3->fetch_assoc()){
                echo $wiersz3['id'] . ' / ' . $wiersz3['marka'] . ' / ' . $wiersz3['model'] . ' / ' . $wiersz3['rocznik'] . ' / ' . $wiersz3['kolor'] . ' / ' . $wiersz3['stan'] . '<br>';
            }
        ?>
    </section>
    <section id="stopka">
        <table>
            <tr>
                <td><a href="./kwerendy.txt">Kwerendy</a></td>
                <td>Autor: 00000000000</td>
                <td><img src="./auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </section>
</body>
</html>
<?php
    $polaczenie->close();
?>