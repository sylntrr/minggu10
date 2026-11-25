<?php
$jumlah = 1;
$status = "aktif";
?>
<!doctype html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan PHP</title></head>
<body>
    <h1>Latihan PHP</h1>
    <p>Jumlah pesan: <?= $jumlah ?></p>
    <?php if ($status === "aktif"): ?>
    <p>Form siap.</p>
    <?php else: ?>
    <p>Form ditutup.</p>
    <?php endif; ?>
</body>
</html>