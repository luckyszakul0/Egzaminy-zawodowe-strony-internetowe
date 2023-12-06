<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Forum o psach</title>
</head>
<body>
    <section id="baner">
        <h1>Forum wielbicieli psów</h1>
    </section>
    <section id="lewy">
        <img src="./obraz.jpg" alt="foksterier">
    </section>
    <section id="prawy-1">
        <h2>Zapisz się</h2>
        <form action="./logowanie.php" method="post">
            login: <input type="text" name="login"> <br>
            hasło: <input type="password" name="haslo-1"> <br>
            powtórz hasło: <input type="password" name="haslo-2"> <br>
            <button type="submit" name="submit">Zapisz</button>
        </form>
        <?php
        
        $validation_passed = true;
        $polaczenie = mysqli_connect('localhost', 'root', '', 'psy');
        $zapytanie3 = 'SELECT login FROM uzytkownicy;';

        if(isset($_POST['submit'])){
            if(!isset($_POST['login']) || $_POST['login'] == "" || !isset($_POST['haslo-1']) || $_POST['haslo-1'] == "" || !isset($_POST['haslo-2']) || $_POST['haslo-2'] == ""){
                echo "<p>Wypełnij wszystkie pola</p>";
                $validation_passed = false;
            }

            $wynik3 = mysqli_query($polaczenie, $zapytanie3);
            while($wiersz3 = mysqli_fetch_assoc($wynik3)){
                if($_POST['login'] === $wiersz3['login']){
                    echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                    $validation_passed = false;
                }
            }

            if($_POST['haslo-1'] != $_POST['haslo-2']){
                echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                $validation_passed = false;
            }

            if($validation_passed == true){
                $hashed_password = sha1($_POST['haslo-1']);
                $wynik2 = mysqli_query($polaczenie, 'INSERT INTO uzytkownicy VALUES (null, "' . $_POST['login'] . '", "' . $hashed_password . '");');
                echo "<p>Konto zostało dodane</p>";
            }}
        
        ?>
    </section>
    <section id="prawy-2">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="./regulamin.html">Przeczytaj regulamin forum</a>
    </section>
    <section id="stopka">
        Stronę wykonał: 0000000
    </section>
</body>
</html>