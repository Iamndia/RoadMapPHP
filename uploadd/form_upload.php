<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form upload</title>
</head>
<body>

    <h1>Input nama file untuk di upload</h1><br>
    <p>Klik tombol browse untuk memilih</p><br>
    <form action="do_upload.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000">
        Nama file : <input type="file" name="file1" size="30"><br>
        <input type="submit" value="Upload">
    </form>

    
</body>
</html>