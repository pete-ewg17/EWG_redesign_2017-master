/*===========
  BACK TO TOP 
=============*/

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
    
});

/*=================
  ANIMATE ON SCROLL
=================*/

AOS.init({
  duration: 1200,
});

AOS.init({
      disable: 'mobile'
    });

/*===========
  FORM 
=============*/

$(function () {

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "technology/contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    alert("Thank you");
                }
            });
            return false;
        }
    })
});
 
