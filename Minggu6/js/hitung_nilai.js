function hitungNilai() {
    const xnama  = document.getElementById("nama").value.trim();
    const ytugas = parseFloat(document.getElementById("tugas").value);
    const yuts   = parseFloat(document.getElementById("uts").value);
    const yuas   = parseFloat(document.getElementById("uas").value);

    if (xnama === "" || isNaN(ytugas) || isNaN(yuts) || isNaN(yuas)) {
        alert("Semua kolom harus diisi!");
        return;
    }

    if (
        ytugas < 0 || ytugas > 100 ||
        yuts < 0 || yuts > 100 ||
        yuas < 0 || yuas > 100
    ) {
        alert("Nilai harus antara 0 sampai 100!");
        return;
    }

    const nilaiAkhir = (ytugas * 0.30) + (yuts * 0.30) + (yuas * 0.40);

    let nilaiHuruf;

    if (nilaiAkhir >= 85) {
        nilaiHuruf = "A";
    } else if (nilaiAkhir >= 75) {
        nilaiHuruf = "B";
    } else if (nilaiAkhir >= 65) {
        nilaiHuruf = "C";
    } else if (nilaiAkhir >= 50) {
        nilaiHuruf = "D";
    } else {
        nilaiHuruf = "E";
    }

    let status;

    if (nilaiAkhir >= 60) {
        status = "Lulus";
    } else {
        status = "Tidak Lulus";
    }

    const hasil = document.getElementById("hasil");

    hasil.innerHTML = `
    <div class="card mt-4">
        <div class="card-body">
            <h3 class="h5 mb-3">Hasil Perhitungan</h3>
            Nama : ${xnama}<br>
            Nilai Tugas : ${ytugas}<br>
            Nilai UTS : ${yuts}<br>
            Nilai UAS : ${yuas}<br>
            <hr>
            Nilai Akhir : <b>${nilaiAkhir.toFixed(2)}</b><br>
            Nilai Huruf : <b>${nilaiHuruf}</b><br>
            Status : <b>${status}</b>
        </div>
    </div>
    `;
}
