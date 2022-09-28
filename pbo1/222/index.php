<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<marquee behavior="" direction=""><h1>HOME</h1></marquee>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

</head>
<body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=sekolah11", 'root', '');
        $query = $db->query("SELECT * FROM siswa");
        ?>
    

    <div class="container-sm">
        <a href="tambah.php">Tambah Siswa</a>
        <!-- <button onclick="" href="tambah.php">Tambah Siswa</button> -->
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>*-*</th>
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['kelas'] ?></td>

                <td>
                    <a href="edit.php?nis=<?= $data['nis'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?nis=<?= $data['nis'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <form action="logout.php">
        <button onclick="alert('Anda Telah Logout')">Logout</button>
</form>
    
  </body></html>
