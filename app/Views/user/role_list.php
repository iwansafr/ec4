<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Role Data</h3>
  </div>
  <div class="card-body">
    <form action="/user/role/delete" method="post">
      <table class="data_table table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>title</th>
          <th>level</th>
          <th>description</th>
          <th>
          	<div class="form-check">
              <input class="form-check-input" type="checkbox" id="check_delete" value="1">
              <label for="check_delete" class="form-check-label"> Delete</label>
            </div>
  				</th>
        </tr>
        </thead>
        <tbody>
        	<?php if (!empty($data)): ?>
        		<?php $i = 1; ?>
        		<?php foreach ($data as $key => $value): ?>
        			<tr>
        				<td><?php echo $i++; ?></td>
        				<td><?php echo $value['title'] ?></td>
        				<td><?php echo $value['level'] ?></td>
        				<td><?php echo $value['description'] ?></td>
        				<td>
      					 <input type="checkbox" class="del_check" name="del_row[]"> <i class="fa fa-trash"></i>
        				</td>
        			</tr>
        		<?php endforeach ?>
        	<?php endif ?>
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>title</th>
          <th>level</th>
          <th>description</th>
          <th>
          	<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
  				</th>
        </tr>
        </tfoot>
      </table>
    </form>
  </div>
  <!-- /.card-body -->
</div>