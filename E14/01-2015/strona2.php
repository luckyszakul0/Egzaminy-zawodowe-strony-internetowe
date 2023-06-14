<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>Potęgowanie</title>
        <style>
            p{
                padding: 0;
                margin: 0;
                display: inline;
            }
            img{
                margin-bottom: 15px;
            }
            #container{
                width: 800px;
                height: 100%;
            }
            #menu{
                width: 35%;
                float: left;
                height: 100%;
            }
            #tresc{
                float: left;
                width: 65%;
                height: 100%;
            }
            form>p{
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <a href="index.html"><img src="baner.jpg" alt="baner"></a>
            <div id="menu">
                <p>Menu</p><br>
                <p>- <a href="strona1.html">proste działania</a></p><br>
                <p>- <a href="strona2.php">potęgowanie</a></p><br>
            </div>
            <div id="tresc">
                <h1>POTĘGOWANIE</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <p>Podaj podstawę potęgi: </p><input type="number" name="input1"> <br> <br>
                    <p>Podaj, dodatni, całkowity wykładnik potęgi: </p><input type="number" name="input2"><br><br>
                    <button type="submit">POTĘGOWANIE</button>
                </form>
                <?php
                    if('POST' === $_SERVER['REQUEST_METHOD']){
                        $number1 = $_POST['input1'];
                        $number2 = $_POST['input2'];

                        if(empty($_POST['input1']) || (empty($_POST['input2']) && $_POST['input2'] == ""))
                        // if(@!isset($number1) || @!isset($number2) || (@empty($_POST['input1']) && @empty($_POST['input2'])))
                            echo '<p style="color: red;">Wpisz podstawę i wykładnik potęgi.</p>';
                        else if($number2 < 0)
                            echo '<p style="color: red;">Wykładnik potęgi musi być dodatni.</p>';
                        else {
                            echo 'Wynik działania wynosi: ' . $number1**$number2;
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>