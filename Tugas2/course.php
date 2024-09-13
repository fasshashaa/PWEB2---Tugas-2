<?php
//Memanggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

//Instansiasi Objek untuk kelas Courses
$tampilCourse = new Courses();
$data = $tampilCourse->tampilData();

// Destruct Koneksi
$tampilCourse->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mata Kuliah</title>
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
	<p><center><b>DATA MATA KULIAH</b></center></p>
<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
			<th>SKS</th>
			<th>Jam</th>
			<th>Pertemuan</th>
            <th>Created at</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
		<!--Memanggil data adari database kedalam tabel-->
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['code']; ?></td>
                <td><?php echo $row['name']; ?></td>
				<td><?php echo $row['sks']; ?></td>
				<td><?php echo $row['hours']; ?></td>
				<td><?php echo $row['meeting']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
               </tr>
			<?php 
		}
		?>
	</table>
	<br>
</body>
</html>