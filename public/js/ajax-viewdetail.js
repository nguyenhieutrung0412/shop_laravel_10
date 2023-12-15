(function($) {
	"use strict";
	
	const view_detail = document.querySelectorAll('.view_detail');
	view_detail.forEach(element => {
		element.addEventListener('click', (e) => {
			//const url = element.attr('action');
			const url = element.dataset.action;
	
			getProductDetail(element.dataset.id,url);
		});
	});
	
	function getProductDetail(id_product,url)
	{
		var formMessages = $('.detail_popup');
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: 'POST',
			url: url,
			data: {id:id_product},
			success:function(data){ 
				console.log(data);
				formMessages.fadeIn();  
				formMessages.html(data); 
				
				
				
				// $('#countryList').fadeIn();  
				// $('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
			  }
		})
	}

	
	

})(jQuery);
