$(document).ready(function(){
	$(document).on('click','.edit_role',function() {
	  var id = $(this).data('id');
	  // $.ajax({
	  // 	url: "/user/role/detail/"+id,
	  // 	method: "post",
	  // 	success:function(result){
	  // 		console.log(result)
	  // 		$.each(result, function(i, field){
		 //      // $("div").append(field + " ");
		 //      console.log(field);
		 //    });
	  // 	}
	  // });
	  $.getJSON("/user/role/detail/"+id, function(result){
	  	var modal = $('#modal-default');
	  	modal.find('form').attr('action','/user/role/'+id);
	    $.each(result, function(i, field){
	      modal.find('input[name="'+i+'"]').val(field);
	      if(i=='description'){
	      	modal.find('textarea[name="'+i+'"]').html(field);
	      }
	    });
	  });
	});
});