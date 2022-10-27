<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>50419685,'nama'=>'Ananda Melati','nilai'=>98];
$m2 = ['nim'=>55419147,'nama'=>'Raditya Hilmi','nilai'=>95];
$m3 = ['nim'=>51419079,'nama'=>'Arya Nugraha','nilai'=>90];
$m4 = ['nim'=>52419214,'nama'=>'Fakhri Rajib','nilai'=>75];
$m5 = ['nim'=>53419057,'nama'=>'Irene Christie','nilai'=>78];
$m6 = ['nim'=>53456098,'nama'=>'Lasmaida Sihombing','nilai'=>60];
$m7 = ['nim'=>51419733,'nama'=>'Dhanang Bayu','nilai'=>55];
$m8 = ['nim'=>56419910,'nama'=>'Divanadia Puti','nilai'=>88];
$m9 = ['nim'=>50413152,'nama'=>'Nabila','nilai'=>85];
$m10 = ['nim'=>5041998,'nama'=>'Vidya','nilai'=>80];

$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$mhs['nilai'] = array_column($mahasiswa, 'nilai');
//keterangan
$ket = ($mhs['nilai'] >= 60)?"Lulus":"Gagal";

//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$total_nilai = array_sum($mhs['nilai']);
$max_nilai = max($mhs['nilai']);
$min_nilai = min($mhs['nilai']);
$jml_kg = array_column($mahasiswa,'jml');

$rata2 = $total_nilai / $jumlah_mahasiswa;

$keterangan = [
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Nilai rata rata' => $rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                    //tentukan grade nilai
                    if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
                    else if($mhs['nilai'] >= 75 && $mhs['nilai'] < 85) $grade = 'B';
                    else if($mhs['nilai'] >= 60 && $mhs['nilai'] < 75) $grade = 'C';
                    else if($mhs['nilai'] >= 30 && $mhs['nilai'] < 60) $grade = 'D';
                    else if($mhs['nilai'] >= 0 && $mhs['nilai'] < 30) $grade = 'E';
                    else $grade = '';
                    //tentukan predikat
                    switch ($grade) {
                        case 'A': $predikat = 'Memuaskan'; break;
                        case 'B': $predikat = 'Bagus'; break;
                        case 'C': $predikat = 'Cukup'; break;
                        case 'D': $predikat = 'Kurang'; break;
                        case 'E': $predikat = 'Buruk'; break;
                        default: $predikat = '';
                    }
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= ($mhs['nilai'] >= 60) ? "Lulus" : "Gagal"; ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>

                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>
</html>