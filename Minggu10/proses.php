<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
 header("Allow: POST");
 http_response_code(405);
 exit("Gunakan form untuk mengirim data.");
}
$nama = $_POST["nama"] ?? "";
$email = $_POST["email"] ?? "";
$pesan = $_POST["pesan"] ?? "";
if (!is_string($nama) || !is_string($email) ||
 !is_string($pesan)) {
 http_response_code(400);
 exit("Semua isian harus berupa teks.");
}
$nama = trim($nama);
$email = trim($email);
$pesan = trim($pesan);
?>


<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respons Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Data berhasil diterima</h1>
    <p>Nama: <?= htmlspecialchars($nama,
    ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
    <p>Email: <?= htmlspecialchars($email,
    ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
    <h2>Pesan</h2>
    <p class="pesan"><?= htmlspecialchars($pesan,
    ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
    <p>Data hanya ditampilkan, tidak disimpan permanen.</p>
    <a href="index.php">Kembali ke form</a>
</main>
</body>
</html>