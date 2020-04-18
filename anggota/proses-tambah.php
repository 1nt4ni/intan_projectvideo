<?php

include '../koneksi.php';
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = 3;
    $sql = "INSERT INTO anggota (nama, kelas, telp, username, password, id_level)
            VALUES ('$nama', '$kelas', '$telp', '$username', '$password', $id_level)";
    
$res = mysqli_query($connect, $sql);
$count = mysqli_fetch_assoc($connect);

if($count>0) {
    echo "
    <script>
    alert('Data Berhasil Di tambah !!!');
    document.location.href='index.php';
    </script>
";
}                                                                                                                                                                                                                                                                                       

    header("Location: index.php");
 }


?>
