<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>
<div class="row">
  <div class="col-md-3">
    <?php echo $this->include('user/role_edit') ?>
  </div>
  <div class="col-md-9">
  	<?php echo $this->include('user/role_list') ?>
  </div>
</div>
<?php $this->endSection(); ?>