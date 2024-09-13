<?php
//Memanggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Instansiasi Objek untuk kelas lecturer
$tampilDosen = new Lecturers();
$data = $tampilDosen->tampilData();

// Destruct Database
$tampilDosen->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
<!--Styling main Content-->
	<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
	<p><b><center>DATA DOSEN</center></b></p>
<table border="1">
		<tr>
	<!--Membuat tabel yang akan di isi data dari database-->
			<th>No</th>
			<th>Nama</th>
            <th>No Telepon</th>
			<th>Alamat</th>
			<th>Signature</th>
			<th>NIDN</th>
			<th>NIP</th>
            <th>Created at</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
		?>
			<tr>
		<!--Memanggil data dari database kedalam tabel-->
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['name']; ?></td>
                <td><?php echo $row['number_phone']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['signature']; ?></td>
				<td><?php echo $row['nidn']; ?></td>
                <td><?php echo $row['nip']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
               </tr>
			<?php 
		}
		?>
	</table>
	
</body>
</html>