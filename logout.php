<?php
echo "<script>alert('TERIMA KASIH SILAHKAN LOGOUT');</script>";
echo "<meta http-equiv=refresh content=1;URL='landing-page.php'>";
?>
<!-- menampilkan isi untuk logout -->
<pre>
<?php
session_start();
session_destroy();
?>
</pre>