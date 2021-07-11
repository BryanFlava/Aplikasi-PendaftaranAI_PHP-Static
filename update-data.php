<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * from peserta where kode = '" . $_GET['kode'] . "'");
$data = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Update Data</title>
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
    <form action="" method="post">
        <div class="contact-form">
            <h1>Ubah Data </h1>
            <div class="txtb">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $data['username']; ?>">
            </div>

            <div class="txtb">
                <label>Nama Sekolah </label>
                <input type="text" name="sekolah" value="<?php echo $data['sekolah']; ?>">
            </div>

            <div class="txtb">
                <label>Alamat </label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
            </div>

            <input type="hidden" name="kode" value="<?php echo $data['kode']; ?>">
            <input type="submit" class="btn" name="proses" value="Ubah">
    </form>

</html>
</body>

</html>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    $tes = mysqli_query($koneksi, "UPDATE peserta SET
username = '" . $_POST['username'] . "' ,
sekolah = '" . $_POST['sekolah'] . "',
alamat = '" . $_POST['alamat'] . "'
WHERE kode = '" . $_POST['kode'] . "'");
    header("Location: admin.php");
}

?>