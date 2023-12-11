<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simpan file yang diupload!</h1>
    <?
        if ($file1 != 'none') {
            copy("$file1", "hasilupload.txt") or die ("No files!");
        }
        else {
            die("Tidak ada file yang akan di upload");
        }
    ?>
</body>
</html>