<?php
$m1 = ['nim'=>'11223', 'nama'=>'Angelica', 'nilai'=>90];
$m2 = ['nim'=>'11245', 'nama'=>'Ardhito', 'nilai'=>87];
$m3 = ['nim'=>'11224', 'nama'=>'Bagus', 'nilai'=>89];
$m4 = ['nim'=>'10233', 'nama'=>'Bernadia', 'nilai'=>94];
$m5 = ['nim'=>'10251', 'nama'=>'Chintya', 'nilai'=>82];
$m6 = ['nim'=>'11337', 'nama'=>'Cita', 'nilai'=>70];
$m7 = ['nim'=>'11329', 'nama'=>'Dwianjani', 'nilai'=>65];
$m8 = ['nim'=>'10422', 'nama'=>'Darno', 'nilai'=>60];
$m9 = ['nim'=>'10221', 'nama'=>'Evan', 'nilai'=>88];
$m10 = ['nim'=>'10232', 'nama'=>'Esti', 'nilai'=>78];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//Fungsi Aggregate
//Buat daftar aggregate nilai gunakan aggregate function di array (TFoot) => Nilai Tertinggi, Nilai Terendah, Nilai Rata2, Jumlah Siswa
$jumlah_mhs = count($mahasiswa);
$nilai_mhs = array_column($mahasiswa, 'nilai');
$max_nilai =max($nilai_mhs);
$min_nilai =min($nilai_mhs);
$nilai_jml = array_sum($nilai_mhs);
$rata_nilai = $nilai_jml/$jumlah_mhs;

$aggregate = [
  'Jumlah Mahasiswa' => $jumlah_mhs,
  'Nilai Tertinggi' => $max_nilai,
  'Nilai Terendah' => $min_nilai,
  'Nilai Rata-rata' => $rata_nilai
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center m-3" >Data Nilai Matkul Pemrograman PHP</h3>
    <div class="table-responsive">
    <table class="mx-5 table table-bordered">
        <thead class="table-primary">
            <tr>
                <?php
                foreach ($ar_judul as $judul) {
                ?>
                <th class="text-center" scope="col"><?= $judul ?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($mahasiswa as $mhs) {
              $ket = ($mhs['nilai'] >= 75) ? "Lulus" : "Remedial";
              
              if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
              else if($mhs['nilai'] >= 75 && $mhs['nilai'] <= 85) $grade = 'B';
              else if($mhs['nilai'] >= 60 && $mhs['nilai'] <= 75) $grade = 'C';
              else if($mhs['nilai'] >= 30 && $mhs['nilai'] <= 60) $grade = 'D';
              else if($mhs['nilai'] >= 0 && $mhs['nilai'] <= 30) $grade = 'E';
              else $grade = '';

              switch ($grade) {
                case 'A': $predikat = 'Memuaskan';
                  break;
                case 'B': $predikat = 'Bagus';
                  break;
                case 'C': $predikat = 'Cukup';
                  break;
                case 'D': $predikat = 'Kurang';
                  break;
                case 'E': $predikat = 'Buruk';
                  break;
                default: $predikat = '';
                  break;
              }
              ?>
              <tr>
                <td class="text-center" scope="col"> <?= $no ?> </td>
                <td class="text-center" scope="col"> <?= $mhs['nim'] ?> </td>
                <td class="text-center" scope="col"> <?= $mhs['nama'] ?> </td>
                <td class="text-center" scope="col"> <?= $mhs['nilai'] ?> </td>
                <td class="text-center" scope="col"> <?= $ket ?> </td>
                <td class="text-center" scope="col"> <?= $grade ?> </td>
                <td class="text-center" scope="col"> <?= $predikat ?> </td>
              </tr>
            <?php $no++;    
            }
            ?>
        </tbody>
        <tfoot class="table-primary">
            <?php
            foreach ($aggregate as $agt => $hasil) {?>
              <tr>
                  <th colspan="6"><?= $agt ?></th>
                  <th><?= $hasil ?></th>
              </tr>
              <?php
              }
            ?>
        </tfoot>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>