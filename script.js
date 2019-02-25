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
	$('#dbclose').hide();
//$('#fileclose').hide();
	$('h1').html('cmrweb admin');
/*	$('#dbBlock').css({
		'position':'absolute',
		'right': window.innerWidth-76+'px',
		'top':22+'px',
		'bottom':window.innerHeight-58+'px'
	});
	$('#fileBlock').css({
		'position':'absolute',
		'right': window.innerWidth-76+'px',
		'top':63+'px',
		'bottom':window.innerHeight-58+'px'
	});	*/
}
function open(){
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
	/*$('#fileshow').click(function(){
		$('#fileBlock').css({
			'position':'relative',
			'right': 0,
			'top':0,
			'bottom':0
		});
		$('#fileclose').show();
		$('#fileshow').hide();
	});*/
}
function close(){
$('#dbclose').click(function(){
	$('#dbBlock').css({
		'position':'absolute',
		'right': window.innerWidth-76+'px',
		'top':22+'px',
		'bottom':window.innerHeight-58+'px'
	});
	$('h1').html('');
	$('#dbclose').hide();
	$('#dbshow').show();
});	
/*$('#fileclose').click(function(){
	$('#fileBlock').css({
		'position':'absolute',
		'right': window.innerWidth-76+'px',
		'top':63+'px',
		'bottom':window.innerHeight-58+'px'
	});
	$('#fileclose').hide();
	$('#fileshow').show();
});	*/
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
	//open();close();
  });