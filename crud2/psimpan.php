<?php
$host ="localhost";
$user ="root";
$pass ="";
$db   ="crud1";

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn){
  // echo"berhasil";

mysqli_select_db($conn, $db);


if(isset($_POST['submit'])){
    if($_POST['submit'] == "Simpan"){
        include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$ttl   = $_POST['ttl'];
$pendidikan   = $_POST['pendidikan'];
$status   = $_POST['status'];
$departemen  = $_POST['departemen'];
$grade   = $_POST['grade'];

if ($nama =="")
{
?>
    <script language="JavaScript">
    alert("Isian Nama Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($alamat=="")
{
?>
    <script language="JavaScript">
    alert("Isian alamat Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>

<?php
}
if ($nik =="")
{
?>
    <script language="JavaScript">
    alert("Isian nik Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($ttl =="")
{
?>
    <script language="JavaScript">
    alert("Isian Tempat tanggal lahir Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($pendidikan =="")
{
?>
    <script language="JavaScript">
    alert("Isian pendidikan Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($status =="")
{
?>
    <script language="JavaScript">
    alert("Isian status Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($departemen =="")
{
?>
    <script language="JavaScript">
    alert("Isian departemen Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}
if ($grade =="")
{
?>
    <script language="JavaScript">
    alert("Isian grade Masih Kosong, Silahkan diisi dahulu");    
    document.location='simpan.php';
    </script>
<?php
}

 else {
    $query="insert into karyawan (nama,alamat,nik,ttl,pendidikan,status,departemen,grade) values
    ('$nama','$alamat','$nik','$ttl','$pendidikan','$status','$departemen','$grade')";
    $hasil=mysqli_query($koneksi, $query);
    if ($hasil){
        ?>

    <script language="JavaScript">
    alert('Proses Simpan Data Berhasil....');
    document.location='simpan.php';
    </script>
        <?php
        exit;
    }
    else{
        echo "gagal insert data";
        exit;
    }
}
} else if($_POST['submit'] == "Update"){
    $submit = $_POST['submit'];
    
    header("location:edit.php");
    $id =$_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nik = $_POST['nik'];
    $ttl   = $_POST['ttl'];
    $pendidikan   = $_POST['pendidikan'];
    $status   = $_POST['status'];
    $departemen  = $_POST['departemen'];
    $grade   = $_POST['grade'];

    $query = "UPDATE karyawan SET nama='$nama', alamat='$alamat', ttl='$ttl', pendidikan='$pendidikan', status='$status', departemen='$departemen', grade='$grade' WHERE id='$id';";
    

    $sql = mysqli_query($conn, $query);
}
}
}
if(isset($_GET['hapus'])){
    $id_manusia = $_GET['hapus'];
    $query = "DELETE FROM karyawan WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location:edit.php");
    } else {
        echo $query;
    }
    // echo "Hapus";
}

?>