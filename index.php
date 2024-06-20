<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Guru</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA GURU
                    </div>
                    <div class="card-body">
                        <a href="tambah-guru.php" class="btn btn-md btn-dark" style="margin-bottom: 10px">TAMBAH
                            DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NUPTK</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">GOLONGAN</th>
                                    <th scope="col">JENIS KELAMIN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include ('koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tbl_guru");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nuptk'] ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['golongan'] ?></td>
                                        <td><?php echo $row['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                                        <td class="text-center">
                                            <a href="edit-guru.php?nuptk=<?php echo $row['nuptk'] ?>"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-guru.php?nuptk=<?php echo $row['nuptk'] ?>"
                                                class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>