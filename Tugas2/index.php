<?php
require_once('koneksi.php');

// Create instances of Lecturers and Courses_Lecturers classes
$tampilDosen = new Lecturers();
$dataDosen = $tampilDosen->tampilData();

$tampilCourseL = new Courses_Lecturers();
$dataCourse = $tampilCourseL->tampilData();

// Close the database connections
$tampilDosen->close();
$tampilCourseL->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen dan Mata Kuliah</title>
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

    <!-- Tabel Gabungan Data Dosen dan Mata Kuliah -->
    <p class="header">DATA DOSEN DAN MATA KULIAH</p>
    <table>
        <tr>
            <th colspan="7">DATA DOSEN</th>
            <th colspan="8">DATA MATA KULIAH</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Signature</th>
            <th>NIDN</th>
            <th>NIP</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Pertemuan</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Deleted at</th>
        </tr>
        <?php 
        $no = 1;
        //Untuk menggabungkan 2 tabel dosen dan courses untuk ditampilkan bersama sama
        $maxCount = max(count($dataDosen), count($dataCourse));
        for ($i = 0; $i < $maxCount; $i++) {
            // Dosen Data
            $dosenRow = isset($dataDosen[$i]) ? $dataDosen[$i] : array_fill_keys(['name', 'number_phone', 'address', 'signature', 'nidn', 'nip', 'created_at', 'updated_at'], '-');

            // Course Data
            $courseRow = isset($dataCourse[$i]) ? $dataCourse[$i] : array_fill_keys(['lecturer_id', 'course_id', 'course_name', 'sks', 'hours', 'meeting', 'created_at', 'update_at', 'deleted_at'], '-');
            ?>
            <tr>
        <!--Memanggil data dari database kedalam tabel-->
                <td><?php echo htmlspecialchars($no++); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['name']); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['number_phone']); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['address']); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['signature']); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['nidn']); ?></td>
                <td><?php echo htmlspecialchars($dosenRow['nip']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['course_id']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['course_name']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['sks']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['hours']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['meeting']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['created_at']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['update_at']); ?></td>
                <td><?php echo htmlspecialchars($courseRow['deleted_at']); ?></td>
            </tr>
        <?php 
        }
        ?>
    </table>

</body>
</html>
