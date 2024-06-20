<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah GURU</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH GURU
                    </div>
                    <div class="card-body">
                        <form action="simpan-guru.php" method="POST">

                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="number" name="nuptk" placeholder="Masukkan nuptk guru"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Guru"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Golongan</label>
                                <select name="golongan" id="" class="form-control">
                                    <option value="III/A">III/A</option>
                                    <option value="III/B">III/B</option>
                                    <option value="III/C">III/C</option>
                                    <option value="III/D">III/D</option>
                                    <option value="IV/A">IV/A</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label><br>
                                <input type="radio" id="" name="jenis_kelamin" value="L">
                                <label for="" >L</label><br>
                                <input type="radio" id="" name="jenis_kelamin" value="P">
                                <label for="" >P</label>
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