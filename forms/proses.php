<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nama <?php echo $_POST['nama'];?> <br>
    NIM <?php echo $_POST['nim'];?>
    <a href="formHandling.php">Kembali</a>

    <!-- kapan menggunakan GET
        informasi yang dikirim dari formulir dengan metode GET dapat dilihat oleh semua orang (semua nama variabel dan nilai ditampilkan di URL)
    
        Sedangkan _POST informasi yang dikirim dari formulir dengan metode _POST tidak dilihat oleh orang lain (semua nilai tertanam dalam isi 
        Permintaan HTTP
        
        Kebanyakan lebih menggunakan _POST-->
</body>
</html>