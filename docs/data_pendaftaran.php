<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
</head>
<body>
    <h1>Data Pendaftaran</h1>
    <?php
    if (file_exists('data_pendaftaran.txt')) {
        $data = file_get_contents('data_pendaftaran.txt');
        echo nl2br($data);
    } else {
        echo "Tidak ada data pendaftaran.";
    }
    ?>
    <br>
    <a href="index.php">Kembali ke Formulir Pendaftaran</a>
</body>
</html>
