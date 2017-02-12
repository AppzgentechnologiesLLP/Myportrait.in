$(document).ready(function(){

	// Click Handler for Customer with portrait style selection 
	// Eg : oil painting, charcoal painting, water painting, painting
	$('.section-btn-group > .btn-block').first().addClass('btn-primary active');
  $('.section-btn-group > .btn-block').on('click',function(){
		$(this).parents('.section-btn-group').find('.btn-primary').removeClass('btn-primary active').addClass('btn-secondary');
		$(this).removeClass('btn-secondary').addClass('btn-primary active');
  })

    // Brief Customer with portrait selection 
    $('.btn-next').on('click',function(){
    	//$('.section-btn-group > .btn-block').find('input').is('checked');
      var activeSelection = $('.section-btn-group > .btn-block').find($('input[name=options]:checked')).val();
      $(this).parents('.block-selection').hide();
      $('.block-selected').show();
      $('.btn-group-selected').find('.btn-secondary.dropdown-toggle').text(activeSelection);
    });

    $(".dropdown-menu .dropdown-item").click(function(){
      //$(".btn:first-child").text($(this).text());
      $(this).parents('.btn-group').find('.dropdown-toggle').text($(this).text());
   });

    $('.section-work').on('click',function(){
      $('.section-work').find('.overlay').fadeOut();
      $(this).find('.overlay').fadeIn(2000);
    })

    $('.btn-yes').on('click',function(){
      var artistId = $(this).parents('.section-work').attr('id');
      console.log(artistId);
      $(this).parents('.block-selected').fadeOut(1500);
      $(this).parents('.block-selected').next('.block-artist').fadeIn(2000);
      $('.block-artist').find('h2').text("The artist you have selected is "+artistId);
      var activeSelection = $('.section-btn-group > .btn-block').find($('input[name=options]:checked')).val();
      $('.btn-group-selected').find('.btn-secondary.dropdown-toggle').text(activeSelection);

    })

});