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
	      <?php echo $msg; ?>
	    </div>
			<?php
		}
	}
}