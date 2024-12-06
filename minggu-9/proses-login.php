<?php
if (isset($_POST['proses'])) {
    if (($_POST['username'] == 'admin') and ($_POST['password'] == 'admin')) {
        echo "selamat anda berhasil login";
    } else {
        echo "username dan password tidak terdaftar";
    }
} ?>