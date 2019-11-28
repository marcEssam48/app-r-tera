
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr style="border-style:hidden;" id="row'+i+'"><td><input style="margin:5px;" type="text" name="name[]" placeholder="Enter another choice" class="form-control name_list" /></td><td><button type="button" style="margin:5px;" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
});
