<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
 	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <title>De Dieren van Artis</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stemmen.css" rel="stylesheet">
</head>

<body>
	<header>
    	<h1>De Dieren van Artis</h1>
  	</header>

   <main>
    <p>Zou je in Artis stoppen voor het volgende dier?</p>
    <form name="deDieren" id="deDieren" action="results.php" method="post" enctype="multipart/form-data">

    <input name="cluster" type="hidden" value="red">
    <input name="email" type="hidden" value="m.s.t.hooft@hva.nl">
	
    
    
    <ul>
        <li>
            <section class="plaatje">
           		<img src="dierenfotos/maki.jpg" alt="maki">
                <h2>Stokstaartje</h2>
         	</section>

            <section class="knoppen">
                <input name="dier[108]" id="dier108nee" type="radio" value="nee"><label for="dier108nee">Nee</label>
                <input name="dier[108]" id="dier108ja" type="radio" value="ja"><label for="dier108ja">Ja</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            	<img src="dierenfotos/pinguin.jpg"/>
                <h2>Chimpansee</h2>
            </section>

            <section class="knoppen">
                <input name="dier[24]" id="dier24nee" type="radio" value="nee"><label for="dier24nee">Nee</label>
                <input name="dier[24]" id="dier24ja" type="radio" value="ja"><label for="dier24ja">Ja</label>
        </section>
        </li>

        <li>
            <section class="plaatje">
            	<img src="dierenfotos/stokstaart.jpg"/>
                <h2>Gnoe</h2>
            </section>

            <section class="knoppen">
                <input name="dier[36]" id="dier36nee" type="radio" value="nee"><label for="dier36nee">Nee</label>
                <input name="dier[36]" id="dier36ja" type="radio" value="ja"><label for="dier36ja">Ja</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            	<img src="dierenfotos/wasbeer.jpg"/>
                <h2>Nijlalligator</h2>
            </section>

             <section class="knoppen">
                <input name="dier[17]" id="dier17nee" type="radio" value="nee"><label for="dier17nee">Nee</label>
                <input name="dier[17]" id="dier17ja" type="radio" value="ja"><label for="dier17ja">Ja</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            	<img src="dierenfotos/wolf.jpg"/>
                <h2>Bruine wasbeer</h2>
            </section>

            <section class="knoppen">
                <input name="dier[12]" id="dier12nee" type="radio" value="nee"><label for="dier12nee">Nee</label>
                <input name="dier[12]" id="dier12ja" type="radio" value="ja"><label for="dier12ja">Ja</label>
            </section>
        </li>
    </ul>

    <input name="versturen" type="submit" value="Versturen">
    
    <section class="deKnoppen">
    	<a href="nee">nee</a>
        <a href="ja">ja</a>
    </section>
    
    </form>
    </main>

    <script src="http://code.jquery.com/jquery.min.js"></script>
	
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/draggabilly/1.2.0/draggabilly.pkgd.min.js"></script>
    
	
	<script src="js/stemmen.js"></script>
</body>
</html>
