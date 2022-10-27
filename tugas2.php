<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
  </head>
  <body>
<div class="container px-5 my-5">
<div class=" alert alert-light" role="alert" method="POST">
    <h3 align="center">Tugas 2</h3>
    </div>
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama Pegawai</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama Pegawai" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select class="form-select" name="agama" aria-label="Agama">
                <option value="" disabled="" selected="">-- Pilih Agama --</option>
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="protestan">Protestan</option>
                <option value="buddha">Buddha</option>
                <option value="hindu">Hindu</option>
                <option value="konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="jabatan">Manajer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="jabatan">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="jabatan">Kepala Bagian</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="jabatan">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="status">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="status">Belum</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jml_anak">Jumlah Anak</label>
            <input class="form-control" id="jml_anak" type="text" placeholder="Jumlah Anak" data-sb-validations="" />
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg " nama="proses" type="submit">Simpan</button>
        </div>
    </form>
        </div>
        <?php 
        //tangkap request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jml_anak = $_POST['jml_anak'];
        $tombol = $_POST['proses'];
        //menentukan gaji pokok
        switch ($grade) {
            case 'Manajer': $gjpokok = 20000000; break;
            case 'Asisten': $gjpokok = 15000000; break;
            case 'kepalaBagian': $gjpokok = 10000000; break;
            case 'Staff': $gjpokok = 4000000; break;
            default: $gjpokok = '';
        }
        //menentukan tunjangan jabatan
            $tunjanganjbt = 0.2 * $jabatan;
        //menentukan tunjangan keluarga
        if($status = 'menikah' && $jml_anak = 2) $tunjanganklrg = 0.05 * $gjpokok;
        else if($status = 'menikah' && $jml_anak <= 5) $tunjanganklrg = 0.1 * $gjpokok;
        else if($status = 'menikah' && $jml_anak = 5) $tunjanganklrg = 0.15 / $gjpokok;
        else $tunjanganklrg = '';
        //menentukan gaji kotor
        $gjkotor = $gjpokok + ($tunjanganjbt + $tunjanganklrg);
        
        //take home pay
        $homepay = ($gjpokok + $tunjanganjbt + $tunjanganklrg) - $zakat;
        
        if(isset($tombol)){ ?>
        <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert alert-primary p-5" role="alert">
                    Nama Pegawai: <?= $nama ?>
                    <br />Agama: <?= $agama ?>
                    <br />Jabatan: <?= $jabatan?>
                    <br />Status: <?= $status ?>
                    <br />Jumlah Anak: <?= $jml_anak ?>
                    <br />Gaji Pokok: <?= $gjpokok ?>
                    <br />Tunjangan Jabatan: <?= $tunjanganjbt ?>
                    <br />Tunjangan Keluarga: <?= $tunjanganklrg ?>
                    <br />Gaji Kotor: <?= $tunjanganjbt ?>
                    <br />Take Home Pay: <?= $homepay ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>