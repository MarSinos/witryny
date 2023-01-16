<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Karty wędkarskie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h2>Zgłoszenie na kartę wędkarską</h2>
    </div>
    <div class="glowny">
        <h4>Formularz - karta wędkarska</h4>
        <form action="zapisz.php" method="post">
            imie:<br>
            <input type="text" name="imie"><br>

            nazwisko:<br>
            <input type="text" name="nazwisko"><br>

            adres:<br>
            <input type="text" name="adres" size="30"><br>

            <input type="reset" value="CZYŚĆ">
            <input type="submit" value="ZAPISZ">
        </form>
        <?php
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $adres = $_POST['adres'];
            print_r($imie);
            print_r($nazwisko);
            print_r($adres);
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            $zapytanie = "INSERT INTO `wedkowanie`.`karty_wedkarskie`(`id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES (NULL, '$imie', '$nazwisko', '$adres', NULL, NULL);";
            $query = mysqli_query($conn, $zapytanie);
            mysqli_close($conn);
        ?>
    </div>
    <div class="lewy">
        <h4>Typy łowisk</h4>
        <ul>
            <li>Zalewy</li>
            <li>Stawy</li>
            <li>Jeziora</li>
            <li>Rzeki</li>
        </ul>
    </div>
    <div class="srodek">
        <img src="wedka.jpg" alt="karta wędkarska">
    </div>
    <div class="prawy">
        <p>Stronę przygotował: 2137</p>
        <a id="odnosnik" href="http://www.kartawedkarska.pl">Karta wędkarska</a>
    </div>
</body>
</html>