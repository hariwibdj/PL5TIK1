<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $sql_tampil = "SELECT * FROM user";
                $tampil = mysqli_query($conn, $sql_tampil);
                while ($row = mysqli_fetch_assoc($tampil)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['keterangan'] ?></td>
                        <td><a href="#" class="btn btn-primary">Edit </a><a href="#" class="btn btn-danger">Hapus </a></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>