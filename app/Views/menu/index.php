<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>
<div class="row">
	<div class="col-md-12">
	</div>
  <div class="col-md-3">
    <?php echo $this->include('menu/edit') ?>
  </div>
  <div class="col-md-9">
  	<?php echo $this->include('menu/list') ?>
  </div>
</div>
<?php $this->endSection() ?>