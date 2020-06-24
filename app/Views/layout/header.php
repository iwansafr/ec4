<?php $breadcumb = config('Esg')->breadcumb; ?>
<?php $last_key = array_keys(end($breadcumb))[0]; ?>
<?php if (!empty($breadcumb)): ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?php echo $last_key; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <?php foreach ($breadcumb as $key => $value): ?>
              <?php foreach ($value as $vkey => $vvalue): ?>
                <?php if ($last_key == $vkey): ?>
                  <li class="breadcrumb-item active"><?php echo $vkey?></li>
                <?php else: ?>
                  <li class="breadcrumb-item"><a href="<?php echo $vvalue ?>"><?php echo $vkey?></a></li>
                <?php endif ?>
              <?php endforeach ?>
            <?php endforeach ?>
          </ol>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>