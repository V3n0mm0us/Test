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

 $query = "SELECT * FROM karyawan;";
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
    <title>Search</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>
    
    <script
      src="https://kit.fontawesome.com/8ced2dd8fd.js"
      crossorigin="anonymous"
    ></script>
  </head>
    <script type="text/javascript">
        $(document).ready(function () {
        $('#dt').DataTable();
        });
    </script>

  <body>
    <div class="menu-area">
    <ul>
            <li><a href="homepage.php">Halaman Awal</a></li>
            <li>Admin (HR)
                <ul class="dropdown">
                    <li><a href="simpan.php">Insert Karyawan</a></li>
                    <li><a href="edit.php">Edit Data Karyawan</a></li>
                    <li><a href="#">Cari Data Karyawan</a></li>
                </ul>
            </li>
            <li>Data Karyawan</li>
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
        <h1 class="mt-4 text-white">Data Karyawan</h1>
        <blockquote class="blockquote">
          <p class="text-white mb-3">Data Yang Ada di Database</p>
        </blockquote>
        <figcaption class="blockquote-footer text-danger">
          PT Akui Brid Nest Indonesia<cite title="Source Title"> Jombang</cite>
        </figcaption>
      </figure>
    </div>

    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-light display" id="dt">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nik</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Pendidikan</th>
              <th>Status</th>
              <th>Departement</th>
              <th>Grade</th>
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
