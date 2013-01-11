$(document).ready(function(){

});

function formValidate(f){
	var vObj = new Validator();
	switch(f){
		case 'addboarder':
			vObj.validate('name', $('#name').val(),{'required':'','minLength':5},'form-li-field-input-text-name',{'required':'<img src="http://localhost/images/error.png">','minLength':'<img src="http://localhost/images/error.png">'});
			vObj.validate('address', $('#address').val(),{'required':''},'form-li-field-input-text-address',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('marital', $('#marital').val(),{'required':''},'form-li-field-input-text-marital',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('profession', $('#profession').val(),{'required':''},'form-li-field-input-text-profession',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('phone', $('#phone').val(),{'required':''},'form-li-field-input-text-phone',{'required':'<img src="http://localhost/images/error.png">'});
			vObj.validate('mobile', $('#mobile').val(),{'required':''},'form-li-field-input-text-mobile',{'required':'<img src="http://localhost/images/error.png">'});
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