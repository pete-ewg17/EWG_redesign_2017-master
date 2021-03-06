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
            var f = $(this).serializeArray();
            $("#loading_div").css('display', 'block');
            $("#submitButton").css('display', 'none');
            $.post(url, {
                fields:f
            }, function (result) {
                $("#loading_div").css('display', 'none');
                $("#submitButton").css('display', 'block');
                $("form").trigger("reset"); 
                $("#myModal").modal('hide');
                $("#contact-form").reset();
                    alert("Thank you");
                
            });

            return false;
        }
    })
});
