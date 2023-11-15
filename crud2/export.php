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

?>
<html>
<head>
  <title>Export Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Data Manusia</h2>
			<h4>Human Traficking</h4>
				<div class="data-tables datatable-dark">
					
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
	
<script>
$(document).ready(function() {
    $('#dt').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>