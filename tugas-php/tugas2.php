<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<h1 class="mt-3 text-center">Form Data Pegawai</h1>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" name="namaPegawai" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
            <label for="namaPegawai">Nama Pegawai</label>
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="agama" id="agama" aria-label="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            <label for="agama">Agama</label>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Manager" type="radio" name="pangkat" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Asisten" type="radio" name="pangkat" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Kabag" type="radio" name="pangkat" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Staff" type="radio" name="pangkat" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" value="Belum Menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="jumlahAnak" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
            <label for="jumlahAnak">Jumlah Anak</label>
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>
        <!-- <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div> -->
        <!-- <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div> -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" name="simpan" id="submitButton" type="submit">Simpan</button>
        </div>
    </form>
</div>
<?php
$pegawai = $_POST['namaPegawai'];
$agama = $_POST['agama'];
$jabatan = $_POST['pangkat'];
$status = $_POST['status'];
$anak = $_POST['jumlahAnak'];
$tombol = $_POST['simpan'];
//Menetukan Gaji Pokok
switch ($jabatan){
    case "Manager" : $gajiPokok = 20000000; break;
    case "Asisten" : $gajiPokok = 15000000; break;
    case "Kabag" : $gajiPokok = 10000000; break;
    case "Staff" : $gajiPokok = 4000000; break;
    default: $gajiPokok = 0; break;
}
//Menetukan tunjangan jabatan 
$tunJabatan = 0.2 * $gajiPokok;
//Menentukan tunjangan Keluarga
if($status == "Menikah"){
    if($anak <= 2) $tunKeluarga = 0.5 * $gajiPokok;
    elseif($anak >= 3 && $anak <= 5) $tunKeluarga = 0.1 * $gajiPokok;
    elseif($anak > 5) $tunKeluarga = 0.15 * $gajiPokok;
}else $tunKeluarga = 0;

//Menetukan Gaji Kotor
$gajiKotor = $gajiPokok + $tunJabatan + $tunKeluarga;
//Menentukan Zakat Profesi 
if($agama == "Islam" && $gajiKotor >= 6000000){
    $zakatProfesi = 0.025 * $gajiKotor;
    }else{
        $zakatProfesi = 0;
    }
//Menetukan Take Home Pay
$takeHomePay = $gajiKotor - $zakatProfesi;

if(isset($tombol)){ ?>
<div class="table-responsive">
<table class="mx-5 table table-bordered">
  <thead class="table-primary">
    <tr>
      
      <th class="text-center" scope="col">Nama Pegawai</th>
      <th class="text-center" scope="col">Agama</th>
      <th class="text-center" scope="col">Jabatan</th>
      <th class="text-center" scope="col">Status</th>
      <th class="text-center" scope="col">Jumlah Anak</th>
      <th class="text-center" scope="col">Gaji Pokok</th>
      <th class="text-center" scope="col">Tunjangan Jabatan</th>
      <th class="text-center" scope="col">Tunjangan Keluarga</th>
      <th class="text-center" scope="col">Gaji Kotor</th>
      <th class="text-center" scope="col">Zakat Profesi</th>
      <th class="text-center" scope="col">Take Home Pay</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center"><?= $pegawai ?></td>
      <td class="text-center"><?= $agama ?></td>
      <td class="text-center"><?= $jabatan ?></td>
      <td class="text-center"><?= $status ?></td>
      <td class="text-center"><?= $anak ?></td>
      <td class="text-center"><?= number_format($gajiPokok, 2, ',','.') ?></td>
      <td class="text-center"><?= number_format($tunJabatan, 2, ',','.') ?></td>
      <td class="text-center"><?= number_format($tunKeluarga, 2, ',','.') ?></td>
      <td class="text-center"><?= number_format($gajiKotor , 2, ',','.')?></td>
      <td class="text-center"><?= number_format($zakatProfesi, 2, ',','.') ?></td>
      <td class="text-center"><?= number_format($takeHomePay, 2, ',','.') ?></td>
    </tr>
  </tbody>
</table>
</div>
<?php } ?>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

