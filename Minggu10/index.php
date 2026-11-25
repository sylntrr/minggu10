<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu Kampus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Buku Tamu Kampus</h1>
    <p>Semua kolom wajib diisi. Data tidak disimpan permanen.</p>
    <form action="proses.php" method="post">
    <!-- KOLOM FORM DI SINI -->
     <label for="nama">Nama</label>
        <input id="nama" name="nama" type="text"
            required maxlength="80">
        <label for="email">Email</label>
        <input id="email" name="email" type="email"
            required maxlength="120">
        <label for="pesan">Pesan maksimal 500 karakter</label>
        <textarea id="pesan" name="pesan" rows="5"
            required maxlength="500"></textarea>
    <button type="submit">Kirim</button>
    </form>
</main>
</body>
</html>