<?php
    include('polaczenie.php');
    $zapytanie = "SELECT nazwa_pliku, potoczna FROM grzyby;";
    $wynik = mysqli_query($conn, $zapytanie);
    $row = mysqli_fetch_all($wynik, MYSQLI_ASSOC);;
    foreach($row as $rof) {
        echo '<img src="'.$rof["nazwa_pliku"].'" title="'.$rof["potoczna"].'">';
    }
    include('zakonczenie.php');
?>