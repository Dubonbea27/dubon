<?php
  $mensaje = 'Bienvenido';
  $nombre_usuario = 'Anonimo';
  $numeroVisitante = 20;
  $estado = TRUE;

  echo'impresion con echo <br>';
  echo "$mensaje usuario $nombre_usuario";
  echo "eres el visitante $numeroVisitante";
  echo "tu estado es $estado<br>";
  echo "impresion con print<br>";
  print "$mensaje usuario $nombre_usuario";
  print "eres el visitante $numeroVisitante";
  print "tu estado es $estado<br>";

  echo'$mensaje $nombre_usuario $numeroVisitante $estado';
  echo'<br>';
  print '$mensaje $nombre_usuario $numeroVisitante $estado';
  echo '<br>';
  printf ("%s usuario %s eres el visitante %s tu estado es %s", $mensaje,$nombre_usuario,$numeroVisitante,$estado);