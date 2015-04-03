/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      // steller header
      $('.page').stellar();

      // Side mene drower
       $.slidebars();

      // cart form validation
      $('.cart')
        .bootstrapValidator({
          message: 'This value is not valid',
          container: 'tooltip',
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              'drop-adress1': {
                  validators: {
                      notEmpty: {
                          message: 'The adress is required'
                      }
                  }
              },
              'drop-adress2': {
                  validators: {
                      notEmpty: {
                          enabled: false
                      }
                  }
              },
              'drop-name': {
                  validators: {
                      notEmpty: {
                          message: 'The name is required'
                      }
                  }
              },
              'drop-phone': {
                  validators: {
                      notEmpty: {
                          enabled: false
                      }
                  }
              }
          }
      });

      //login check and open modal
      
      if (typeof($needLogIn) === "undefined") {
        
      } else {

        if($needLogIn){
          $('#loginModal').modal('show');
        }

      }
    }
  },

  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $('.home').stellar();

      // //jQuery to collapse the navbar on scroll
      // $(".navbar-fixed-top").removeClass("top-nav-collapse");
 
      // $(window).scroll(function() {
 
      //     if ($(".navbar").offset().top > 50) {
      //         $(".navbar-fixed-top").addClass("top-nav-collapse");
      //     } else {
      //         $(".navbar-fixed-top").removeClass("top-nav-collapse");
      //     }
      // });



      

    }
  },



  // About us page, note the change from about-us to about_us.
  single_product: {
    init: function() {
      
      // init
      var initProductForm = function(){
          showProduct();
          // makeProductCarousel();
      };

      var makeProductCarousel = function(){
        var owlProduct = $(".product-carousel");
        owlProduct.owlCarousel({
          items:1,
          // loop:false,
          animateIn:false,
          animateOut:false,
          mouseDrag:true,
          touchDrag:false,
          autoHeight : false,
          center:false,
          margin:0,
          URLhashListener:true,
          startPosition: 'URLHash',
          dots:false
        });

        owlProduct.on('translated.owl.carousel', function(event) {

          if(event.item.index === 0){
            showProduct();
          } else if(event.item.index === 1){
            showDrop();
          }

          $('body,html').animate({ scrollTop: 0 }, 100);
          return false;

        });

      };



      var showProduct = function(){
        // alert("aaaaaa");
        $('#progress-title-product').show();
        $('#progress-title-drop').hide();
        $(location).attr('href', '#product-price');
      };

      var showDrop = function(){
        // alert("bbbbbbb");
        $('#progress-title-product').hide();
        $('#progress-title-drop').show();
      };

      var selectProduct = function(){
        $(location).attr('href', '#drop');
      };

      $('#product-next').click(selectProduct);


      initProductForm();

    }
  },

  moncompte: {
    init: function() {

      // Show only in mordal
      $('#login-close-botton').hide();
      // $('#login-close-botton-home').show();
    

    }
  },



  // type speed area select
  commander: {
    init: function() {

      // init
      var initOrderForm = function(){

          $(location).attr('href', '#type');

          var sType;
          var sSpeed;
          var sArea;

          showType();
          makeOrderCarousel();
          adjustHeight();

      };

      // Adjust Select Botton
      var adjustHeight = function(){
        $('.btn-order').matchHeight();
      };

      // Carousel
      var makeOrderCarousel = function(){

        var owlOrder = $(".owl-carousel");
        owlOrder.owlCarousel({
          items:1,
          // loop:false,
          animateIn:false,
          animateOut:false,
          mouseDrag:false,
          touchDrag:false,
          autoHeight : false,
          center:false,
          margin:0,
          URLhashListener:true,
          startPosition: 'URLHash',
          dots:false
        });

        owlOrder.on('translated.owl.carousel', function(event) {

          if(event.item.index === 0){
            showType();
          } else if(event.item.index === 1){
            showArea();
          } else if(event.item.index === 2){
            showSpeed();
          }

          $('body,html').animate({ scrollTop: 0 }, 100);
          return false;
        });

      };

      var changeTitleOrder = function(tName){

        // alert(cLang);
        if( cLang === "en"){
          if( tName === "type"){
            $('#progress-title').html("SELECT YOUR BAGGAGE TYPE");
          } else if ( tName === "area" ){
            $('#progress-title').html("SELECT DELIVERY AREA");
          } else if ( tName === "speed" ){
            $('#progress-title').html("SELECT DELIVERY SPEED");
          }
        } else if( cLang === "fr"){
          if( tName === "type"){
            $('#progress-title').html("SELECTIONNEZ VOTRE TYPE DE BAGAGES");
          } else if ( tName === "area" ){
            $('#progress-title').html("SELECTIONNEZ DELIVERY AREA");
          } else if ( tName === "speed" ){
            $('#progress-title').html("SELECTIONNEZ DELIVERY SPEED");
          }
        } else if( cLang === "ja"){
          if( tName === "type"){
            $('#progress-title').html("お荷物のタイプを選択してください");
          } else if ( tName === "area" ){
            $('#progress-title').html("配達エリアを選択してください");
          } else if ( tName === "speed" ){
            $('#progress-title').html("配達スピードを選択してください");
          }
        }
      };


      var showType = function(){
        resetSelect("#type-select");

        // changeTitleOrder('type');

        // $('#progressType').addClass('active');
        // $('#progressArea').removeClass('active');
        // $('#progressSpeed').removeClass('active');
        refreshOwl();
      };

      var showArea = function(){
        resetSelect("#area-select");
        // changeTitleOrder('area');
        // $('#progressType').removeClass('active');
        // $('#progressArea').addClass('active');
        // $('#progressSpeed').removeClass('active');
        refreshOwl();
      };

      var showSpeed = function(){
        resetSelect("#speed-select");
        // changeTitleOrder('speed');
        // $('#progressType').removeClass('active');
        // $('#progressArea').removeClass('active');
        // $('#progressSpeed').addClass('active');
        refreshOwl();
      };

      // Type section
      var selectType = function(){
        sType = $(this).val();
        $(location).attr('href', '#area');
      };

      // Area section
      var selectArea = function(){
        sArea = $(this).val();
        $(location).attr('href', '#speed');
      };

      // Speed section
      var selectSpeed = function(){
        sSpeed = $(this).val();
        selectProduct();
      };


      var resetSelect = function(objName){
        var dName = objName + " button";
        for(var i = 0 ; i < $(dName).length ; i++){
          if($(dName).eq(i).hasClass('active')){
            $(dName).eq(i).removeClass('active');
          }
        }
      };

      refreshOwl = function(owlOrder){
        // alert("tetsetset");
        $("html,body").animate({scrollTop:0},'fast');
        return false;
      };



      var selectProduct = function(){
        var langD ;

        // if(cLang === 'fr'){
        //   langD = '/';
        // } else if (cLang === 'en'){
        //   langD = '/en/';
        // } else if (cLang === 'ja'){
        //   langD = '/ja/';
        // }

        if(cLang === 'en'){
          langD = '/';
        } else if (cLang === 'fr'){
          langD = '/fr/';
        } else if (cLang === 'ja'){
          langD = '/ja/';
        }


        $(location).attr('href', langD + 'shop/' + sType + '-' + sArea + '-' + sSpeed + '/');
      };



      initOrderForm();


      $('#type-select .btn-type').click(selectType);
      $('#speed-select .btn-speed').click(selectSpeed);
      $('#area-select .btn-area').click(selectArea);
  

    }
  },

  commande: {

  },

  
  checkout: {
    init: function() {

      $('.checkout').stellar();
      
      toggleLogin = function(){
        $('#login-checkout').toggle();
      };

      // 
      var smoothScroll = function(){
        $('a[href^=#]').click(function() {
          var speed = 400;
          var href= $(this).attr("href");
          var target = $(href === "#" || href === "" ? 'html' : href);
          var offset = $(".navbar").height();
          var position = target.offset().top - offset;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
       });
      };

      // Carousel
      var makeCheckoutCarousel = function(){
        $owl = $(".checkout-carousel").owlCarousel({
          items:1,
          mouseDrag:true,
          touchDrag:true,
          autoHeight : true,
          center:false,
          margin:0,
          URLhashListener:true,
          startPosition: 'URLHash',
          dots:false
        });
        $owl.on('translated.owl.carousel', function(event) {
          refreshOwl($owl);
        });
      };

      var backCheckoutCarousel = function(){
        $(".checkout-carousel").trigger('prev.owl.carousel');
      };

      // cart form validation
      var initCheckoutValidation = function(){
        $('#checkout').bootstrapValidator({
          message:'This value is not valid',
          container:'tooltip',
          feedbackIcons:{
            valid:'glyphicon glyphicon-ok',
            invalid:'glyphicon glyphicon-remove',
            validating:'glyphicon glyphicon-refresh'
          },
          fields:{
            'billing_first_name':{validators:{notEmpty:{message:'The First name is required'}}},
            'billing_last_name':{validators:{notEmpty:{message:'The Last name is required'}}},
            'billing_company':{validators:{notEmpty:{enabled:false}}},
            'billing_address_1':{validators:{notEmpty:{message:'The adress is required'}}},
            'billing_address_2':{validators:{notEmpty:{enabled:false}}},
            'billing_email':{validators:{notEmpty:{message:'The e-mail is required'},emailAddress:{message:'The value is not a valid email address'}}},
            'billing_phone':{validators:{notEmpty:{enabled:false}}},
            'account_password':{validators:{notEmpty:{message:'The password is required'}}},
            'shipping_company':{validators:{notEmpty:{enabled:false}}},
            'shipping_first_name':{validators:{notEmpty:{message: 'The First name is required'}}},
            'shipping_last_name':{validators:{notEmpty:{enabled:false}}},
            'shipping_address_1': {validators:{notEmpty:{message:'The adress is required'}}},
            'shipping_address_2':{validators:{notEmpty:{enabled:false}}}
          }
        });
      };

      var resetSelect = function(bbb){
        var aaa = bbb + " button";
        for(var i = 0 ; i < $(aaa).length ; i++){
          if($(aaa).eq(i).hasClass('active')){
            $(aaa).eq(i).removeClass('active');
          }
        }
      };

      var checkoutGotoBilling = function(){
         $(location).attr('href', '#checkout-billing');
         refreshOwl();
      };

      var checkoutGotoPickup = function(){
         $(location).attr('href', '#checkout-pickup');
         refreshOwl();
      };

      var checkoutGotoShipping = function(){
         $(location).attr('href', '#checkout-shipping');
         refreshOwl();
      };

      var checkoutGotoPayment = function(){
        // alert("hello");
        $(location).attr('href', '#checkout-payment');
        refreshOwl();
      };

      var checkoutGotoShippingNoCheck = function(){
         $('#pickup-from-different-address-checkbox').prop('checked', false);
         $(location).attr('href', '#checkout-shipping');
         refreshOwl();
      };

      var checkoutGotoPaymentNoCheck = function(){
         $('#ship-to-different-address-checkbox').prop('checked', false);
         $(location).attr('href', '#checkout-payment');
         refreshOwl();
      };

      var checkoutGotoMemo = function(){
        alert(this);
        // $(location).attr('href', '#checkout-memo');
        refreshOwl();
      };

      var toggleDifferentPickupAddress = function(){
        if($('#pickup-from-different-address-checkbox').prop('checked')){
          $('#pickup-from-different-address-checkbox').prop('checked', false);
        } else {
          $('#pickup-from-different-address-checkbox').prop('checked', true);
        }
        // alert($('#pickup-to-different-address-checkbox').prop('checked'));

        togglePickupAddressForm();
        pickupValid();
        clearPickupForm();
      };

      var toggleDifferentShippingAddress = function(){
        if($('#ship-to-different-address-checkbox').prop('checked')){
          $('#ship-to-different-address-checkbox').prop('checked', false);
        } else {
          $('#ship-to-different-address-checkbox').prop('checked', true);
        }
        // alert($('#ship-to-different-address-checkbox').prop('checked'));

        toggleShippingAddressForm();
        // shippingValid();
        clearShippingForm();
      };

      var togglePickupAddressForm = function(){
        $( '.pickup_select' ).hide();
        $( '.pickup_address' ).show();
        $owl.trigger('next.owl.carousel', [1]);
        $owl.trigger('prev.owl.carousel', [1]);
        $( '#pickup-from-same-address-link' ).removeClass('hide');
        $('.woocommerce').hide().show(1);
        refreshOwl();

      };

      var toggleShippingAddressForm = function(){
        $( '.shipping_select' ).hide();
        $( '.shipping_address' ).show();
        $( '#shipping-to-same-address-link' ).removeClass('hide');
        $owl.trigger('next.owl.carousel', [1]);
        $owl.trigger('prev.owl.carousel', [1]);
        $('.woocommerce').hide().show(1);
        refreshOwl();
      };

      var clearPickupForm = function(){
        $( '#pickup_company' ).val("");
        $( '#pickup_first_name' ).val("");
        $( '#pickup_last_name' ).val("");
        $( '#pickup_address_1' ).val("");
        $( '#pickup_address_2' ).val("");
      };

      var clearShippingForm = function(){
        $( '#shipping_company' ).val("");
        $( '#shipping_first_name' ).val("");
        $( '#shipping_last_name' ).val("");
        $( '#shipping_address_1' ).val("");
        $( '#shipping_address_2' ).val("");
      };

      var selectPaymentCod = function(){
        $( '#payment_method_cod' ).prop('checked', true);
      };
      var selectPaymentCheque = function(){
        $( '#payment_method_cheque' ).prop('checked', true);
      };
      var selectPaymentBacs = function(){
        $( '#payment_method_bacs' ).prop('checked', true);
      };
      var selectPaymentPaypal = function(){
        $( '#payment_method_paypal' ).prop('checked', true);
      };

      var billingValid = function(){
        if( $('#billing-next-btn').attr('disabled') === 'disabled' && $('#billing_first_name_field').hasClass('has-success') &&$('#billing_last_name_field').hasClass('has-success') && $('#billing_address_1_field').hasClass('has-success') && $('#billing_email_field').hasClass('has-success') && $('#account_password_field').hasClass('has-success') ){
          $('#billing-next-btn').removeAttr('disabled');
        }
      };

      var pickupValid = function(){
        if( $('#pickup-next-btn').attr('disabled') === 'disabled' && $('#shipping_pickup_first_name_field').hasClass('has-success') && $('#shipping_pickup_address_1_field').hasClass('has-success') ){
          $('#pickup-next-btn').removeAttr('disabled');
        }
      };

      var shippingValid = function(){
        if( $('#shipping-next-btn').attr('disabled') === 'disabled' && $('#shipping_first_name_field').hasClass('has-success') && $('#shipping_address_1_field').hasClass('has-success') ){
          $('#shipping-next-btn').removeAttr('disabled');
        }
      };

      // Add class to input text
      var addInputClass = function(){
        $(".dropform .input-text").addClass("form-control input-drop");
      };

      refreshOwl = function(owl){
        $("html,body").animate({scrollTop:0},'fast');
        return false;
      };


      var initCheckoutForm = function(){

          $(location).attr('href', '#checkout-billing');

          // alert('$loggedIn');
            // var loggedIn = printf('<?php echo is_user_logged_in(); ?>');
          // addInputClass();
          makeCheckoutCarousel();
          initCheckoutValidation();
          smoothScroll();

      };

      initCheckoutForm();




      //test
      $('#test-btn').click(checkoutGotoMemo);
      $('.btn-back').click(backCheckoutCarousel);

      // facture
      $('#billing-next-btn').click(checkoutGotoPickup);
      $('.woocommerce-billing-fields input').keyup(billingValid);

      // pickup
      $('#pickup-next-btn').click(checkoutGotoShipping);
      $('#pickup-from-different-address-button').click(toggleDifferentPickupAddress);
      $('#pickup-from-same-address-button').click(checkoutGotoShipping);
      $('#pickup-from-same-address-link').click(checkoutGotoShippingNoCheck);
      $('#pickup-back-btn').click(checkoutGotoBilling);
      $('.woocommerce-pickup-fields input').keyup(pickupValid);

      // Shipping
      $('#shipping-next-btn').click(checkoutGotoPayment);
      $('#ship-to-different-address-button').click(toggleDifferentShippingAddress);
      $('#ship-to-same-address-button').click(checkoutGotoPayment);
      $('#shipping-to-same-address-link').click(checkoutGotoPaymentNoCheck);
      $('#shipping-back-btn').click(checkoutGotoPickup);
      $('.woocommerce-shipping-fields input').keyup(shippingValid);

      //payment
      $('#payment-btn-cod').click(selectPaymentCod);
      $('#payment-btn-cheque').click(selectPaymentCheque);
      $('#payment-btn-bacs').click(selectPaymentBacs);
      $('#payment-btn-paypal').click(selectPaymentPaypal);
      // $('#payment-block .btn-checkout').click(checkoutGotoMemo);
      // $('.payment-next-btn').click(checkoutGotoMemo);
      $('#payment-back-btn').click(checkoutGotoPickup);

      // memo
      $('#memo-back-btn').click(checkoutGotoPayment);

    }
  }

};


  Roots.commande = Roots.checkout ;
  Roots.my_account = Roots.moncompte ;

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var namespace = Roots;
      funcname = (funcname === undefined) ? 'init' : funcname;
      if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      UTIL.fire('common');
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
        UTIL.fire(classnm);
      });
    }
  };

  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.


