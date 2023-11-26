<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Forum o psach</title>
</head>
<body>
    <section id="baner">
        <h1>Forum miłośników psów</h1>
    </section>
    <section id="lewy">
        <img src="./Avatar.png" alt="Użytkownik forum">
        <?php
        
        $polaczenie = mysqli_connect('localhost', 'root', '', 'forumpsy');
        $zapytanie1 = 'SELECT nick, postow, pytanie FROM konta JOIN pytania ON konta.id = pytania.konta_id WHERE konta.id = 1;';

        $wynik1 = mysqli_query($polaczenie, $zapytanie1);

        while($wiersz1 = mysqli_fetch_assoc($wynik1)){
            echo "<h4>Użytkownik " . $wiersz1['nick'] . "</h4>";
            echo "<p>" . $wiersz1['postow'] . " postów na forum</p>";
            echo "<p>" . $wiersz1['pytanie'] . "</p>";
        }

        ?>
        <video src="./video.mp4" controls loop></video>
    </section>
    <section id="prawy">
        <form action="./index.php" method="post">
            <textarea name="odpowiedz" cols="40" rows="4"></textarea>
            <button type="submit">Dodaj odpowiedź</button>
        </form>
        <?php

        if(isset($_POST['odpowiedz']) && $_POST['odpowiedz'] != ""){
            $wynik2 = mysqli_query($polaczenie, 'INSERT INTO odpowiedzi VALUES(null, 1, 5, "' . $_POST['odpowiedz'] . '");');
        }

        ?>
        <h2>Odpowiedzi na pytanie</h2>
        <ol>
            <?php
            
            $zapytanie3 = 'SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi JOIN konta ON odpowiedzi.konta_id = konta.id WHERE odpowiedzi.Pytania_id = 1;';
            $wynik3 = mysqli_query($polaczenie, $zapytanie3);

            while($wiersz3 = mysqli_fetch_assoc($wynik3)){
                echo "<li>" . $wiersz3['odpowiedz'] . " <em>" . $wiersz3['nick'] . "</em><hr></li>";
            }

            ?>
        </ol>
    </section>
    <section id="stopka">
        Autor: 000000000 <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
    </section>
</body>
</html>