<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4c</title>
</head>
<body>
    <?php
    // Array asosiatif negara ASEAN dan ibu kotanya
    $negaraASEAN = [
        "Indonesia" => "D.K.I. Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
    ];
    
    echo "<h3>Daftar Negara ASEAN dan Ibukota :</h3>";
    echo "<ul>";
    foreach ($negaraASEAN as $negara => $ibukota) {
        echo "<li>$negara : $ibukota</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
