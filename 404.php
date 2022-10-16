<!DOCTYPE html>
<html>
<title>404</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- .bild - Bilder automatisch zentrieren. -->
<!-- body - Hintergrund Zeichnen - Auswaehlen indem die Zahl entfernt wird. - Bitte nur eins gleichzeitig auswaehlen. ohne body ist der Hintergrund Schwarz -->
<style>
.bild { display: block; margin: 0 auto; }
body { background-image: linear-gradient(black 33%, red 60%, black 33%);}
body1 { background-color: #8FBC8F;
  background-image: linear-gradient(90deg, purple, blue, cyan, green, yellow, red, black);}
body2 { height: 85vh; background-color: #8FBC8F;
 background-image: 
    linear-gradient(transparent, transparent 30px, white 30px, white 32px), 
    linear-gradient(to right, transparent, transparent 30px, white 30px, white 32px);
 background-repeat: repeat-y, repeat-x; background-size: 100% 32px, 32px 100%;}
body3 { background-image: repeating-radial-gradient( black, black 5px, white 5px, white 10px);  height: 85vh;}
body4 { background-image: repeating-linear-gradient(45deg, white 0%, white 2%, cyan 2%, cyan 4%, white 4%);}
body5 { background-image:linear-gradient( black, white)}
body6 { background-image:linear-gradient(to left, navy, green)}
body7 { background-image:linear-gradient(to bottom left, yellow, red)}
body8 { background-image:linear-gradient(0deg, yellow 5%, orange 70%)}
body9 { background-image:linear-gradient(270deg, blue 5%, pink 80%)}
body10 { background-image:linear-gradient(135deg, olive 20%, seashell 70%)}
body11 { background-image:linear-gradient(90deg, purple, blue, cyan, green, yellow, red, black);}
body12 { background-image:linear-gradient(90deg, orange 27%, yellow 85%)}
body13 { background-color: orange; background-image: linear-gradient(black, red, transparent, black);}
body15 {background:
 repeating-linear-gradient( 50deg, #F7A37B, #F7A37B 1em, #FFDEA8 1em, #FFDEA8 2em, #D0E4B0 2em, #D0E4B0 3em, #7CC5D0 3em, #7CC5D0 4em, #00A2E1 4em, #00A2E1 5em, #0085C8 5em, #0085C8 6em ),
 repeating-linear-gradient( -50deg, #F7A37B, #F7A37B 1em, #FFDEA8 1em, #FFDEA8 2em, #D0E4B0 2em, #D0E4B0 3em, #7CC5D0 3em, #7CC5D0 4em, #00A2E1 4em, #00A2E1 5em, #0085C8 5em, #0085C8 6em ); 
background-blend-mode: multiply;}

body16 {background:
 repeating-radial-gradient( circle, transparent, transparent 3.5em, tomato 3.5em, tomato 4.5em ),
 repeating-radial-gradient( circle, transparent, transparent 3.5em, dodgerblue 3.5em, dodgerblue 4.5em ),
 repeating-radial-gradient( circle, transparent, transparent 2.5em, gold 2.5em, gold 2.75em ), floralwhite;
background-blend-mode: multiply; background-size: 10em 10em; background-position: 0 0, 5em 5em, 10em 5em;}

body17 { background: linear-gradient( cyan, transparent ),
 linear-gradient( -45deg, magenta, transparent ),
 linear-gradient( 45deg, yellow, transparent );
background-blend-mode: multiply;}

body18 {
background:
 repeating-linear-gradient( transparent, transparent 10px, lightcoral 10px, lightcoral 15px, transparent 15px, transparent 20px, lightcoral 15px,
 lightcoral 40px, transparent 40px, transparent 45px, lightcoral 45px, lightcoral 50px, transparent 50px, transparent 80px ),
 repeating-linear-gradient( 90deg, transparent, transparent 10px, lightcoral 10px, lightcoral 15px, transparent 15px, transparent 20px,
 lightcoral 15px, lightcoral 40px, transparent 40px, transparent 45px, lightcoral 45px, lightcoral 50px, transparent 50px, transparent 80px
 ), floralwhite;
background-blend-mode: multiply;}

body19 {
background:
 repeating-radial-gradient( circle at 50% 25%, limegreen, limegreen .5em, transparent 3em, transparent 4em ),
 repeating-radial-gradient( circle at 25% 50%, olivedrab, olivedrab .5em, transparent 2em, transparent 4em ),
 repeating-radial-gradient( circle at 75% 50%, green, green .5em, transparent 2em, transparent 4em ), lightgreen;
background-blend-mode: multiply;}

body20 {
background:
 repeating-linear-gradient( 45deg, transparent, transparent 1em, moccasin 0, moccasin 2em, transparent 0, transparent 3em, powderblue 0,
 powderblue 4em, transparent 0, transparent 5em, lavender 0, lavender 6em, transparent 0, transparent 7em, beige 0, beige 8em ),
 repeating-linear-gradient(-45deg, transparent, transparent 1em, khaki 0, khaki 2em, transparent 0, transparent 3em, beige 0, beige 4em,
 transparent 0, transparent 5em, peachpuff 0, peachpuff 6em ), whitesmoke;
background-blend-mode: multiply;}

body21 {
background:
 radial-gradient( yellow, yellow 50%, transparent 50%, transparent 100% ),
 radial-gradient( cyan, cyan 50%, transparent 50%, transparent 100% ),
 radial-gradient( magenta, magenta 40%, transparent 40%, transparent 100% ), whitesmoke;
background-size: 8em 8em, 6em 6em, 2em 2em;
background-blend-mode: multiply;
background-position: 0 0, -33% -33%, -200% -200%;}
</style>

<body>
<!-- Zeilenumbruch oben -->
<br><br>
<!-- Fehler -->
<img  class="bild" src="./osmt-images/fehler.png" alt="FEHLER" width="20%" height="20%" class="bild" />
<!-- 404 -->
<img  class="bild" src="./osmt-images/6.png" alt="FEHLER" width="60%" height="60%" class="bild" />
<!-- SEITE NICHT GEFUNDEN -->
<img  class="bild" src="./osmt-images/nichtgefunden.png" alt="FEHLER" width="50%" height="20%" class="bild" />
</body>

</html>