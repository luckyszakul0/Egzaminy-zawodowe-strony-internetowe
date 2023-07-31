<?php
    $polaczenie = new mysqli('localhost', 'root', '', 'sklep');
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </section>
    <section id="lewy">
        <h3>Promocja 15% obejmuje artykuły:</h3>
        <ul>
            <?php
                $zapytanie1 = 'SELECT nazwa FROM towary WHERE promocja = 1;';

                $wynik1 = $polaczenie->query($zapytanie1);
                while($wiersz1 = $wynik1->fetch_array()){
                    echo '<li>' . $wiersz1[0] . '</li>';
                }
            ?>
        </ul>
    </section>
    <section id="srodkowy">
        <h3>Cena wybranego artykułu w promocji</h3>
        <form action="" method="post">
            <select name="produkty">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <button type="submit">WYBIERZ</button>
        </form>
        <?php
        if(isset($_POST['produkty'])){
            $produkt = $_POST['produkty'];
            $zapytanie2 = 'SELECT cena FROM towary WHERE nazwa = "' . $produkt . '";';

            $wynik2 = $polaczenie->query($zapytanie2);
            $wiersz2 = $wynik2->fetch_assoc();
            $cena = $wiersz2['cena'];
            $cena = $cena * 0.85;
            $cena = round($cena, 2);

            echo 'Cena: ' . $cena;
        }
        ?>
    </section>
    <section id="prawy">
        <h3>Kontakt</h3>
        <p>telefon: 123123123<br>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="./promocja2.png" alt="promocja">
    </section>
    <section id="stopka">
        <h4>Autor strony 00000000000</h4>
    </section>
</body>
</html>

<?php
    $polaczenie->close();
?>