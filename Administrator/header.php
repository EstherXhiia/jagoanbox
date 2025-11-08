<?php include("dist/config/dbconnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - PT. Lucky Indah Keramik</title>
  <link rel="icon" href="dist/img/padi.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/v1ctlmx94tm3oz52iscn2ty0wm9t0r0iso5ge8yindsvq8t5/tinymce/5/tinymce.min.js" referrerpolicy="origin">
  <!-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script> -->

  <script type="text/javascript">
    var base_url = '<?= $base_url?>';
  </script>


<script>
  $(function () {
    // Summernote
    // $('.textarea').summernote()

  })
</script>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <!-- <a  data-widget="control-sidebar" data-slide="true" href="#" role="button"> -->
            <h4 class="nav-link">Hi, <?php echo $_SESSION['username'];?></h4>
          <!-- </a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/Padi-polos.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8; background-color: white">
      <span class="brand-text font-weight-light">Lucky Indah Keramik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview active menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="index.php?mod=career&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Careers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=mt&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=testimonials&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Images</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="index.php?mod=menu&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=news&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News & Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?mod=product&cmd=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li> -->
            </ul>
          </li>
          <!-- <li class="nav-header">LABELS</li> -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li><!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?mod=ckeditor&cmd=index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
