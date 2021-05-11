$(document).ready(function() {
   
        $('.nov-link').on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 600, 'linear');
        });

        window.setInterval(function(){
            $('#presentacion').css('background-image', '../img/nip.jpg');
          }, 5000);


});