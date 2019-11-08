 <section class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <h2>HOGASH STUDIOS</h2>
            <p>We're a full-service digital agency that believes being a Favorite brand is more valuable than just being a Famous one. We craft beautifully useful, connected ecosystems that grow businesses and build enduring relationships between brands and humans.</p>
          </div>
          <div class="col-md-2 col-lg-2">
            <h2>COMPANY</h2>
            <ul>
              <li><a href="">Our Blog</a></li>
              <li><a href="">Instagram</a></li>
              <li><a href="">Snapchat</a></li>
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
              <li><a href="">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-lg-2">
            <h2>MEMBER</h2>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Pricing</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Service</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-lg-2">
             <h2>FOLLOW</h2>
            <ul>
              <li><a href="">Account</a></li>
              <li><a href="">Billing</a></li>
              <li><a href="">Membership</a></li>
              <li><a href="">Receipt</a></li>
              <li><a href="">Invoice</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" id="hr" style="padding-top: 40px;padding-bottom: 40px;">
         <hr style="background: #1c1c1c;">
        </div>
        <div class="col-md-12 col-lg-12">
         <h3 style="color:#999999; font-size: 11px;">© 2017 <a href="" style="color:#8d7431;">KALLYAS</a> | ALL RIGHTS RESERVED <a href="" style="color:#8d7431;">HOGASH</a>.</h3>
         <p style="letter-spacing: 2px;font-size: 10px;color: #666">Theme Powered by WordPress</p>
        </div>
      </div>
    </section>
    <!-- Js -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "6px 10px";
    document.getElementById("navbar").style.background = "white";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("navbar").style.background = "transparent";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
<script>
  
               $.fn.jQuerySimpleCounter = function( options ) {
                   var settings = $.extend({
                       start:  0,
                       end:    100,
                       easing: 'swing',
                       duration: 400,
                       complete: ''
                   }, options );
               
                   var thisElement = $(this);
               
                   $({count: settings.start}).animate({count: settings.end}, {
                     duration: settings.duration,
                     easing: settings.easing,
                     step: function() {
                        var mathCount = Math.ceil(this.count);
                        thisElement.text(mathCount);
                     },
                     complete: settings.complete
                  });
               };
               
               
               $('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
               $('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
               $('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
               $('#number4').jQuerySimpleCounter({end: 246,duration: 2500});
               
               
               
               /* AUTHOR LINK */
                 $('.about-me-img').hover(function(){
                        $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
                    }, function(){
                        $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
                    });
</script>
</body>
</html>