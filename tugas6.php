<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4b</title>
</head>
<body>
    <?php
    // Array awal dengan 5 negara ASEAN
    $negaraASEAN = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
    
    echo "<h3>Daftar Negara ASEAN awal :</h3>";
    echo "<ul>";
    foreach ($negaraASEAN as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    
    // Menambahkan 3 negara baru ke array
    array_push($negaraASEAN, "Laos", "Filipina", "Myanmar");
    
    echo "<h3>Daftar Negara ASEAN baru :</h3>";
    echo "<ul>";
    foreach ($negaraASEAN as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
