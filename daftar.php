<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>YOK DAFTAR</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #1a1aff;
            background-size: cover;
        }

        .contact-form {
            width: 85%;
            max-width: 600px;
            background: #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px 40px;
            box-sizing: border-box;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 20px #000000b3;
            font-family: "Montserrat", sans-serif;
        }

        .contact-form h1 {
            margin-top: 0;
            font-weight: 200;
        }

        .txtb {
            border: 1px solid gray;
            margin: 8px 0;
            padding: 12px 18px;
            border-radius: 8px;
        }

        .txtb label {
            display: block;
            text-align: left;
            color: #333;
            text-transform: uppercase;
            font-size: 14px;
        }

        .txtb input,
        .txtb textarea {
            width: 100%;
            border: none;
            background: none;
            outline: none;
            font-size: 18px;
            margin-top: 6px;
        }

        .btn {
            display: inline-block;
            background-color: #1a1aff;
            padding: 14px 0;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 8px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div>
        <form action="" method="post">
            <div class="contact-form">
                <h1>Daftar </h1>
                <div class="txtb">
                    <label>Username </label>
                    <input type="text" name="username" value="">
                </div>
                <div class="txtb">
                    <label>Nama Sekolah </label>
                    <input type="text" name="sekolah" value="">
                </div>

                <div class="txtb">
                    <label>Jenis Kelamin </label>
                    <input type="text" name="jk" value="">
                </div>

                <div class="txtb">
                    <label>Alamat </label>
                    <input type="text" name="alamat" value="">
                </div>
                <input type="submit" class="btn" name="proses" value="Simpan">
        </form>
        <?php
        include "koneksi.php";

        if (isset($_POST['proses'])) {
            mysqli_query($koneksi, "INSERT into peserta set  
username = '$_POST[username]',
sekolah = '$_POST[sekolah]',
jk = '$_POST[jk]',
alamat = '$_POST[alamat]'");

            echo "Data baru telah tersimpan";
            echo "<script>alert('TERIMA KASIH SILAHKAN LOGOUT');</script>";
            echo "<meta http-equiv=refresh content=2;URL='nama_pendaftar.php'>";
        }

        ?>
</body>

</html>