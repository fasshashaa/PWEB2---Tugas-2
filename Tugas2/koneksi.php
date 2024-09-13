<?php
// Kelas database sebagai kelas dasar dan penghubung ke database
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "pweb2";
    protected $koneksi;

    // Constructor untuk inisialisasi koneksi
    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        
        if (mysqli_connect_errno()) {
            die("Koneksi database gagal : " . mysqli_connect_error());
        }
    }

    // Metode untuk menjalankan query
    public function query($query) {
        return mysqli_query($this->koneksi, $query);
    }

    // Metode untuk menutup koneksi
    public function close() {
        mysqli_close($this->koneksi);
    }
}

// Kelas Lecturers sebagai kelas turunan dari kelas Database
class Lecturers extends Database {
    public function tampilData() {
        $query = "SELECT * FROM lecturers";
        $data = $this->query($query);

        $hasil = []; // Inisialisasi array hasil
        while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

// Kelas Courses sebagai kelas turunan dari kelas database
class Courses extends Database {
    public function tampilData() {
        $query = "SELECT * FROM courses";
        $data = $this->query($query);

        $hasil = []; // Inisialisasi array hasil
        while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

// Kelas Courses_Lecturers sebagai kelas turunan dari kelas database
class Courses_Lecturers extends Database {
    public function tampilData() {
        // Query untuk mengambil data yang terhubung antara lecturer dan course
        $query = "
            SELECT 
                cl.lecturer_id, 
                cl.course_id, 
                c.name AS course_name, 
                c.sks, 
                c.hours, 
                c.meeting, 
                cl.created_at, 
                cl.update_at, 
                cl.deleted_at
            FROM course_lecturers cl
            JOIN courses c ON cl.course_id = c.id
        ";
        $data = $this->query($query);

        $hasil = []; 
        while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>
