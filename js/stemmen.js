// toch jQuery voor de compatibiliteit

// document ready
$(function() {
	// fire event als een radio button verandert
	$("section.knoppen > input").change(function(){
    	keuzeGemaakt($(this));
	});
});

// de functie die wordt aangeroepen als een radiobutton wordt aangeroepen
function keuzeGemaakt(radiobutton) {
    // zoek het dier dat bij de radiobutton hoort
    var hetDier = radiobutton.closest("li"); 
    console.log(hetDier);
    // bepaal of op ja of op nee geklikt is
    var keuze = radiobutton.val(); 

    // check of het dier niet al ja of nee is om dubbelklikken tijdens animatie te voorkomen
    if (!hetDier.hasClass("ja") && !hetDier.hasClass("nee") ) { //jquery
        // voeg class ja of nee toe aan het dier om de afbeelding-animatie te triggeren en dan te verbergen
        hetDier.addClass(keuze).delay(750).fadeOut(1);

        // check of het dier het eerste dier is - dan kan het formulier verstuurt worden
        if (hetDier.is(':first-child')) { 
            // eerst een timeout om te wachten tot de animatie klaar is
            setTimeout(function(){
                // dan het formulier versturen
                // wellicht eerst even progress indicator tonen - even bekijken hoe snel het opslaan in de database gaat
                document.deDieren.submit();
            }, 750);
        }
    }
}



$(document).ready(function(){

    $(".buddy").on("swiperight",function(){
      $(this).addClass('rotate-left').delay(700).fadeOut(1);
      $('.buddy').find('.status').remove();

      $(this).append('<div class="status like">Like!</div>');      
      if ( $(this).is(':last-child') ) {
        $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
       } else {
          $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
       }
    });  

   $(".buddy").on("swipeleft",function(){
    $(this).addClass('rotate-right').delay(700).fadeOut(1);
    $('.buddy').find('.status').remove();
    $(this).append('<div class="status dislike">Dislike!</div>');

    if ( $(this).is(':last-child') ) {
     $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
      alert('Na-na!');
     } else {
        $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
    } 
  });

});