<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
    // Data Flora dan Fauna terancam punah (contoh kategori berdasarkan NRP % 5 = 3)
    $data = [
        [
            "nama" => "Harimau Sumatra",
            "nama_latin" => "Panthera tigris sumatrae",
            "status" => "Kritis",
            "habitat" => "Sumatra",
            "gambar" => "harimau_sumatra.jpg"
        ],
        [
            "nama" => "Orangutan Kalimantan",
            "nama_latin" => "Pongo pygmaeus",
            "status" => "Kritis",
            "habitat" => "Kalimantan",
            "gambar" => "orangutan_kalimantan.jpg"
        ],
        [
            "nama" => "Badak Jawa",
            "nama_latin" => "Rhinoceros sondaicus",
            "status" => "Kritis",
            "habitat" => "Ujung Kulon",
            "gambar" => "badak_jawa.jpg"
        ],
        [
            "nama" => "Elang Jawa",
            "nama_latin" => "Nisaetus bartelsi",
            "status" => "Terancam",
            "habitat" => "Pulau Jawa",
            "gambar" => "elang_jawa.jpg"
        ],
        [
            "nama" => "Raflesia Arnoldii",
            "nama_latin" => "Rafflesia arnoldii",
            "status" => "Terancam",
            "habitat" => "Bengkulu, Sumatra",
            "gambar" => "raflesia_arnoldii.jpg"
        ],
        [
            "nama" => "Gajah Sumatra",
            "nama_latin" => "Elephas maximus sumatranus",
            "status" => "Kritis",
            "habitat" => "Sumatra",
            "gambar" => "gajah_sumatra.jpg"
        ],
        [
            "nama" => "Bekantan",
            "nama_latin" => "Nasalis larvatus",
            "status" => "Terancam",
            "habitat" => "Kalimantan",
            "gambar" => "bekantan.jpg"
        ],
        [
            "nama" => "Burung Cendrawasih",
            "nama_latin" => "Paradisaea",
            "status" => "Terancam",
            "habitat" => "Papua",
            "gambar" => "cendrawasih.jpg"
        ],
        [
            "nama" => "Komodo",
            "nama_latin" => "Varanus komodoensis",
            "status" => "Rentan",
            "habitat" => "Nusa Tenggara Timur",
            "gambar" => "komodo.jpg"
        ],
        [
            "nama" => "Burung Jalak Bali",
            "nama_latin" => "Leucopsar rothschildi",
            "status" => "Kritis",
            "habitat" => "Bali",
            "gambar" => "jalak_bali.jpg"
        ]
    ];

    echo "<h3>Daftar Flora dan Fauna Terancam Punah</h3>";
    echo "<table>";
    echo "<tr>
            <th>Nama</th>
            <th>Nama Latin</th>
            <th>Status</th>
            <th>Habitat</th>
            <th>Gambar</th>
          </tr>";

    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>{$item['nama']}</td>";
        echo "<td>{$item['nama_latin']}</td>";
        echo "<td>{$item['status']}</td>";
        echo "<td>{$item['habitat']}</td>";
        echo "<td><img src='{$item['gambar']}' alt='{$item['nama']}'></td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
