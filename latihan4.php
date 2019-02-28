<html>
<head>
<title>Set Session</title>
</head>
<body>
    
    <?php


//inisialisasi data session
session_start();
//set session jika belum ada
if (!isset($_SESSION['test'])) {
    $_SESSION['test'] = 'value';

} else {
    echo 'Session di-set <b />' ;
    //mencetak nilai session test
    echo 'Nilai: ' . $_SESSION['test'] . '<br />';

    //mencetak semua elemen session
    print_r($_SESSION);
}
?>
<p>
Tekan Refresh (F5)</p>
</body>
</html>