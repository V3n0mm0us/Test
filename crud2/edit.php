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

 $query = "SELECT * FROM karyawan ";
 $sql = mysqli_query($conn, $query);
 $no = 0;

 //var_dump($result)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesheet.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/8ced2dd8fd.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="menu-area">
    <ul>
            <li><a href="homepage.php">Halaman Awal</a></li>
            <li>Admin (HR)
                <ul class="dropdown">
                    <li><a href="simpan.php">Insert Karyawan</a></li>
                    <li><a href="#">Edit Data Karyawan</a></li>
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
    <br />
    <br />
    <br />
    <br />
    <div class="container">
      <figure>
        <<h1 class="mt-4 text-white">Data Karyawan</h1>
        <blockquote class="blockquote">
          <p class="text-white mb-3">Data Yang Ada di Database</p>
        </blockquote>
        <figcaption class="blockquote-footer text-danger">
          PT Akui Brid Nest Indonesia<cite title="Source Title"> Jombang</cite>
        </figcaption>
      </figure>
    </div>
    <div class="container">
      <div class="table-responsive">
        <table class="table align-middle table-light">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>NIK</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Pendidikan</th>
              <th>Status</th>
              <th>Departement</th>
              <th>Grade</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
              <td>
                <?php echo ++$no; ?>.
              </td>
              <td><?php echo $result['nama']; ?></td>
              <td><?php echo $result['alamat']; ?></td>
              <td><?php echo $result['nik']; ?></td>
              <td><?php echo $result['ttl']; ?></td> 
              <td><?php echo $result['pendidikan']; ?></td>
              <td><?php echo $result['status']; ?></td>
              <td><?php echo $result['departemen']; ?></td>
              <td><?php echo $result['grade']; ?></td>
              <td>
                <a href="simpan.php?ubah=<?php echo$result['id']; ?>">
                <i class="fa-regular fa-pen-to-square fa-2x"></i>
                </a> 
                <a href="psimpan.php?hapus= <?php echo$result['id']; ?>">
                <i class="fa-solid fa-trash fa-2x"></i>
                </a>
              </td>
            </tr>
            <?php
                }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
