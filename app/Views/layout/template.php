<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php
	echo $this->include('layout/meta');
	if (!empty($config['css']))
	{
		echo $this->include('layout/'.$config['css'].'_css');
	}else{
		echo $this->include('layout/css');
	}
	?>
</head>
<body class="hold-transition sidebar-mini layout-fixed <?php echo $data['body-small-text']; ?>">
<div class="wrapper">
  <!-- Navbar -->
  <?php echo $this->include('layout/navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $this->include('layout/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo $this->include('layout/header') ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php echo $this->include('layout/content') ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <form action="" method="post">
    <aside class="control-sidebar control-sidebar-dark">
        
      <!-- Control sidebar content goes here -->
      <button type="submit" name="save_config" value="true" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
    </aside>
  </form>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
if (!empty($config['js']))
{
	echo $this->include('layout/'.$config['js'].'_js');
}else{
	echo $this->include('layout/js');
}
?>
</body>
</html>
