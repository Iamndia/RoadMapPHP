<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>
    
<!-- Pada kode berikut kami telah menambahkan beberapa variabel baru: $nameErr, $emailErr, $genderErr, dan $websiteErr. 
Variabel kesalahan ini akan menyimpan pesan kesalahan untuk bidang yang wajib diisi. Kami juga telah menambahkan if elsepernyataan 
untuk setiap variabel $_POST. Ini memeriksa apakah variabel $_POST kosong (dengan empty() fungsi PHP). Jika kosong, pesan kesalahan 
disimpan dalam variabel kesalahan yang berbeda, dan jika tidak kosong, ia mengirimkan data masukan pengguna melalui fungsi test_input() : -->


<?php

    // mendefinisikan variabel
    $namaErr = $emailErr = $genderErr = $umurErr = $nimErr = "";
    $nama = $email = $gender = $umur = $nim = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "Nama is required";
        }else {
            $nama = test_input($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        }else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["umur"])) {
            $umurErr = "Umur is required";
        }else {
            $umur = test_input($_POST["umur"]);
        }

        if (empty($_POST["nim"])) {
            $nimErr = "Nim is required";
        }else {
            $nim = test_input($_POST["nim"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>PHP FORM VALIDATION</h2>
<p><span class="error">* required field</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

    Nama = <input type="text" name="nama">
    <span class="error">* <?php echo $namaErr;?></span> <br><br>

    Email = <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span><br><br>

    Umur = <input type="text" name="umur">
    <span class="error">* <?php echo $umurErr;?></span><br><br>

    NIM = <input type="text" name="nim">
    <span class="error">* <?php echo $nimErr;?></span><br><br>

    Gender =
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">others
    <span class="error">* <?php echo $genderErr;?></span><br><br>

    <input type="submit" name="submit" value="submit">

</form>

<?php

    echo"<h2>YOUR INPUT</h2>
        Nama : $nama <br>
        Email : $email <br>
        Umur : $umur <br>
        Nim : $nim <br>
        Gender : $gender <br>
    
    ";
   

?>
</body>
</html>