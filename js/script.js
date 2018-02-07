jQuery(document).ready(function() {

    $('input').blur(function() {

      // check if the input has any value (if we've typed into it)
      if ($(this).val())
        $(this).addClass('used');
      else
        $(this).removeClass('used');
    });

   $('.menu').click( function(e) {
        e.stopPropagation();
        $('#Sidenav').toggleClass('move')
       $('#nav-icon4').toggleClass('open');

   });

   $('body').click(function(e) {
     if ($('#Sidenav').hasClass('move')) {
       $("#Sidenav").toggleClass('move'),
       $('#nav-icon4').toggleClass('open');
     }
 });
 $( "#talk , #talk2 , #talk3").click(function() {
       $(".hide2").hide();
       $(".calculator2").hide();
       $(".talk-content").show();
       $(".talk-body").animate({ width:'100%' });
});

$( ".close").click(function() {
     $(".hide2").show("fast");
     $(".calculator2").show("fast");
     $(".talk-content").hide("fast");
     $(".talk-body").animate({ width:'33.3333%' });
});
$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){
            $(".fil-cat").removeClass('filter-active');
            $(this).addClass('filter-active');
		selectedClass = $(this).attr("data-rel");
     $("#portfoliof").fadeTo(100, 0.1);
		$("#portfoliof div.scale-anm").not("."+selectedClass).fadeOut().hide('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfoliof").fadeTo(300, 1);
    }, 300);

	});
});
$(function() {

   // Get the form.
   var form = $('#ajax-contact');

   // Get the messages div.
   var formMessages = $('#form-messages');

   // Set up an event listener for the contact form.
   $(form).submit(function(e) {
       // Stop the browser from submitting the form.
       e.preventDefault();

       // Serialize the form data.
       var formData = $(form).serialize();

       // Submit the form using AJAX.
       $.ajax({
           type: 'POST',
           url: $(form).attr('action'),
           data: formData
       })
       .done(function(response) {
           // Make sure that the formMessages div has the 'success' class.
           $(formMessages).removeClass('error');
           $(formMessages).addClass('success');

           // Set the message text.
           $(formMessages).text(response);

           // Clear the form.
           $('#name').val('');
           $('#email').val('');
           $('#phone').val('');
           $('#msg').val('');
       })
       .fail(function(data) {
           // Make sure that the formMessages div has the 'error' class.
           $(formMessages).removeClass('success');
           $(formMessages).addClass('error');

           // Set the message text.
           if (data.responseText !== '') {
               $(formMessages).text(data.responseText);
           } else {
               $(formMessages).text('Oops! An error occured and your message could not be sent.');
           }
       });

   });

});


});
     $('.hero').height($(window).height());
