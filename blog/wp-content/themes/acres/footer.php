 <div class="footer_img text-center">
     <img src="<?php echo get_template_directory_uri();?>/img/footer_cherry_img.png" class="img-fluid">
 </div>
 <section class="form-section">
         <div class="container">
            <div class="form-section-wrapper row">
               <div class="col-xs-12 col-sm-4">
                  <img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="img-fluid">
               </div>
               <div class="col-xs-12 col-sm-8">
                  <div class="footer-link">
                     <ul>
                       <a href="#">  <li>FAQ</li> </a>
                      <a href="blog">  <li>Blogs</li> </a>
                       <a href="#"> <li>Shadnagar</li></a>
                       <a href="../bhutpur.html"> <li>Bhutpur</li> </a>
                       <a href="#"> <li>CSA Website</li></a>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container footer-icons ">
            <div class="footer-icons-right">
               <img src="<?php echo get_template_directory_uri();?>/img/YT.png" class="img-fluid">
               <img src="<?php echo get_template_directory_uri();?>/img/fb.png" class="img-fluid">
            </div>
         </div>
         <div class="container ">
            <div class="col-sm-12 bottom-line"></div>
         </div>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Become a part of our upcoming 60-acre Bhuthpur CSA</h4>
               </div>
               <div class="modal-body">
                  <form class="leadform" id="leadform" method="post" enctype="multipart/form-data" action="leadgrab.php">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control form-control-lg mr-4" name="fullname" id="fullname" value="" placeholder="Full Name*" required>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="tel" class="form-control form-control-lg mr-4" name="phone" id="phone" value="" placeholder="Phone*">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="email" required="" placeholder="Email*" autocomplete="off" class="form-control form-control-lg" id="email" name="email" value="">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <div class="farm">
                                 <label for="Farm land">Do you want to buy a farm land</label>
                                 <select class="form-control" id="test" name="form_select" onchange="showDiv('hidden_div', this)">
                                    <option style="background: #fff;" value="default">select</option>
                                    <option style="background: #fff;" value="1">Yes</option>
                                    <option style="background: #fff;" value="0">No</option>
                                 </select>
                              </div>
                              <div id="hidden_div" style="display: none;">
                                 <div class="form-group" style="margin-top: 15px;">
                                    <div id="1" class="colors 1">
                                       <input type="text" placeholder="How many acres ? - 1/4 or 1/2 or 1..acres*" autocomplete="off" class="form-control form-control-lg" id="acres" name="acres" value="" required="required">
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <button type="submit" class="btn btn-brand ajaxFormButton formSubmit"><b>VISIT FARM</b></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <input type="hidden" id="leadutmsource" name="leadutmsource" value="" />
                     <input type="hidden" id="leadutmcampaign" name="leadutmcampaign" value=""/>
                     <input type="hidden" id="leadutmmedium" name="leadutmmedium" value="" />
                     <input type="hidden" id="leadutmterm" name="leadutmterm" value="" />
                     <input type="hidden" id="leadutmcontent" name="leadutmcontent" value="" />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <a href="tel:07569374013" class="mobile-call"><span><img src="img/phone.png" class="img-fluid"></span> 075693 74013</a>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <!-- CUSTOM JS : BEGIN -->
      <script src="js/main.js"></script>
     	<script>
	     $(document).ready(function(e){
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
   
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
      
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })

     
    
              window.onscroll = function() {myFunction()};
         
         var header = document.getElementById("header");
         var sticky = header.offsetTop;
         
         function myFunction() {
          
           if (window.pageYOffset > sticky) {
            $("#header").addClass("sticky");
           } else {
              $("#header").removeClass("sticky");
           }
         }
         
          $(".main-menu-toggle").click(function()
          {
         
             $(".main-menu-items").toggle();
             var elem = $(this);
         if (elem.hasClass('open')) {
         $("#menu-overlay").removeClass('showoverlay');
         $("#mobile-main-menu").removeClass('show');
         $('.main-menu-toggle').removeClass('open');
         }
         else {
         $("#mobile-main-menu").addClass('show');
         $('.main-menu-toggle').addClass('open');
         $("#menu-overlay").addClass('showoverlay');
         }
          });
         
          (".main-menu-toggle").click(function () {
         
         alert();
         
         });
            // body...
         })
	</script>
      <script type="text/javascript">
         $(document).ready(function(){
           $('.home-slider').slick({
            slidesToShow: 1,
         slidesToScroll: 1,
         swipeToSlide: true,
         dots: true,
         fade: true,
         arrows: false,
         autoplay:true,
         speed: 400,
         infinite: true,
         centerMode: false,
         
         
         });
         
           $('.center').slick({
         dots: true,
         infinite: true,
         centerMode: true,
         slidesToShow:3,
         slidesToScroll: 1,
         arrows:false,
         responsive: [{
                           breakpoint: 1199,
                           settings: {
                              slidesToShow: 3,
         
                           }
                        }, {
                           breakpoint: 768,
                           settings: {
                              slidesToShow: 1,
                              autoplay:true,
                              dots:false,
                              centerMode:false
                           }
                        }]
           });
         });
      </script>
      <script>
         $("#leadform").on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var elem = $("#phone");
            $("#gen-error").remove();  
            $("#gen-error").css('display', 'none');
               
               e.preventDefault();
         
               var form = $(this);
               var submitButton = form.find('.formSubmit');
               var messageBox = form.find('.formMessage');
               messageBox.html('');
               
               var origButtonHTML = submitButton.html();
               submitButton.attr('disabled', 'disabled');
               submitButton.html('<span class="fa fa-spin fa-spinner fa-2x"></span>');
               
               var postData = form.serializeArray();
               var formURL = "./leadgrab.php";
               var methodType = form.attr('method');
               
               form.children('.form-group').removeClass('error');
               
               $.ajax({
                  url: formURL,
                  type: methodType,
                  contentType: false,
                  processData: false,
                  data: new FormData(this),
                  
                  success: function(data, textStatus, jqXHR) {
                     var response = jQuery.parseJSON(data);
                     if(response.success === true) {
                        document.location.href = "thankyou.html";
                        messageBox.html("<div class='alert alert-success' style='margin: 15px 0px 0px; line-height: 1.5;'>" + response.success_message + "</div>");
                        submitButton.attr('disabled', 'disabled');
                        submitButton.html("<span class='fa fa-thumbs-up fa-2x'></span>");
                        ;
                        return false;
                     } else {
                        var error_phrase = '<div>';
                        console.log(response.error_messages);
                        var error_messages = response.error_messages;
                        console.log(error_messages);
                        
                        $.each(error_messages, function(index, value) {
                           var key = Object.keys(value)[0];
                           
                           $('#'+key).parent('.form-group').addClass('error');
                           //$('#'+key).after("<small class='help-block error text-danger'>" + value + "</small>")
                           
                           error_phrase = error_phrase + '<div>' + value;
                           error_phrase = error_phrase + '</div>';
                        });
                        error_phrase += '</div>';
                        
                        messageBox.html("<div class='alert alert-danger' style='margin: 15px 0px 0px; line-height: 1.5;'>" + error_phrase + "</div>");
                        submitButton.html(origButtonHTML);
                        submitButton.removeAttr('disabled');
                        return false;
                     }
                  },
                  error: function(jqXHR, textStatus, errorThrown) {}
               });
            
            }
         );
         
      </script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.min.js"></script>
      <script>
         $.validator.addMethod(
            "regex",
            function(value, element, regexp) 
            {
               if (regexp.constructor != RegExp)
                  regexp = new RegExp(regexp);
               else if (regexp.global)
                  regexp.lastIndex = 0;
               return this.optional(element) || regexp.test(value);
            },
            "Please check your input."
         );
         
         $("#leadform").validate({
            rules: {
               fullname: "required",
               acres: "required",
               email: {
                  required: true,
                  email: true,
                  regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
               },
               acres:{
                   required: true,
               },
            },
            messages: {
               fullname: "Full Name is required",
               email: "Invalid Email",
               acres: "This field is required",
            }
         });
         
         $("#leadutmsource").val(getCookie("_inacreslp_utm_source"));
         $("#leadutmcampaign").val(getCookie("_inacreslp_utm_campaign"));
         $("#leadutmmedium").val(getCookie("_inacreslp_utm_medium"));
         $("#leadutmterm").val(getCookie("_inacreslp_utm_term"));
         $("#leadutmcontent").val(getCookie("_inacreslp_utm_content"));
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
         
          $(".main-menu-toggle").click(function()
          {
         
             $(".main-menu-items").toggle();
             var elem = $(this);
         if (elem.hasClass('open')) {
         $("#menu-overlay").removeClass('showoverlay');
         $("#mobile-main-menu").removeClass('show');
         $('.main-menu-toggle').removeClass('open');
         }
         else {
         $("#mobile-main-menu").addClass('show');
         $('.main-menu-toggle').addClass('open');
         $("#menu-overlay").addClass('showoverlay');
         }
          });
         
          (".main-menu-toggle").click(function () {
         
         alert();
         
         });
            // body...
         })
      </script>
      <script>
           $(document).ready(function(e){
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
     
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
      
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })

     
    
              window.onscroll = function() {myFunction()};
         
         var header = document.getElementById("header");
         var sticky = header.offsetTop;
         
         function myFunction() {
          
           if (window.pageYOffset > sticky) {
            $("#header").addClass("sticky");
           } else {
              $("#header").removeClass("sticky");
           }
         }
         
          $(".main-menu-toggle").click(function()
          {
         
             $(".main-menu-items").toggle();
             var elem = $(this);
         if (elem.hasClass('open')) {
         $("#menu-overlay").removeClass('showoverlay');
         $("#mobile-main-menu").removeClass('show');
         $('.main-menu-toggle').removeClass('open');
         }
         else {
         $("#mobile-main-menu").addClass('show');
         $('.main-menu-toggle').addClass('open');
         $("#menu-overlay").addClass('showoverlay');
         }
          });
         
          (".main-menu-toggle").click(function () {
         
         alert();
         
         });
            // body...
         })
      </script>
      <?php wp_footer(); ?>
  </body>
</html>