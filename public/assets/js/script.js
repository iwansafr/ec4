$(document).ready(function(){
	$(document).on('click','#check_delete',function() {
		console.log('ok')
	  var checkedStatus = this.checked;
	  $('input[class="del_check"]').each(function() {
	    $(this).prop('checked', checkedStatus);
	  });
	});
	$('[data-toggle="tooltip"]').tooltip();
	console.log(_messages.status);
	console.log(_messages.msg);
	if(_messages.status != undefined && _messages.msg != undefined){
		switch(_messages.status){
			case 'success':
				toastr.success(_messages.msg);
				break;
			case 'info':
				toastr.info(_messages.msg);
				break;
			case 'danger':
				toastr.error(_messages.msg);
				break;
			default:
				toastr.warning(_messages.msg);
				break;
		}
	}
});