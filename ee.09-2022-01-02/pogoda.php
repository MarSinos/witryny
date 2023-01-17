<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocał</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="gora1">
        <img src="logo.png" alt="meteo">
    </div>
    <div class="gora2">
        <h1>Prognoza dla Wrocaławia</h1>
    </div>
    <div class="gora3">
        <p>maj, 2019r.</p>
    </div>
    <div class="glowny">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>ODPAY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <tr>
                <?php
                $conn = mysqli_connect("localhost", "root" , "", "prognoza");
                $zapytanie = "SELECT * FROM `prognoza`.`pogoda` WHERE `miasta_id` = '1' ORDER BY `data_prognozy`;";
                $query = mysqli_query($conn, $zapytanie);
                while($tab = mysqli_fetch_row($query)) {
                    echo "<tr><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td><td>$tab[5]</td><td>$tab[6]</td></tr>";
                    // print_r($wiersz);
                }
                ?>
            </tr>
        </table>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div class="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: 2137</p>
    </div>
</body>
</html>