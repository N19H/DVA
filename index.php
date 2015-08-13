<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
 <meta name="viewport" content="initial-scale=1">
    <title>De Dieren van Artis</title>
    <link href="stijl/all.css" rel="stylesheet">
    <link href="stijl/stemmen.css" rel="stylesheet">
</head>

<body>
    <header><h1>De Dieren van Artis</h1></header>

   <main>
    <form name="deDieren" id="deDieren" action="results.php" method="post" enctype="multipart/form-data">

    <input name="cluster" type="hidden" value="red">
    <input name="email" type="hidden" value="m.s.t.hooft@hva.nl">

    <ul>
        <li>
            <section class="plaatje">
            <h2>Stokstaartje</h2>
            <img src="vierkant.jpg"/>
            </section>

            <section class="knoppen">
                <input name="dier[108]" id="dier108ja" type="radio" value="ja"><label for="dier108ja">Ja</label>
                <input name="dier[108]" id="dier108nee" type="radio" value="nee"><label for="dier108nee">Nee</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            <h2>Chimpansee</h2>
            <img src="vierkant.jpg"/>
            </section>

            <section class="knoppen">
                <input name="dier[24]" id="dier24ja" type="radio" value="ja"><label for="dier24ja">Ja</label>
                <input name="dier[24]" id="dier24nee" type="radio" value="nee"><label for="dier24nee">Nee</label>
        </section>
        </li>

        <li>
            <section class="plaatje">
            <h2>Gnoe</h2>
            <img src="vierkant.jpg"/>
            </section>

            <section class="knoppen">
                <input name="dier[36]" id="dier36ja" type="radio" value="ja"><label for="dier36ja">Ja</label>
                <input name="dier[36]" id="dier36nee" type="radio" value="nee"><label for="dier36nee">Nee</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            <h2>Nijlalligator</h2>
            <img src="vierkant.jpg"/>
            </section>

             <section class="knoppen">
                <input name="dier[17]" id="dier17ja" type="radio" value="ja"><label for="dier17ja">Ja</label>
                <input name="dier[17]" id="dier17nee" type="radio" value="nee"><label for="dier17nee">Nee</label>
            </section>
        </li>

        <li>
            <section class="plaatje">
            <h2>Bruine wasbeer</h2>
            <img src="vierkant.jpg"/>
            </section>

            <section class="knoppen">
                <input name="dier[12]" id="dier12ja" type="radio" value="ja"><label for="dier12ja">Ja</label>
                <input name="dier[12]" id="dier12nee" type="radio" value="nee"><label for="dier12nee">Nee</label>
            </section>
        </li>
    </ul>

    <input name="versturen" type="submit" value="Versturen">
    </form>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <!--  <script src="scripts/swipe.js"></script> -->
    <script src="scripts/stemmen.js"></script>
</body>
</html>
