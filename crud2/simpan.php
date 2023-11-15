<!DOCTYPE html>
<?php
$host ='localhost';
$user ='root';
$pass ='';
$db   ='crud1';

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn){
  // echo"berhasil";
}
mysqli_select_db($conn, $db);

// update data 
$id = '';
$nama = '';
$alamat = '';
$nik = '';
$ttl = '';
$pendidikan = '';
$status = '';
$departemen = '';
$level = '';
$grade = '';
// $asal = '';

if(isset($_GET['ubah'])){
$id = $_GET['ubah'];
                  
$query = "SELECT * FROM karyawan WHERE id = '$id';";
$sql = mysqli_query($conn, $query);
 
$result = mysqli_fetch_assoc($sql);

$nama = $result['nama'];
$alamat = $result['alamat'];
$nik = $result['nik'];
$ttl = $result['ttl'];
$pendidikan = $result['pendidikan'];
$status = $result['status'];
$departemen = $result['departemen'];
$grade = $result['grade'];
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheet.css">
    </style>
    <title>Simpan</title>
  </head>
  <body>
  <div class="menu-area" style="width: 700px; height: 50px;">
        <ul>
            <li><a href="homepage.php">Halaman Awal</a></li>
            <li>Admin (HR)
                <ul class="dropdown">
                    <li><a href="simpan.php">Insert Karyawan</a></li>
                    <li><a href="edit.php">Edit Data Karyawan</a></li>
                    <li><a href="cari.php">Cari Data Karyawan</a></li>
                </ul>
            </li>
            <li><a href="cari.php"><span>Data Karyawan</span></a></li>
            <li>Export Data
                <ul class="dropdown">
                    <li><a href="export.php">Export</a></li>
                </ul>
            </li>
            <li><a href="logout.php"><span>Logout</span></a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="border: 0; padding: 10px; width: 760px; height: auto">
      <form action="psimpan.php" method="POST">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <table
          width="760"
          border="0"
          align="center"
          cellpading="0"
          cellspacing="0"
        >
          <tr height="46">
            <td width="10%"></td>
            <td width="25%"></td>
            <td width="65%">
              <?php
                  if(isset($_GET['ubah'])){
              ?>
              <font color="red" size="6">Edit Data Karyawan</font>
              <?php
                  } else{
              ?>
              <font color="red" size="6">Form Input Data Karyawan</font>
              <?php
                  }
              ?>
            </td>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">Nama</font></td>
            <td><input type="text" name="nama" size="35" maxlength="15" value="<?php echo $nama; ?>"/></td>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">alamat</font></td>
            <td><input type="text" name="alamat" size="35" maxlength="15" value="<?php echo $alamat; ?>"/></td>
          </tr>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">Nik</font></td>
            <td><input type="text" name="nik" size="35" maxlength="15" value="<?php echo $nik; ?>"/></td>
          </tr>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">Tempat Tanggal Lahir</font></td>
            <td><input type="text" name="ttl" size="35" maxlength="30" value="<?php echo $ttl; ?>"/></td>
          </tr>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">pendidikan</font></td>
            <td><input type="text" name="pendidikan" size="35" maxlength="15" value="<?php echo $pendidikan; ?>"/></td>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">status</font></td>
            <td>
              <select name="status">
                <option value="-">-Pilih status-</option>
                <option <?php if($status == 'Aktif'){echo "selected";} ?> value="Aktif">Aktif</option>
                <option <?php if($status == 'Non Aktif'){echo "selected";} ?> value="Non Aktif">Non Aktif</option>
              </select>
            </td>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">departemen</font></td>
            <td>
              <select name="departemen">
                <option value="-">-Pilih departemen-</option>
                <option value="HR" <?php if($departemen == 'HR'){echo "selected";} ?> >HR</option>
                <option value="IT"<?php if($departemen == 'IT'){echo "selected";} ?> >IT</option>
                <option value="FINANCE" <?php if($departemen == 'HR'){echo "selected";} ?> >HR</option>
                <option value="Logistik"<?php if($departemen == 'Logistik'){echo "selected";} ?> >Logistik</option>
                <option value="PR" <?php if($departemen == 'PR'){echo "selected";} ?> >PR</option>
              </select>
            </td>
          </tr>
          <tr height="46">
            <td></td>
            <td><font size="3" color="#fff">Grade</font></td>
            <td><input type="text" name="grade" size="35" maxlength="15" value="<?php echo $grade; ?>"/></td>
          </tr>
          <tr height="46">
            <td></td>
            <td></td>
            <td>
            <?php
                  if(isset($_GET['ubah'])){
              ?>
              <input type="submit" name="submit" value="Update" />
              <input type="reset" name="reset" value="Reset" />
              <?php
                  } else{
              ?>
              <input type="submit" name="submit" value="Simpan" />
              <input type="reset" name="reset" value="Reset" />
              <?php
                  }
              ?>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
