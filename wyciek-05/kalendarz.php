<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="baner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div class="baner2">
        <h1>KALENDARZ</h1>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
            $zapytanie = "SELECT `miesiac`, `rok` FROM `egzamin5`.`zadania` WHERE `dataZadania` ='2020-07-01';";
            $query = mysqli_query($conn, $zapytanie);
            while ($row = mysqli_fetch_array($query)) {
                echo "miesiąc $row[miesiac], rok: $row[rok]";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div class="glowny">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
            $zapytanie = "SELECT `dataZadania`, `wpis` FROM `egzamin5`.`zadania` WHERE `miesiac` = 'lipiec';";
            $query = mysqli_query($conn, $zapytanie);
            while ($row = mysqli_fetch_array($query)) {
                echo "<section class='bloczek'> 
                    <h5>$row[0]</h5>
                    <p>$row[1]</p>
                </section>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <footer>
        <form action="" method="post">
            dodaj wpis: <input type="text" name="dodaj">
            <input type="submit" value="DODAJ">
        </form>
        <?php
            @$wpis=$_POST['dodaj'];
            $conn=mysqli_connect('localhost', 'root', '', 'egzamin5');
            $zapytanie="UPDATE `egzamin5`.`zadania` SET `wpis`='$wpis' WHERE `dataZadania` = '2020-07-13';";
            $query = mysqli_query($conn, $zapytanie);
            mysqli_close($conn);
        ?>
        <br><p>Stronę wykonał: 0000</p>
    </footer>
</body>
</html>