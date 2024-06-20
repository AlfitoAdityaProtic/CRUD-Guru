<?php
include ('koneksi.php');

$nim = $_GET['nim'];

$query = "SELECT * FROM mahasiswa WHERE nim = $nim LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Data Mahasiswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT MAHASISWA
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="number" name="nim" value="<?php echo $row['nim'] ?>" class="form-control"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"
                                    placeholder="Masukkan Nama Mahasiswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Angkatan</label><br>
                                <select name="angkatan" id="" class="form-control">
                                    <!-- <option value="">Pilih Angkatan</option> -->
                                    <option value="2019" <?php echo ($row['angkatan'] == '2019') ? 'selected' : '' ?>>2019
                                    </option>
                                    <option value="2020" <?php echo ($row['angkatan'] == '2020') ? 'selected' : '' ?>>2020
                                    </option>
                                    <option value="2021" <?php echo ($row['angkatan'] == '2021') ? 'selected' : '' ?>>2021
                                    </option>
                                    <option value="2022" <?php echo ($row['angkatan'] == '2022') ? 'selected' : '' ?>>2022
                                    </option>
                                    <option value="2023" <?php echo ($row['angkatan'] == '2023') ? 'selected' : '' ?>>2023
                                    </option>
                                    <option value="2024" <?php echo ($row['angkatan'] == '2024') ? 'selected' : '' ?>>2024
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No Daftar</label>
                                <input type="number" name="no_daftar" value="<?php echo $row['no_daftar'] ?>"
                                    placeholder="Masukan Nomor Pendaftaran" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tarif SPI</label>
                                <input type="number" name="tarif_spi" value="<?php echo $row['tarif_spi'] ?>"
                                    placeholder="Masukan Jumlah SPI" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tarif UKT Awal</label>
                                <input type="number" name="tarif_ukt_awal" value="<?php echo $row['tarif_ukt_awal'] ?>"
                                    placeholder="Masukan Jumlah UKT" class="form-control">
                            </div><br>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>