$(document).ready(function(){
	$(document).on('click','#check_delete',function() {
		console.log('ok')
	  var checkedStatus = this.checked;
	  $('input[class="del_check"]').each(function() {
	    $(this).prop('checked', checkedStatus);
	  });
	});
});