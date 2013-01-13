$(document).ready(function(){
	$('div.table-data-body ul li').mouseover(function(){
		$(this).css({backgroundColor:'#eee'});
		$(this).siblings().css({backgroundColor:'#eee'});
	});
	$('div.table-data-body ul li').mouseout(function(){
		if(!$(this).hasClass('sel-row')){
			$(this).css({backgroundColor:'#fff'});
			$(this).siblings().css({backgroundColor:'#fff'});
		}
	});
	$('div.table-data-body ul li').click(function(){
		if($(this).siblings().hasClass('sel-row')){
			$('div.table-data-body ul li').removeClass('sel-row');
			$('div.table-data-body ul li').removeAttr('style');
			
			$('div.table-data-operations-button.retdefault').addClass('table-data-operations-button-disabled');
			$('div.table-data-operations-button-level2.retdefault').addClass('table-data-operations-button-level2-disabled');
		}else{
			$('div.table-data-body ul li').removeClass('sel-row');
			$('div.table-data-body ul li').removeAttr('style');
			$(this).addClass('sel-row');
			$(this).siblings().addClass('sel-row');
			$('div.table-data-operations-button-level2 a').each(function(){
				$(this).attr('onclick','lightbox("'+$(this).attr('lightbox')+'",500)');
			});
			$('div.table-data-operations-button').removeClass('table-data-operations-button-disabled');
			$('div.table-data-operations-button-level2').removeClass('table-data-operations-button-level2-disabled');
		}
	});
});
function lightbox(a,b){
	runLightbox(a,b);
}
function formValidate(f){
	var vObj = new Validator();
	switch(f){
		case 'addboarder':
			vObj.validate(
							'name', 
							$('#name').val(),
							{
								'required':''
							},
							'form-li-field-input-text-name',
							{
								'required':'<img src="http://localhost/images/error.png">',
								'minLength':'<img src="http://localhost/images/error.png">'
							}
						 );
			vObj.validate('address', $('#address').val(),{'required':''},'form-li-field-input-text-address',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('marital', $('#marital').val(),{'required':''},'form-li-field-input-text-marital',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('profession', $('#profession').val(),{'required':''},'form-li-field-input-text-profession',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate(
							'phone', 
							$('#phone').val(),
							{
								'required':'',
								'pattern':/^[0-9]{3}\-[0-9]{7}$/
							},
							'form-li-field-input-text-phone',
							{
								'required':'<img src="http://localhost/images/error.png">',
								'pattern':'<img src="http://localhost/images/error.png">'
							}
						 );
			vObj.validate(
							'mobile', 
							$('#mobile').val(),
							{
								'required':'',
								'pattern':/^\+63 [0-9]{10}$/
							},
							'form-li-field-input-text-mobile',
							{
								'required':'<img src="http://localhost/images/error.png">',
								'pattern':'<img src="http://localhost/images/error.png">'
							}
						);
			vObj.validate('age', $('#age').val(),{'required':''},'form-li-field-input-text-age',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('birthdate', $('#birthdate').val(),{'required':''},'form-li-field-input-text-birthdate',{'required':'<img src="http://localhost/images/error.png">'});
		break;
	}
	if(!vObj.result){
		$('li.form-generic-error-container').html('There are error(s) during submission. Please check highlighted field(s).');
		return false;
	}
	return true;
}
function cleanForm(){
	$('li.form-generic-error-container').html('');
}