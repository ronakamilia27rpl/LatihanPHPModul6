<html>
<head>
<title>Hapus Session</title>
</head>
<body>
    <?php
    //inisialisasi data session
    session_start();
    //set session jika belum ada
    if (isset($_SESSION['test'])) {
        //Hapus session test
        unset ($_SESSION['test']);
        echo 'session dihapus';
    } else {
        echo 'unset';
        //mencetak semua elemen sessionn
        print_r($_SESSION);
    }
    ?>
    <p>
Tekan Refresh (F5)</p>
</body>
</html>