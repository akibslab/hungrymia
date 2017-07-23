(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

		/* Search Bar */
		$(function(){
    
			$(".input-group-btn .dropdown-menu li a").click(function(){

				var selText = $(this).html();
			
				//working version - for single button //
			   //$('.btn:first-child').html(selText+'<span class="caret"></span>');  
			   
			   //working version - for multiple buttons //
			   $(this).parents('.input-group-btn').find('.btn-search .label-icon').html(selText);

		   });

		});
		
		$('.registerBtn').on('click', function(){
			$('.login-modal-content').hide();
			$('.forget-pass-modal-content').hide();
			$('.register-modal-content').show();
		})
		$('.loginBtn').on('click', function(){
			$('.register-modal-content').hide();
			$('.forget-pass-modal-content').hide();
			$('.login-modal-content').show();
		})
		$('.forgetPassBtn').on('click', function(){
			$('.register-modal-content').hide();
			$('.login-modal-content').hide();
			$('.forget-pass-modal-content').show();
		})

        


    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	