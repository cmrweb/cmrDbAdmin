var count=$('.field').length;

$('#plus').click(function(){
    
    var input="<div id='form"+(count++)+"' class='field'>";
    input+="<input type='text' id='champ"+count+"' name='champ[]' placeholder='nom varchar(50) NOT NULL ,'>";
    $('#newtbl').append(input);
});
$('#moins').click(function(){
    $('#newtbl>div:last-child').remove();
    
});
$('#dbshow').click(function(){
	$('#dbBlock').css({
		'position':'relative',
		'right': 0,
		'top':0,
		'bottom':0
	});
	$('h1').html('cmr_db_admin');
	$('#dbclose').show();
	$('#dbshow').hide();
});
$('#dbclose').click(function(){
	$('#dbBlock').css({
		'position':'absolute',
		'right': window.innerWidth-79+'px',
		'top':22+'px',
		'bottom':0
	});
	$('h1').html('');
	$('#dbclose').hide();
	$('#dbshow').show();
});
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

$(document).on('change',function(){
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
});
$(function() {
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
	$('#dbshow').hide();
  });