<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sekretariat</title>
</head>
<body>
    <section id="lewy">
        <h1>Akta Pracownicze</h1>
        <?php
        
            $polaczenie = mysqli_connect('localhost', 'root', '', 'firma');
            $zapytanie1 = 'SELECT imie, nazwisko, adres, miasto, czyRODO, czyBadania FROM pracownicy WHERE id = 2;';

            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            $wiersz1 = mysqli_fetch_assoc($wynik1);

            echo '<h3>dane</h3>
            <p>' . $wiersz1['imie'] . ' ' . $wiersz1['nazwisko'] . '</p>
            <hr>
            <h3>adres</h3>
            <p>' . $wiersz1['adres'] . '</p>
            <p>' . $wiersz1['miasto'] . '</p>
            <hr>';

            if($wiersz1['czyRODO'] == 1)
                echo '<p>RODO: podpisano</p>';
            elseif($wiersz1['czyRODO'] == 0)
                echo '<p>RODO: niepodpisano</p>';
        
            if($wiersz1['czyBadania'] == 1)
                echo '<p>Badania: aktualne</p>';
            elseif($wiersz1['czyBadania'] == 0)
                echo '<p>Badania: nieaktualne</p>'
        ?>
        <hr>
        <h3>Dokumenty pracownika</h3>
        <a href="./cv.txt">Pobierz</a>
        <h1>Liczba zatrudnionych pracowników</h1>
        <p><?php
        
            $zapytanie2 = 'SELECT COUNT(*) AS liczba_rekordow FROM pracownicy;';
            $wynik2 = mysqli_fetch_assoc(mysqli_query($polaczenie, $zapytanie2));
            echo $wynik2['liczba_rekordow'];
        
        ?></p>
    </section>
    <section id="prawy">
        <?php
        
            $zapytanie3 = 'SELECT id, imie, nazwisko FROM pracownicy WHERE id = 2;';
            $wynik3 = mysqli_query($polaczenie, $zapytanie3);
            $wiersz3 = mysqli_fetch_assoc($wynik3);

            $obraz = $wiersz3['id'] . '.jpg';
            echo '<img src=' . $obraz . ' alt="pracownik">';
            echo '<h2>' . $wiersz3['imie'] . ' ' . $wiersz3['nazwisko'] . '</h2>';

            $zapytanie4 = 'SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM pracownicy JOIN stanowiska ON stanowiska.id = pracownicy.stanowiska_id WHERE pracownicy.id = 2;';
            $wynik4 = mysqli_query($polaczenie, $zapytanie4);
            $wiersz4 = mysqli_fetch_assoc($wynik4);

            echo '<h4>' . $wiersz4['nazwa'] . '</h4>';
            echo '<h5>' . $wiersz4['opis'] . '</h5>';

            mysqli_close($polaczenie);
        
        ?>
    </section>
    <section id="stopka">
        Autorem aplikacji jest: 0000000
        <ul>
            <li>skontaktuj się</li>
            <li>poznaj naszą firmę</li>
        </ul>
    </section>
</body>
</html>