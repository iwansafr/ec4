<title>esoftgreat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(!empty(session('status')))
{
  $status = session('status');
}?>
<script>
	var _messages = [];
	<?php
	if (!empty($status)){
		foreach ($status as $key => $value)
		{
			?>
			_messages.status = "<?php echo $value['status'];?>";
			_messages.msg = "<?php echo $value['msg'];?>";
			<?php
		}
	}
	?>
</script>