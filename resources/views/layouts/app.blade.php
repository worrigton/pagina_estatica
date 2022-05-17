<html>
    <head>
        <title>GDL WEESTT- @yield('title')</title>
        <!-- Stylesheets -->
  
        <link rel="icon" type="image/x-icon" href="images/logo.png">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet" >
      
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    

    </head>
    <body>

        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed-->
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <!-- ======= Touch Swipe =========-->
        <script src="{{URL::asset('js/jquery.touchSwipe.min.js')}}"></script>
        <!-- ======= Customize =========-->
        <script src="{{URL::asset('js/responsive_bootstrap_carousel.js')}}"></script>
        <script src="{{URL::asset('js/custom.js')}}"></script>
        <script src="{{URL::asset('js/theme.js')}}"></script>

        <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
        <script type="text/javascript">
            jQuery(function($) { 
                $('#fadeInLeft').waypoint(function() {
                    $(this).toggleClass( 'fadeInLeft animated' );    
                },
                {
                    offset: '70%',
                    triggerOnce: true
                });
                $('#fadeInRight').waypoint(function() {
                    $(this).toggleClass( 'fadeInRight animated' );    
                },
                {
                    offset: '70%',
                    triggerOnce: true
                });
                $('#counter').waypoint(function() {
                    $('.counter').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    
                    $({ countNum: $this.text()}).animate({
                      countNum: countTo
                    },

                    {

                      duration: 3000,
                      easing:'linear',

                      step: function() {
                        $this.text(Math.floor(this.countNum));
                      },
                      complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                      }

                    });  
                  });    
                },
                {
                    offset: '70%',
                    triggerOnce: true
                });
                $('.whychoose').waypoint(function() {
                    $(this).toggleClass( 'fadeInRight animated' );    
                },
                {
                    offset: '70%',
                    triggerOnce: true
                });
            });
        </script>
        <script type="text/javascript">
            $(window).scroll(function() {
              if ($(this).scrollTop() > 120){
              $('.nav_col').removeClass('slideIn animated');
              $('.nav_col').addClass("sticky_header slideInDown animated");
              }
              else{
              $('.nav_col ').removeClass('sticky_header slideInDown animated');
              $('.nav_col ').addClass('slideIn animated');
              }
            });
        </script>
        <script type="text/javascript">
          (function($) {
          "use strict"
          // Accordion Toggle Items
          var iconOpen = 'fa fa-minus',
          iconClose = 'fa fa-plus';
          $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
          var $target = $(e.target);
          $target.siblings('.accordion-heading').find('em').toggleClass(iconOpen + ' ' + iconClose);
          if(e.type == 'show') {
          jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
          jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
          jQuery('#accordion2 .accordion-toggle').removeClass('active');
          jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
          $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
          $target.prev('.accordion-group').find('.accordion-body.collapse').addClass('in');
          $target.siblings('.accordion-heading').find('em').addClass('fa-minus');
          $target.siblings('.accordion-heading').find('em').removeClass('fa-plus');
          }
          if(e.type == 'hide') {
          jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
          jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
          jQuery('#accordion2 .accordion-toggle').removeClass('active');
          jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
          $(this).find('.accordion-toggle').not($target).removeClass('active');
          $target.siblings('.accordion-heading').find('em').addClass('fa-plus');
          $target.siblings('.accordion-heading').find('em').removeClass('fa-minus');
          }
          });
          })(jQuery);
        </script>
        
        
        <script src="{{URL::asset('js/homepage2.js')}}"></script>
        <script src="{{URL::asset('js/ancla.js')}}"></script>
    </body>
</html>