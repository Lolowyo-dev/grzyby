<?php
    include('polaczenie.php');

    $zapytanie3 = "SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa as 'nazwa_rodziny' FROM grzyby JOIN rodzina on rodzina.id = grzyby.rodzina_id WHERE grzyby.potrawy_id = 1;";
    $wynik3 = mysqli_query($conn, $zapytanie3);
    $row3 = mysqli_fetch_all($wynik3, MYSQLI_ASSOC);
    echo "<ol>";
    foreach($row3 as $rof) {
        echo "<li>".$rof["nazwa"]."(".$rof["potoczna"]."), rodzina: ".$rof["nazwa_rodziny"]."</li>";
    }
    echo "</ol>";
    }

    include('zakonczenie.php');
?>