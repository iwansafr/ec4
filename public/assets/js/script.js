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
function edit_modal(class_name, detail_link, action_link){
	$(document).on('click',class_name,function() {
	  var id = $(this).data('id');
	  console.log(id);
	  $.getJSON(detail_link+id, function(result){
	  	var modal = $('#modal-default');
	  	modal.find('form').attr('action',action_link+id);
	    $.each(result, function(i, field){
	      modal.find('input[name="'+i+'"]').val(field);
	      if(i=='description'){
	      	modal.find('textarea[name="'+i+'"]').html(field);
	      }
	    });
	  });
	});
}