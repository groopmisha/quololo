const custom_block = {

	'render': function(block){
		$.ajax({
		url: 'index.php?route=extension/module/custom/render',
		type: 'get',
		data: {'block': block},
		dataType: 'html',
		success: function(html) {
			$('#custom-' + block).html(html).removeClass('custom_lock');
		},
		complete: function(){
			$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	},

	'customer': function(value){
		$.ajax({
		url: 'index.php?route=extension/module/custom/customer/update&customer_group_id=' + value,
		dataType: 'json',
		success: function(json) {
			$('[id^=customer-field]').hide();
			$('[id^=customer-field]').removeClass('required');

			for (i = 0; i < json.length; i++) {
			field = json[i];

			$('#customer-field-' + field.name).show();
			// $('#customer-field-confirm, #customer-field-password').css('padding-bottom','1rem');

			if (field['required']) {
				$('#customer-field-' + field.name).addClass('required');
			}
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	},

	'shipping': function(value){
		$.ajax({
		url: 'index.php?route=extension/module/custom/shipping/update&shipping_method=' + value,
		dataType: 'json',
		success: function(json) {

			if (json.length === 0) {
			$('#custom-shipping-address').hide();
			} else {
			$('#custom-shipping-address').show();
			}

			$('[id^=shipping-field]').hide();
			$('[id^=shipping-field]').removeClass('required');

			for (i = 0; i < json.length; i++) {
			field = json[i];

			$('#shipping-field-' + field['name']).show();

			if (field['required']) {
				$('#shipping-field-' + field['name']).addClass('required');
			}
			}

			custom_block.render('total');
	
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	},

	'payment': function(value){
		$.ajax({
		url: 'index.php?route=extension/module/custom/payment/update&customer_group_id=' + value,
		dataType: 'json',
		success: function(json) {

			$('[name=payment_method]').parents('.radio').hide();

			for (i = 0; i < json.length; i++) {
			let method = json[i].name.replace('-', '_');
			$('[name=payment_method][value^='+ method +']').parents('.radio').show();

			}

			$('[name=payment_method]:visible').first().prop('checked', true);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	}
}

function checkoutLogin(){

	return new Promise( (resolve, reject) => {
		$.ajax({
		url: 'index.php?route=extension/module/custom/login/save',
		type: 'post',
		data: $('#custom-login input[type=\'radio\']:checked'),
		dataType: 'json',
		beforeSend: function(){
		$('#button-custom-order').button('loading');
		},
		success: function(json) {
			resolve();
		},
		complete: function(){
		$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
		console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	});
}

function checkoutCustomer(){

	return new Promise( (resolve, reject) => {
		$.ajax({
		url: 'index.php?route=extension/module/custom/customer/save',
		type: 'post',
		data: $('#custom-customer input[type=\'text\'], #custom-customer input[type=\'date\'], #custom-customer input[type=\'datetime-local\'], #custom-customer input[type=\'time\'], #custom-customer input[type=\'checkbox\']:checked, #custom-customer input[type=\'radio\']:checked, #custom-customer input[type=\'hidden\'], #custom-customer input[type=\'password\'], #custom-customer textarea, #custom-customer select'),
		dataType: 'json',
		beforeSend: function(){
			$('#button-custom-order').button('loading');
		},
		success: function(json) {

			$('.alert, .text-danger').remove();
			$('.has-error').removeClass('has-error');
			
			if (json['redirect']) {
			console.log('Redirect to ' + json['redirect']);
			location = json['redirect'];
			} else if (json['error']) {

			if (json['error']['warning']) {
				$('#custom-customer').prepend('<div class="alert alert-warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			for (i in json['error']) {
				var element = $('#customer-field-' + i.replace('_', '-'));
				$(element).append('<div class="text-danger">' + json['error'][i] + '</div>');

			}

			$('.text-danger').parent().addClass('has-error');
			$('.text-danger').closest('.cart__customer.active').addClass('has-error');

			reject('customer');

			}

			resolve();

		},
		complete: function(){
			$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	});
}

function checkoutShipping(){

	return new Promise( (resolve, reject) => {
		$.ajax({
		url: 'index.php?route=extension/module/custom/shipping/save',
		type: 'post',
		data: $('#custom-shipping input[type=\'text\'], #custom-shipping input[type=\'date\'], #custom-shipping input[type=\'datetime-local\'], #custom-shipping input[type=\'time\'], #custom-shipping input[type=\'checkbox\']:checked, #custom-shipping input[type=\'radio\']:checked, #custom-shipping input[type=\'hidden\'], #custom-shipping textarea, #custom-shipping select'),
		dataType: 'json',
		beforeSend: function(){
			$('#button-custom-order').button('loading');
		},
		success: function(json) {

			$('.alert, .text-danger').remove();
			$('.has-error').removeClass('has-error');
			
			if (json['redirect']) {
			console.log('Redirect to ' + json['redirect']);
			location = json['redirect'];
			} else if (json['error']) {

			if (json['error']['warning']) {
				$('#custom-shipping').prepend('<div class="alert alert-warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			for (i in json['error']) {
				var element = $('#shipping-field-' + i.replace('_', '-'));
				$(element).append('<div class="text-danger">' + json['error'][i] + '</div>');

			}

			$('.text-danger').parent().addClass('has-error');

			reject('shipping');
			}
			
			resolve();

		},
		complete: function(){
			$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	});  
}

function checkoutPayment(){

	return new Promise( (resolve, reject) => {
		$.ajax({
		url: 'index.php?route=extension/module/custom/payment/save',
		type: 'post',
		data: $('#custom-payment input[name=\'payment_method\']:checked, #custom-control input[name=\'agree\']:checked'),
		dataType: 'json',
		beforeSend: function(){
			$('#button-custom-order').button('loading');
		},
		success: function(json) {
			$('#custom-payment .alert, #custom-control .alert').remove();
			if (json['redirect']) {
				console.log('Redirect to ' + json['redirect']);
				location = json['redirect'];
			} else if (json['error']) {
				if (json['error']['payment_method']) {
					$('#custom-payment').prepend('<div class="alert alert-warning">' + json['error']['payment_method'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
					reject('payment');
				}
				if (json['error']['agree']) {
					$('.cart__buttons').find('span').html('<span class="error">'+json['error']['agree']+'</span>');
					$('.cart__buttons input[type=checkbox]').css('box-shadow','0 0 1px 1px rgba(236, 63, 65, .8)');
					reject('control');
				}
			}
			resolve();
		},
		complete: function(){
			$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	});  
}

function checkoutComment(){

	return new Promise( (resolve, reject) => {
		$.ajax({
		url: 'index.php?route=extension/module/custom/comment/save',
		type: 'post',
		data: $('#custom-comment textarea'),
		dataType: 'json',
		beforeSend: function(){
			$('#button-custom-order').button('loading');
		},
		success: function(json) {

			$('.alert').remove();
			
			if (json['error']) {

			if (json['error']['warning']) {
				$('#custom-comment').prepend('<div class="alert alert-warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			reject('comment');
			}

			resolve();

		},
		complete: function(){
			$('#button-custom-order').button('reset');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		});
	});
}

function checkoutConfirm(){

	return new Promise( (resolve, reject) => {
		$.ajax({
			url: 'index.php?route=checkout/confirm',
			dataType: 'html',
			beforeSend: function(){
				$('#button-custom-order').button('loading');
			},
			success: function(html) {
				$('#custom-confirm').html(html);
				$('#custom-confirm').find('.table-responsive').remove();
				$('#custom-confirm').find('.buttons .pull-right').hide();
				setTimeout(function(){
					const btn_confirm = $(document).find('#custom-confirm button, #button-confirm');
					if (btn_confirm.attr('href') !== undefined) {
						location = btn_confirm.attr('href');
					}
					$(document).find('#custom-confirm button, #button-confirm, .paypal-button').trigger('click');
				}, 100);
				reject('confirm');
			},
			complete: function(){
				// $('#button-custom-order').button('reset');
				$('.cart__buttons').find('span').remove();
				$('.cart__buttons input[type=checkbox]').css('box-shadow','none');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	});
}

function failureCallback(id) {
	$('html, body').animate({ scrollTop: $('#custom-' + id).offset().top }, 'slow');
}

