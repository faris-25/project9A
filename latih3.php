<!DOCTYPE html>
<head>
    <title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
<h3>Faris Fadillah Akbar | A12.2024.07205</h3>
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