<?php
include ('koneksi.php');

$nuptk = $_GET['nuptk'];

$query = "SELECT * FROM tbl_guru WHERE nuptk = $nuptk LIMIT 1";

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
    <title>Edit Guru</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update-guru.php" method="POST">

                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="number" name="nuptk" value="<?php echo $row['nuptk'] ?>"
                                    placeholder="Masukkan NUPTK GURU" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"
                                    placeholder="Masukkan Nama GURU" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Golongan</label>
                                <select name="golongan" id="" class="form-control">
                                    <option value="III/A" <?php echo ($row['golongan'] == 'III/A') ? 'selected' : '' ?>>
                                        III/A
                                    </option>
                                    <option value="III/B" <?php echo ($row['golongan'] == 'III/B') ? 'selected' : '' ?>>
                                        III/B
                                    </option>
                                    <option value="III/C" <?php echo ($row['golongan'] == 'III/C') ? 'selected' : '' ?>>
                                        III/C
                                    </option>
                                    <option value="III/D" <?php echo ($row['golongan'] == 'III/D') ? 'selected' : '' ?>>
                                        III/D
                                    </option>
                                    <option value="III/E" <?php echo ($row['golongan'] == 'III/A') ? 'selected' : '' ?>>IV/A
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label><br>
                                <input type="radio" id="" name="jenis_kelamin" value="L" <?php echo ($row['jenis_kelamin'] == 'L') ? 'checked' : '' ?>>
                                <label for="">L</label><br>
                                <input type="radio" id="" name="jenis_kelamin" value="P" <?php echo ($row['jenis_kelamin'] == 'P') ? 'checked' : '' ?>>
                                <label for="">P</label>
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