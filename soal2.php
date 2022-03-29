<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Soal 2</title>
</head>

<body>
    <div class="form1">
        <form action="soal2.php" method="post">
            <h5>Nama Anda : </h5>
            <input type="text" name="nama"><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="form2">
        <form action="soal2.php" method="post">
            <h5>Umur Anda : </h5>
            <input type="text" name="umur"> <br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="form3">
        <form action="soal2.php" method="POST">
            <h5>Hobi Anda : </h5>
            <input type="text" name="hobi"><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="finalForm">
        <p class="nama"></p>
        <p class="umur"></p>
        <p class="hobi"></p>
    </div>

    <script>
        $(document).ready(function() {
            $('.form2').hide();
            $('.form3').hide();
            $('.finalForm').hide();

            let nama;
            let umur;
            let hobi;

            $('.form1').submit(function(e) {
                e.preventDefault();
                nama = 'Nama : ' + $('[name=nama]').val();
                $(this).hide();
                $('.form2').show();
            });

            $('.form2').submit(function(e) {
                e.preventDefault();
                umur = 'Umur : ' + $('[name=umur]').val();
                $(this).hide();
                $('.form3').show();
            });

            $('.form3').submit(function(e) {
                e.preventDefault();
                hobi = 'Hobi : ' + $('[name=hobi]').val();
                $(this).hide();
                $('.finalForm').show();

                $('.finalForm .nama').html(nama);
                $('.finalForm .umur').html(umur);
                $('.finalForm .hobi').html(hobi);
            })



        });
    </script>



</body>

</html>