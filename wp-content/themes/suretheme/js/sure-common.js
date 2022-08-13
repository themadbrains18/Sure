$(document).ready(function(){
	/* About Classic */
    $(".owl-about").owlCarousel({
        onInitialized: callafterinitialized,
        items: 2,
        margin:30,
        dots: false,
        nav: true,
        navText: [
        '<i class="ti ti-angle-left"></i>',
        '<i class="ti ti-angle-right"></i>'
         ],
        loop:true,
        autoplay: true,
        //smartSpeed:1000,
        //navSpeed: true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive: {
            992: {
                items: 2,
            },
            600: {
                items: 2,
                nav:false,
                dots:true
            },
            320: {
                items: 1,
                nav:false,
                dots:true
            },
        }
    });

    $(".owl-events").owlCarousel({
        items:3,
        margin:10,
        dots: false,
        nav: true,
        navText: [
        '<i class="ti ti-angle-left"></i>',
        '<i class="ti ti-angle-right"></i>'
         ],
        loop:true,
        autoplay: true,
        //smartSpeed:1000,
        //navSpeed: true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive: {
            992: {
                items:4,
            },
            600: {
                items: 2,
                nav:false,
                dots:true
            },
            320: {
                items: 1,
                nav:false,
                dots:true
            },
        }
    });

    $(".owl-media").owlCarousel({
        items:5,
        margin:10,
        dots: false,
        nav: true,
        navText: [
        '<i class="ti ti-angle-left"></i>',
        '<i class="ti ti-angle-right"></i>'
         ],
        loop:true,
        autoplay: true,
        //smartSpeed:1000,
        //navSpeed: true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive: {
            992: {
                items:5,
            },
            600: {
                items:4,
                nav:true,
                dots:true
            },
            320: {
                items:2,
                nav:true,
                dots:true
            },
        }
    });

    $(".owl-industryspeaks").owlCarousel({
        items:1,
        margin:10,
        dots: false,
        nav: true,
        navText: [
        '<i class="ti ti-angle-left"></i>',
        '<i class="ti ti-angle-right"></i>'
         ],
        loop:true,
        autoplay: true,
        //smartSpeed:1000,
        //navSpeed: true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive: {
            992: {
                items:1,
            },
            600: {
                items:1,
                nav:false,
                dots:true
            },
            320: {
                items:1,
                nav:false,
                dots:true
            },
        }
    });

    var maxheighthp=0;
    $(".testimonial-para").each(function()
    {
        // console.log($(this).outerHeight());
        if( $(this).outerHeight() > maxheighthp )
        {
            maxheighthp = $(this).outerHeight();
        }
    });
    $(".testimonial-para").outerHeight(maxheighthp);

    setTimeout( function(){
        $(".testimonial-para").each(function()
        {
            // console.log($(this).outerHeight());
            if( $(this).outerHeight() > maxheighthp )
            {
                maxheighthp = $(this).outerHeight();
            }
        });
        $(".testimonial-para").outerHeight(maxheighthp);
    }, 2000 );

    function callafterinitialized()
    {
        $(".carouselitemshadow").each(function()
        {
            // console.log($(this).height());
            $(this).height( ($(this).height())+10 );
        });
    }

});


$(window).on('load', function()
{
    var maxheighthp=0;
    $(".testimonial-para").each(function()
    {
        // console.log($(this).outerHeight());
        if( $(this).outerHeight() > maxheighthp )
        {
            maxheighthp = $(this).outerHeight();
        }
    });
    $(".testimonial-para").outerHeight(maxheighthp);

    $(".carouselitemshadow").each(function()
    {
        // console.log($(this).height());
        if( $(this).height() == 10 )
        {
            $(this).height( ($(this).height())+15 );
        }
    });

    // $("#mailchimp_submit").on('click', function(e)
    $(".subscribe-two").on('submit', function(e)
    {
        e.preventDefault();
        var email = $("#email_id_newsletter").val();
        var nonce = $("#newsletter_mailchimp_nonce").val();

        if( email != '' )
        {
            $.ajax(
            {
                url: site_url + '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'newsletter_mailchimp',
                    email: email,
                    nonce: nonce
                },
                success: function (response) 
                {
                    console.log(response);
                    var obj = $.parseJSON(response);
                    console.log(obj);
                    if(obj != '')
                    {
                        if(obj.status == 'error')
                        {
                            $("#newsletter_error").html(obj.msg);
                        }
                        else
                        {
                            $("#mailchimpsubs").html('<h3>'+obj.msg+'</h3>');
                        }
                    }
                }
            });
        }
        else
        {
            $("#newsletter_error").html('Enter valid Email address');
        }
        return false;
    });

});
