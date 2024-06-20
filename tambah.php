<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH MAHASISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="number" name="nim" placeholder="Masukkan NIM"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Angkatan</label><br>
                                <select name="angkatan" id="" class="form-control">
                                    <option value="">Pilih Angkatan</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>No Daftar</label>
                                <input type="number" name="no_daftar" placeholder="Masukan Nomor Pendaftaran" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tarif SPI</label>
                                <input type="number" name="tarif_spi" placeholder="Masukan Jumlah SPI" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tarif UKT Awal</label>
                                <input type="number" name="tarif_ukt_awal" placeholder="Masukan Jumlah UKT" class="form-control">
                            </div><br>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
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