<?php
$esg = config('Esg');
$appearance = $esg->appearance;
?>
<?php msg(session('status'),session('msg')) ?>
<?php $navbar_color = !empty($appearance['navbar_color']) ? $appearance['navbar_color'] : '';?>
<?php $brand_color = !empty($appearance['brand_color']) ? $appearance['brand_color'] : '';?>
<div class="card card-primary card-outline">
  <form action="" method="post">
	  <div class="card-header">
	    <h3 class="card-title"><i class="fa fa-palette"></i> Appearance</h3>
	  </div>
	  <div class="card-body">
      <div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Navbar Color</label>
						<div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
              <input type="text" class="form-control" name="navbar_color" data-original-title="" title="" value="<?php echo $navbar_color;?>">

              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-square" style="color: <?php echo $navbar_color;?>;"></i></span>
              </div>
            </div>
					</div>
					<div class="form-group">
						<label>Navbar Type</label>
						<?php
						$options =
						[
							'name'=>'navbar_type',
							'class'=>'form-control',
							'options' => 
							[
								'navbar-light'=>'Light',
								'navbar-dark'=>'Dark'
							],
						];
						if(!empty($appearance['navbar_type']))
						{
							$options['selected'] = $appearance['navbar_type'];
						}
						echo form_dropdown($options) ?>
					</div>
					<div class="form-group">
						<label>Brand Color</label>
						<div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
              <input type="text" class="form-control" name="brand_color" data-original-title="" title="" value="<?php echo $brand_color;?>">

              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-square" style="color: <?php echo $brand_color;?>;"></i></span>
              </div>
            </div>
					</div>
					<div class="form-group">
						<label>Sidebar Type</label>
						<?php
						$options =
						[
							'name'=>'sidebar_type',
							'class'=>'form-control',
							'options' => 
							[
								'sidebar-light-primary'=>'Light',
								'sidebar-dark-primary'=>'Dark'
							],
						];
						if(!empty($appearance['sidebar_type']))
						{
							$options['selected'] = $appearance['sidebar_type'];
						}
						echo form_dropdown($options) ?>
					</div>
				</div>
      </div>
	  </div>
	  <div class="card-footer">
	  	<button class="btn btn-secondary" name="config_name" value="appearance"><i class="fa fa-save"></i> Save</button>
	  </div>
	</form>
</div>
