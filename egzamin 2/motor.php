<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header id = "baner"> 
            <h1 id = "napisjeden">Motocykle - moja pasja</h1>
        </header>
        <aside id = "lewy"> 
            <h2 id = "tekst_lewy"> Gdzie pojechać?</h2>
            <?php include 'skrypt1.php'; ?>
        </aside>
        <section id = "prawy_jeden"> 
            <h2 id = "tekst_prawy_jeden">Co kupić?</h2>
            <ol>
                <li>Honda CBR125R</li>
                <li>Yamaha YBR125</li>
                <li>Honda VFR800i</li>
                <li>Honda CBR1100XX</li>
                <li>BMW R1200GS LC</li>
            </ol>
        </section>
        <aside id = "prawy_dwa"> 
            <h2 id = "teks_prawy_dwa">Statystyki</h2>
            <br>
            <p> <?php include 'skrypt2.php' ?></p>
            <br>
            <p>Użytkowników forum: 200</p>
            <br>
            <p>Przesłanych zdjęć: 1300</p>
        </aside>
    </main>
        <footer id = "stopka"><h1 id="napisdwa"> Strone Tworzył: Cyprian Łatka</h1></footer>
    <img src="motor.png" alt="motocykl" id="motor">
</body>
</html>
