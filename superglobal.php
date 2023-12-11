<?php

    //1. $GLOBAL adalah variabel superglobal php yang digunakan untuk mengakses variabel global dari mana saja dalam skrip php
    //contoh
    $x = 75;
    $y = 25;

    function addtion() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    }
    addtion();
    echo $z;

    //2. $SERVER adalah variabel super global yang menyimpan informasi tentang header,jalur,dan lokasi skirp
    //contoh
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo '<br>';
    echo $_SERVER['HTTP_HOST'];
    echo '<br>';

    
    
?>
<!-- //3. $_REQUEST adalah variabel super global php yang digunakan untuk mengumpulkan data setelah mengirimkan formulir ke HTML 
    //4. $_POST adalah variabel yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir html dengan method = "post".$_POST juga
    banyak digunakan untuk meneruskan variabel.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        Nama : <input type="text" name="nama">
        <input type="submit">

</form>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_REQUEST['nama'];
        if (empty($nama)) {
            echo 'Nama Kosong';
        }
        else {
            echo "Nama adalah $nama";
        }
    }

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        Umur : <input type="text" name="umur">
        <input type="submit">

</form>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $umur = $_POST['umur'];
        if (empty($umur)) {
            echo 'Umur Kosong';
        }
        else {
            echo "Umur adalah $umur";
        }
    }

?>

<!-- 5. $_GET adalah variabel yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir html dengan method = "get" -->



</body>
</html>