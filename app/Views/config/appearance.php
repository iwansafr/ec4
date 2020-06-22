<?php msg(session('status'),session('msg')) ?>
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
              <input type="text" class="form-control" name="navbar_color" data-original-title="" title="" value="<?php echo !empty($data['appearance']['navbar_color']) ? $data['appearance']['navbar_color'] : ''; ?>">

              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-square" style="color: <?php echo !empty($data['appearance']['navbar_color']) ? $data['appearance']['navbar_color'] : ''; ?>;"></i></span>
              </div>
            </div>
					</div>
					<div class="form-group">
						<label>Navbar Type</label>
						<select name="navbar_type" class="form-control">
							<option value="navbar-light">Light</option>
							<option value="navbar-dark">Dark</option>
						</select>
					</div>
				</div>
      </div>
	  </div>
	  <div class="card-footer">
	  	<button class="btn btn-secondary" name="config_name" value="appearance"><i class="fa fa-save"></i> Save</button>
	  </div>
	</form>
</div>
