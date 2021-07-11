<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="img/icon.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <form action="cek_login.php" method="POST" class="login-form">
        <h3 algn="center">
            <font color="red">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                    }
                }
                ?>
            </font>
        </h3>
        <h1>Silahkan Login !</h1>
        <h3>Pastikan username dan password benar</h3>
        <div class="textb">
            <input type="text" name="username" required>
            <div class="placeholder">Username</div>
        </div>

        <div class="textb">
            <input type="password" name="password" required>
            <div class="placeholder">Password</div>
            <div class="show-password fas fa-eye-slash"></div>
        </div>

        <button class="btn fas fa-arrow-right" type="submit" disabled></button>
        <br>



    </form>

    <script>
        var fields = document.querySelectorAll(".textb input");
        var btn = document.querySelector(".btn");

        function check() {
            if (fields[0].value != " " && fields[1].valur != " ")
                btn.disabled = false;
            else
                btn.disabled = true;
        }

        fields[0].addEventListener("keyup", check);
        fields[1].addEventListener("keyup", check);

        document.querySelector(".show-password").addEventListener("click",
            function() {
                if (this.classList[2] == "fa-eye-slash") {
                    this.classList.remove("fa-eye-slash");
                    this.classList.add("fa-eye");
                    fields[1].type = "text";
                } else {
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                    fields[1].type = "password";
                }
            });
    </script>



</body>

</html>