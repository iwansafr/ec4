<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>
<div class="col-12">
	
	<div class="card">
	  <div class="card-header">
	    <h3 class="card-title"><?php echo $module ?></h3>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table class="data_table table table-bordered table-striped">
	      <thead>
	      <tr>
	        <th>No</th>
	        <th>title</th>
	        <th>slug</th>
	        <th>Image</th>
	        <th>
	        	<div class="form-check">
              <input class="form-check-input" type="checkbox" id="check_delete" value="1">
              <label for="check_delete" class="form-check-label"> Delete</label>
            </div>
					</th>
	      </tr>
	      </thead>
	      <tbody>
	      	<?php if (!empty($content)): ?>
	      		<?php $i = 1; ?>
	      		<?php foreach ($content as $key => $value): ?>
	      			<tr>
	      				<td><?php echo $i++; ?></td>
	      				<td><?php echo $value['title'] ?></td>
	      				<td><?php echo $value['slug'] ?></td>
	      				<td><img src="/images/<?php echo $value['image'];?>" height="100" alt=""></td>
	      				<td>
	      					<input type="checkbox"> <i class="fa fa-trash"></i>
	      				</td>
	      			</tr>

	      		<?php endforeach ?>
	      	<?php endif ?>
	      </tbody>
	      <tfoot>
	      <tr>
	        <th>No</th>
	        <th>title</th>
	        <th>slug</th>
	        <th>Image</th>
	        <th>
	        	<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</th>
	      </tr>
	      </tfoot>
	    </table>
	  </div>
	  <!-- /.card-body -->
	</div>
</div>
<?php $this->endSection(); ?>