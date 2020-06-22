<?php
$this->extend('layout/template');
$this->section('content');
?>
<div class="col-sm-6">
	<?php echo $this->include('config/appearance') ?>
</div>
<?php

$this->endSection();