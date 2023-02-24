<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Grzybobranie</title>
</head>
<body>
    <header>
        <section class="miniatura"><a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a></section>
        <section class="tytulowy"><h1>Idziemy na grzyby</h1></section>
    </header>
    <section class="lewy">
        <?php
            include('zap1.php');
        ?>
    </section>
    <aside class="prawy">
        <h2>Grzyby jadalne</h2>
        <?php
            include('zap2.php');
        ?>
        <h2>Polecamy do sosów</h2>
        <?php
            include('zap3.php');
        ?>
    </aside>
    <footer class="stop">
        <p>Autor: Kacper Kwarta</p>
    </footer>
</body>
</html>