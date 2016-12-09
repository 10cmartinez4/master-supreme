// JavaScript Document

$(function(){
		   
	
	$('#hop-save').click(function(){

			$('#pricing-savings_div').fadeIn(250);
			$('#pricing-ipad_div').hide();
	
	});
	
	$('#hop-ipad').click(function(){

			$('#pricing-savings_div').hide();
			$('#pricing-ipad_div').fadeIn(250);
	
	});
	
		   
});