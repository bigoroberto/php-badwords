<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <?php
   
   //creo la mia variabile contente il testo
   $text = "Mi chiamo Massimo Decimo Meridio, comandante dell’esercito del Nord, generale delle legioni Felix, servo leale dell’unico vero imperatore Marco Aurelio. Padre di un figlio assassinato, marito di una moglie uccisa… e avrò la mia vendetta… in questa vita o nell’altra";

   #assegno alla variabile il valore che prenderò tramite il get, URL con parola chiave 'parola'
   $parola = $_GET['parola'];

   /* assegno alla variabile newtext il risultato dell str_replace */
   $newText = str_replace("$parola", "***", $text);
   ?>

    <!-- stampo la variabile che mi contiente il testo -->
   <h3><?php echo $text?></h3>

   <!-- calcolo la lunghezza della variabile -->
   <h3>Questo paragrafo è lungo: <?php echo strlen($text); ?></h3>

   <!-- stampo il risultato del nuovo testo -->
   <h3><?php echo $newText?></h3>

   <!-- calcolo la lunghezza del nuovo testo -->
   <h3>Questo paragrafo è lungo: <?php echo strlen($newText); ?></h3>

</body>
</html>