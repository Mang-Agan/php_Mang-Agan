<?php

$config = new mysqli('localhost', 'root', '', 'testDB');

if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $allData = $config->query("SELECT * FROM person JOIN hobi ON person.id = hobi.person_id WHERE nama = '$name' AND alamat = '$alamat'")->fetch_all(MYSQLI_ASSOC);
} else {
    $allData = $config->query('SELECT * FROM hobi JOIN person ON hobi.person_id = person.id')->fetch_all(MYSQLI_ASSOC);
}


$config->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    .table {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;
    }

    .form_search {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .textCenter {
        text-align: center;
    }
</style>

<body>

    <div class="table">
        <table border="1" id="table1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Hobi</th>

                </tr>
            <tbody>
                <?php foreach ($allData as $data) : ?>
                    <tr>
                        <td class="textCenter"><?php echo $data['nama'] ?></td>
                        <td class="textCenter"><?php echo $data['alamat'] ?></td>
                        <td class="textCenter"><?php echo $data['hobi'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

            </thead>
        </table>
    </div>

    <div class="form_search">
        <form action="soal3.php" method="POST">
            <h5>Cari Person</h5>
            <p>Nama</p>
            <input type="text" name="nama" required>
            <p>Alamat</p>
            <input type="text" name="alamat" required>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>