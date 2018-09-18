import Swiper from 'swiper';

jQuery(document).ready(function( $ ) {



  var mySwiperTop = new Swiper ('.gallery_top', {
        direction: 'horizontal',
        effect: 'fade',
        autoplay: {
          delay: 2000,
        },
        speed: 1500,
        pagination: {
          clickable: true,
          el: '.gallery_top .swiper-pagination',
          type: 'bullets',
        },
        autoplay: {
          disableOnInteraction: true
        },
        loop: true
    });


  var mySwiperOfSlide = new Swiper ('.off-slide', {
       direction: 'horizontal',
       speed: 1300,
       spaceBetween: 45,
       autoplay: {
         delay: 800,
       },
       effect: 'slide',
       loop: true,
       slidesPerView: 1,
        });

        $("#lang").change(function() {
        $(".lang").html($("#lang option:selected").text());
        });
        $(".lang").html($("#lang option:selected").text());


         $('body').photobox('.photobox');

         cookie();

        var offset = 150;
        var $back_to_top = $('.cd-top');
       $(window).scroll(function(){
           if( $(this).scrollTop() > offset ){
             $back_to_top.addClass('cd-is-visible');
             $('body').addClass('scroll');
           } else {
             $back_to_top.removeClass('cd-is-visible cd-fade-out');
             $('body').removeClass('scroll');
           }
       });

        $('.filter').on( "click", function() {
        var filterValue = $(this).attr('data-filter');
        $(".filter").removeClass('active');
        $(this).addClass('active');
        $( ".gallery_isotope li" ).removeClass('hide');

        $( ".gallery_isotope li" ).each(function() {
              var filterClass =  $(this).attr('class');
                if(filterClass != filterValue) $(this).addClass('hide');
                if(filterValue == '*') $( ".gallery_isotope li" ).removeClass('hide');
            });
        });

        $( "#datepicker" ).datepicker({
           dateFormat:"dd/mm/yy",
           buttonImageOnly: true,
           altField: "#alternate",
           altFormat: "dd-mm-yy",
           minDate: new Date(),

           onSelect: function(dateText){

             var date = $("#datepicker").datepicker("getDate");

             $(".arrivo .gg").html($.datepicker.formatDate("dd", date));
             $(".arrivo .mm").html($.datepicker.formatDate("M", date));
             $(".arrivo .aa").html($.datepicker.formatDate("y", date));


             if($('#datepicker').datepicker('getDate') >= $('#datepicker_partenza').datepicker('getDate')){

               var nextDayDate = $('#datepicker').datepicker('getDate', '+1d');
               nextDayDate.setDate(nextDayDate.getDate());

               var nextDayDatep1 = $('#datepicker').datepicker('getDate', '+1d');
               nextDayDatep1.setDate(nextDayDatep1.getDate() + 1);

               $("#datepicker_partenza").datepicker( "option", "minDate", nextDayDatep1);
               $('#datepicker_partenza').datepicker('setDate', nextDayDate);

               var date_1 = $("#datepicker_partenza").datepicker("getDate");
               $(".partenza .gg").html($.datepicker.formatDate("dd", date_1));
               $(".partenza .mm").html($.datepicker.formatDate("M", date_1));
               $(".partenza .aa").html($.datepicker.formatDate("y", date_1));

             } else {
               var nextDayDate = $('#datepicker').datepicker('getDate', '+1d');
               nextDayDate.setDate(nextDayDate.getDate() + 1);
               $("#datepicker_partenza").datepicker( "option", "minDate", nextDayDate);
             }

              prenota();
           }
         }).datepicker( "setDate", "d" );

         $("#datepicker_partenza").datepicker({
           dateFormat:"dd/mm/yy",
           buttonImageOnly: true,
           altField: "#alternate_partenza",
           altFormat: "dd-mm-yy",
           minDate: new Date(),

           onSelect: function(dateText) {
             var date = $("#datepicker_partenza").datepicker("getDate");
             $(".partenza .gg").html($.datepicker.formatDate("dd", date));
             $(".partenza .mm").html($.datepicker.formatDate("M", date));
             $(".partenza .aa").html($.datepicker.formatDate("y", date));

                prenota();
           }

         }).datepicker( "setDate", "+1d" );

         var date = $("#datepicker").datepicker("getDate");
         var date_1 = $("#datepicker_partenza").datepicker("getDate");

         $(".arrivo .gg").html($.datepicker.formatDate("dd", date));
         $(".arrivo .mm").html($.datepicker.formatDate("M", date));
         $(".arrivo .aa").html($.datepicker.formatDate("y", date));

         $(".partenza .gg").html($.datepicker.formatDate("dd", date_1));
         $(".partenza .mm").html($.datepicker.formatDate("M", date_1));
         $(".partenza .aa").html($.datepicker.formatDate("y", date_1));

              prenota();

});


  function prenota(){
    var split_arrivo = $("#datepicker").val();

     split_arrivo = split_arrivo.split('/');
     var aa_arrivo = split_arrivo[2];
     var mm_arrivo = split_arrivo[1];
     var gg_arrivo = split_arrivo[0];

     $('[name=aa]').val(aa_arrivo);
     $('[name=mm]').val(mm_arrivo);
     $('[name=gg]').val(gg_arrivo);


     var split_partenza = $("#datepicker_partenza").val();
      split_partenza = split_partenza.split('/');
      var aa_partenza = split_partenza[2];
      var mm_partenza = split_partenza[1];
      var gg_partenza = split_partenza[0];


    var fromdate = new Date( aa_arrivo, mm_arrivo-1, gg_arrivo);

     var todate = new Date( aa_partenza, mm_partenza-1, gg_partenza);
     var giorni_differenza = (todate-fromdate)/86400000;
     giorni_differenza = Math.round(giorni_differenza);

     $('[name=notti_1]').val(giorni_differenza);
  }

function video(video){

    $( "body" ).append( "<div class=\"cont_video\"><i class=\"fa fa-window-close\" aria-hidden=\"true\"></i><video controls=\"controls\" width=\"auto\" height=\"50%\" autoplay><source src=\""+video+"\" type=\"video/mp4\" />Your browser does not support the video tag.</video></div>" );

    $(".fa-window-close").click(function(){
      $(".cont_video").remove();
    });
}

function cookie(){

switch($('#lingua').val()){
  case 'ita':
    var testo = 'Questo sito utilizza cookie tecnici e di profilazione di terze parti. Per ulteriori informazioni o per negare il consenso, leggi la informativa estesa. Proseguendo con la navigazione acconsenti a usare i cookie.';
      var label = 'Accetta e chiudi';
  break;

  default:
    var testo = 'This site uses technical cookies and third party profiling. To learn more or opt out, read the complete cookie policy statement. By continuing to use this site, we assume you are happy with it';

    var label = 'Accetta e chiudi';
  break;
}
  $.cookieBar({
    message: testo,
    acceptText: label,
    policyButton: true,
    policyText: 'Privacy Policy',
    policyURL: $('#linkcookie').val(),
    expireDays: 30
  });
}
