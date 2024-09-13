<!--
Nama  : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM   : 230202035 -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lecturers - Courses</title>
 
    <link rel="icon" href="assets/img/kaiadmin/peence.png" type="image/png">
   
    <link rel="icon" sizes="16x16" href="assets/img/kaiadmin/peence-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="assets/img/kaiadmin/peence-32x32.png" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/kaiadmin/peence-180x180.png">

    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    


    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    
  </head>
  <body>
    <div class="wrapper">
      <!-- Start Sidebar -->
      <div class="sidebar" style="background-color: #e0e6f0;">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" style="background-color: #e0e6f0;">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/pnc.png"
                alt="navbar brand"
                class="navbar-brand"
                height="55"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboard">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="index.html">
                        <span class="sub-item">Home</span>
                      </a>
                    </li>
                </div>
              </li>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Menu</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-user"></i>
                  <p>Lecturers</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="dosen.php">
                        <span class="sub-item">List Of Lecturers</span>
                      </a>
                    </li>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-th-list"></i>
                  <p>Courses</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="course.php">
                        <span class="sub-item">List Of Courses</span>
                      </a>
                    </li>
                </div>
  
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-layer-group"></i>
                  <p>Lecturers - Courses</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="l-course.php">
                        <span class="sub-item">List Of Lecturers - Courses
                        </span>
                      </a>
                    </li>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Start Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >

              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  
                  
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="messageDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-envelope"></i>
                  </a>
                  <ul
                    class="dropdown-menu messages-notif-box animated fadeIn"
                    aria-labelledby="messageDropdown"
                  >
                    <li>
                      <div
                        class="dropdown-title d-flex justify-content-between align-items-center"
                      >
                        Messages
                        <a href="#" class="small">Mark all as read</a>
                      </div>
                    </li>
                    <li>
                      <div class="message-notif-scroll scrollbar-outer">
                        <div class="notif-center">
                         
                          
                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all messages<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                   
                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all notifications<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                   
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Fassha</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                         
                          <div class="u-text">
                            <h4>Fassha</h4>
                            <p class="text-muted">fasshashaa@gmail.com</p>
                          </div>
                        </div>
                      </li>
                      
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <!--Main Content-->
        <?php
        //Untuk memanggil file koneksi.php untuk menghubungkan dengan database
require_once('koneksi.php');

// Instansiasi Objek untuk kelas Lecturers dan kelas Courses_Lecturers dan juga menggunakan konsep polymorphism
$tampilDosen = new Lecturers();
$dataDosen = $tampilDosen->tampilData();

$tampilCourse = new Courses_Lecturers();
$dataCourse = $tampilCourse->tampilData();

// Menutup koneksi / destruct
$tampilDosen->close();
$tampilCourse->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen dan Mata Kuliah</title>
    <!--Styling Main Content-->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            margin: auto;
            overflow-x: auto;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
        }
        .card-header {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow-x: auto; /* Ensure horizontal scrolling if needed */
            display: block;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
      <!--Memberi judul untuk data Lecturers - Courses-->
            <div class="card-header">
                Lecturers - Courses
            </div>
      <!--Membuat tabel yang akan di isi oleh data dari database-->
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Contact </th>
                        <th>Address</th>
                        <th>Signature</th>
                        <th>NIDN</th>
                        <th>NIP</th>
                        <th>Code</th>
                        <th>Courses</th>
                        <th>SKS</th>
                        <th>Hours</th>
                        <th>Meeting</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Deleted at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //Menentukan nilai untuk kolom angka yang dimulai dari angka 1
                    $no = 1;
                    //Menggabungkan Dua tabel yaitu tabel lecturer dan course agar bisa dijadikan satu
                    $maxCount = max(count($dataDosen), count($dataCourse));
                    for ($i = 0; $i < $maxCount; $i++) {
                        // Dosen Data
                        $dosenRow = isset($dataDosen[$i]) ? $dataDosen[$i] : array_fill_keys(['name', 'number_phone', 'address', 'signature', 'nidn', 'nip', 'created_at', 'updated_at'], '-');

                        // Course Data
                        $courseRow = isset($dataCourse[$i]) ? $dataCourse[$i] : array_fill_keys(['course_id', 'course_name', 'sks', 'hours', 'meeting', 'created_at', 'update_at', 'deleted_at'], '-');
                        ?>
                        <tr>
                    <!--Memanggil data kedalam tabel-->
                            <td><?php echo htmlspecialchars($no++, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['number_phone'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['address'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['signature'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['nidn'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($dosenRow['nip'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['course_id'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['course_name'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['sks'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['hours'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['meeting'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['created_at'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['update_at'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($courseRow['deleted_at'], ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>






<!--Footer-->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
                
              </ul>
            </nav>
            <div class="copyright">
              2024, <i>Politeknik Negeri Cilacap</i></a>
            </div>
            <div>
              Made by
              <a target="_blank" href="#">Fassha Fanny</a>
            </div>
          </div>
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->

      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    
  </body>
</html>
