$(document).ready(function() {

	$mail_check = function() {
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		var mail = $(this).val();
		if(pattern.test(mail)){
			$(this).removeClass('error');
		}else{
			$(this).addClass('error');
		}
	};

	$(document).on('click', '.drop-box', function(){
		$(this).toggleClass('active');
		$(this).find('.list').slideToggle('normal');
	});

	$(document).on('click', '.drop-box .list span', function(){
		var id = $(this).closest('.list').attr('id');
		var text = $(this).text();
		var num = parseInt($(this).attr('data-value'));
		$('#' + id + '-choose').text(text);
		$('#' + id + '-field').val(num);
	});

	$(document).on('change', '.mail-check', function(){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		var mail = $(this).val();
		if(pattern.test(mail)){
			$(this).removeClass('error');
		}else{
			$(this).addClass('error');
		}
	});

	$(document).on('keyup', '.mail-check', function(){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		var mail = $(this).val();
		if(pattern.test(mail)){
			$(this).removeClass('error');
		}else{
			$(this).addClass('error');
		}
	});
});

	var height = $(window).height();
	var calculate = $('#animated-blocks').offset().top - height + 100;
	var check_sc = 2;

	function first_anim(){
		$('#animated-blocks').find('#first-animation').addClass('animate');
		setTimeout(second_anim, 210);
	};

	function second_anim(){
		$('#animated-blocks').find('#second-animation').addClass('animate');
		setTimeout(third_anim, 410);
	};

	function third_anim(){
		$('#animated-blocks').find('#third-animation').addClass('animate');
	};

	$calculate = function(){
		var scroll = $(document).scrollTop();
		if (calculate < scroll){
			if (check_sc == 2) {
				first_anim();
				check_sc = 1;
			}
		}
	};

	$(document).on('scroll', function(){
		$calculate();
	});

	$calculate();


