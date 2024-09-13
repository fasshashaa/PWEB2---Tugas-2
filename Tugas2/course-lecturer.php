<?php
//Memanggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');
//Instansiasi Objek Untuk kelas Courses_Lecturers
$tampilCourse = new Courses_Lecturers();
$data = $tampilCourse->tampilData();

// Destruct Koneksi
$tampilCourse->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mata Kuliah</title>
<!--Untuk styling main content-->
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
	<!--Membuat tabel untuk di isi data dari database-->
			<th>No</th>
			<th>ID Dosen</th>
            <th>ID Mata Kuliah</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>deleted_at</th>
       
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
		<!--Memanggil data dari database kedalam tabel-->
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['lecturer_id']; ?></td>
                <td><?php echo $row['course_id']; ?></td>
				<td><?php echo $row['created_at']; ?></td>
				<td><?php echo $row['update_at']; ?></td>
				<td><?php echo $row['deleted_at']; ?></td>
               </tr>
			<?php 
		}
		?>
	</table>
	<br>
</body>
</html>