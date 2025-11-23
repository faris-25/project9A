<!DOCTYPE html>
<head>
    <title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
    Kapal Asing, Silahkan Identifikasi diri And! <br>
    <?php
    $namad = "Abdullah Padel";
    $namat = "Salman Mancing";
    $namab = "Sir Piecer";
    ?>
    <b> Ini adalah Kapal Federasi Planet USS Enterprise. <br>
    <?php
        print ("Saya $namad,$namat,$namab,kapten kapal.</br>");
        print $namad.$namat.$namab;
    echo "<br>";
    echo "Saya", $namad,$namat,$namab;
    ?>
</body>
</html>