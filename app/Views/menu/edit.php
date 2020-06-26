<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Add Menu Name</h3>
  </div>
  <form role="form" method="post" action="">
    <div class="card-body">
      <?php
      if(!empty(session('status')['menu_edit']))
      {
        $status = session('status')['menu_edit'];
        msg($status['status'],$status['msg']);
      }
      ?>
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Menu Name" required>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
      <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> Reset</button>
    </div>
  </form>
</div>