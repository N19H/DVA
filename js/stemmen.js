// toch jQuery voor de compatibiliteit

// document ready
$(function() {
	// Events voor de twee losse knoppen
	$(".deKnoppen a").click(function(event){
    	event.preventDefault();
		buttonGeklikt(event);
	});
	
	// De plaatjes met naam draggable maken
	var $draggable = $('li').draggabilly({ })
	
	// Iets doen als er verder wordt gedragged
	$draggable.on( 'dragMove', function(event, pointer, moveVector) {
		draggen(event, moveVector);
	});
	
	// Iets doen als er gestopt wordt met draggen
	$draggable.on( 'dragEnd', function(event) {
		stopDraggen(event);
	});
});

function buttonGeklikt(event) {
	// Het actuele dier opzoeken
	// Het laatste dier in de lijst dat nog niet de class ja of nee heeft
	var hetDier = $("li").not(".ja, .nee").last();
	// De keuze bepalen
	// De innerText van de a
	var keuze = event.target.innerText;
	// De gezamelijke afhandelfunctie
	keuzeGemaakt(hetDier, keuze);
}

function draggen(event, moveVector) {
	// Tussen -10 en 10 pixels de classes richtingja of richtingnee weghalen
	if (moveVector.x <= 10 && moveVector.x >= -10) {
		event.target.classList.remove('richtingja');
		event.target.classList.remove('richtingnee');	
	} else if (moveVector.x > 10) {
		// Vanaf 10 pixel beweging een richtingja class toevoegen zodat er met css feedback gegeven kan worden
		event.target.classList.add('richtingja');
		// Bij 100 pixels wordt de keuze bepaald
		if (moveVector.x > 100) {
			// De gezamelijke afhandelfunctie
			keuzeGemaakt($(event.target), "ja");
		} 
	} else if (moveVector.x < -10) {
		// Vanaf 10 pixel beweging een richtingnee class toevoegen zodat er met css feedback gegeven kan worden
		event.target.classList.add('richtingnee');
		// Bij 100 pixels wordt de keuze bepaald
		if (moveVector.x < -100) {
			// De gezamelijke afhandelfunctie
			keuzeGemaakt($(event.target), "nee");
		} 
	}
}

function stopDraggen(event) {
		// Bij stoppen met draggen de tijdelijke classes weghalen
		event.target.classList.remove('richtingja');
		event.target.classList.remove('richtingnee');
		// En terug naar het startpunt - zo wordt ook horizontaal scrollen voorkomen
		// Nb. Geen check of er een keuze gemaakt is bij meer dan 100 pixels
		// Dat is niet heel fraai maar geen probleem omdat het element dan wordt gehided
		$(event.target).animate({left: "0", top: "0"}, 150);
}

function keuzeGemaakt(hetDier, keuze) {
    // check of het dier niet al ja of nee is om dubbelklikken/swipen tijdens animatie te voorkomen
    if (!hetDier.hasClass("ja") && !hetDier.hasClass("nee") ) { //jquery
        
		// De goede radiobutton van het dier zoeken en checken
		if (keuze == "ja") {
			hetDier.find("input:last-of-type").prop('checked', true);
		} else {
			hetDier.find("input:first-of-type").prop('checked', true);
		}
	
		// voeg class ja of nee toe aan het dier om de afbeelding-animatie te triggeren en dan te verbergen
        hetDier.addClass(keuze).fadeOut(500);

        // check of het dier het eerste dier is - dan kan het formulier verstuurt worden
		if (hetDier.is(':first-child')) { 
            // eerst een timeout om te wachten tot de animatie klaar is
            setTimeout(function(){
                // dan het formulier versturen
                // wellicht eerst even progress indicator tonen - even bekijken hoe snel het opslaan in de database gaat
				// Dit kan ook al die tijd al onder de stapel aanwezig zijn
                document.deDieren.submit();
            }, 750);
        }
    }
}