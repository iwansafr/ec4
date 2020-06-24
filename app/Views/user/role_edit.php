<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Add User Role</h3>
  </div>
  <form role="form">
    <div class="card-body">
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
    <div class="card-footer">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
      <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> Reset</button>
    </div>
  </form>
</div>