var count=$('.field').length;
function newtable() {
$('#plus').click(function(){
    
    var input="<div id='form"+(count++)+"' class='field'>";
    input+="<input type='text' id='champ"+count+"' name='champ[]' placeholder='nom varchar(50) NOT NULL ,'>";
    $('#newtbl').append(input);
});
$('#moins').click(function(){
    $('#newtbl>div:last-child').remove();
    
});	
}
function onstart(){
	$('body').css({
		'background' : $('#bgclr').val(),
		'color' : $('#txtclr').val()
	});
	$('legend,input[type=submit],li').css({
		'color' : $('#txtclr').val()
	});
	$('[type=text]').css({
		'background' : $('#inbgclr').val(),
		'color' : $('#intxtclr').val()
	});
	$('#dbList table td').hide();
	$('#dbList table th').click(function(){
		$('#dbList table td').toggle('slow');
	});
	$('h1').html('cmrweb admin');

}

function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#keyword').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#name_list_id').show();
				$('#name_list_id').html(data);
			}
		});
	} else {
		$('#name_list_id').hide();
	}
}
 
// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#keyword').val(item);
	// hide proposition list
	$('#name_list_id').hide();
}
function customColor(){
	$('body').css({
		'background' : $('#bgclr').val(),
		'color' : $('#txtclr').val()
	});
	$('legend,input[type=submit],li').css({
		'color' : $('#txtclr').val()
	});
	$('[type=text]').css({
		'background' : $('#inbgclr').val(),
		'color' : $('#intxtclr').val()
	});	
}
$(document).on('change',function(){
	customColor();
});
$(function() {
	onstart();newtable();
  });