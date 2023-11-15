<?php
$host ="localhost";
$user ="root";
$pass ="";
$db   ="crud";

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn){
  // echo"berhasil";

mysqli_select_db($conn, $db);


if(isset($_POST['submit'])){
    $asal_manusia = $_POST['asal_manusia'];

    $insert = mysqli_query($conn,"insert into asal(asal_manusia) values ('$asal_manusia')");

    if($insert){
        ?>
    <script language="JavaScript">
    alert('Proses Simpan Data Berhasil....');
    document.location='simpan.php';
    </script>
        <?php
    }
    else {
        echo'
        <script>alert("Gagal menambah barang baru");
        window.location.href="simpan3.php"
        </script>
        ';
 
    }
}
}
?>