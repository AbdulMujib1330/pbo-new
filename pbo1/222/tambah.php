<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_tambah.php" method="post">
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="12">12 RPL</option>
                <option value="11">11 RPL</option>
                <option value="10">10 RPL</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>