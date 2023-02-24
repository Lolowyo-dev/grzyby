<?php
    include('polaczenie.php');

    $zapytanie2 = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny = 1;";
    $wynik2 = mysqli_query($conn, $zapytanie2);
    $row2 = mysqli_fetch_all($wynik2, MYSQLI_ASSOC);
    foreach($row2 as $rof) {
        echo "<p>".$rof["nazwa"]."(".$rof["potoczna"].")</p>";
    }

    include('zakonczenie.php');
?>