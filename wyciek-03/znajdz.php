<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>W Warszawie</li>
                    <li>W Malborku</li>
                    <li>W Poznaniu</li>
                </ul>
            </li>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="" method="post">
            Podaj nazwę miasta: 
            <input type="text" name="miasto">
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
        if (isset($_POST['miasto'])) {
            $miasto = $_POST['miasto'];
            $zapytanie = "SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE `miasto` = '$miasto';";
            $conn=mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
            $query=mysqli_query($conn, $zapytanie);
            while($row = mysqli_fetch_array($query)) {
                echo "<h3>$row[0], $row[1]</h3>";
            }
        }
        mysqli_close($conn);
        ?>
    </div>
    <div class="stopka">
        <p>Stronę opracował: 2137</p>
    </div>
</body>
</html>