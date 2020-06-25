<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Role Data</h3>
  </div>
  <div class="card-body">
    <?php
    if(!empty(session('status')['role_list']))
    {
      $status = session('status')['role_list'];
      msg($status['status'],$status['msg']);
    }
    ?>
    <form action="/user/role/multi_delete" method="post">
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
              <label for="check_delete" class="form-check-label"> Action</label>
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
      					 <input type="checkbox" class="del_check" name="del_row[]" value="<?php echo $value['id'] ?>"> <a href="/user/role/delete/<?php echo $value['id'];?>" data-toggle="tooltip" title="delete <?php echo $value['title'];?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                 <a href="#" data-id="<?php echo $value['id'] ?>" title="edit <?php echo $value['title'];?>" class="btn btn-default btn-sm edit_role" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil-alt"></i></a>
                </button>
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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter user role title" required>
          </div>
          <div class="form-group">
            <label>Level</label>
            <input type="number" name="level" class="form-control" placeholder="Enter role level" min="1" max="100" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control" placeholder="Enter user role description" required></textarea>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
        </div>
      </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>