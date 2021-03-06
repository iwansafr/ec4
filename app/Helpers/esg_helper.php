<?php

if(!function_exists('msg'))
{
	function msg($status = 'success', $msg = 'Data Saved Successfully')
	{
		if (!empty($status) && !empty($msg))
		{
			switch ($status)
			{
				case 'danger':
					$fa = 'fa-ban';
					break;
				case 'info':
					$fa = 'fa-info';
					break;
				case 'warning':
					$fa = 'fa-exclamation-triangle';
					break;
				default:
					$fa = 'fa-check';
					break;
			}
			?>
			<div class="alert alert-<?php echo $status;?> alert-dismissible">
	      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      <h5><i class="icon fas <?php echo $fa; ?>"></i> Alert!</h5>
	      <?php if (is_array($msg)): ?>
	      	<?php foreach ($msg as $key => $value): ?>
	      		<?php echo $value ?>
	      	<?php endforeach ?>
	      <?php else: ?>
	      	<?php echo $msg; ?>
	      <?php endif ?>
	    </div>
			<?php
		}
	}
}

if(!function_exists('redirect_with'))
{
	function redirect_with($title = '', $status = 'success',$msg = 'Data Deleted Successfully')
	{
		if(!empty($title))
		{
			return redirect()->back()->with('status',[
				$title => [
					'status'=>$status,
					'msg'=>$msg
				]
			]);
		}
	}
}