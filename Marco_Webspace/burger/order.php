<?php
  $empfänger ="MichaelCenger@gmail.com";
  $betreff="Burger-Bestellung";


  $kunde_name = $_POST["kunde_name"];
  $kunde_nr=  $_POST['kunde_nr'];
  $kunde_email= $_POST['kunde_email'];
  $zahlmethode = $_POST['zahlmethode'];
  $datum = $_POST['datum'];
  $zeit = $_POST['zeit'];
  $fleisch =  $_POST['fleisch'];
  $brot =  $_POST['brot'];
  $sauce =  $_POST['sauce'];
  $anweisung =  $_POST['spezial'];
  $zutaten="";
  if(isset( $_POST['kaese'])){
    $käse="Ja";
  }else{
    $käse="Nein";
  }

  if(isset( $_POST['zutat'])){
    foreach($_POST['zutat'] as $zutat) {
        $zutaten .=$zutat.=" ";
    }
  }else{
    $zutaten="Ohne Extras";
  }

  $nachricht="Burgerbestellinformation:\nName: $kunde_name\nStudiennummer: $kunde_nr\nE-Mail: $kunde_email\nZahlmethode: $zahlmethode\nDatum: $datum\nZeit: $zeit \nFlesich: $fleisch\nBrot: $brot\nKäse: $käse\nExtras:$zutaten\nSauce: $sauce\nAnweisungen: $anweisung";
  mail($empfänger, $betreff, $nachricht);
  echo("Deine Bestellung wurde erfolgreich abgeschickt");
?>
