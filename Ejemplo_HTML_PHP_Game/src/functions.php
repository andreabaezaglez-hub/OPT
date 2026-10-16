<?php

function dump($var){
    echo '<pre>'.print_r($var,1).'</pre>';
}
function getBoardMarkup($board_data){
    $output = '<div class="board-container">';
    foreach($board_data as $fila){
        foreach ($fila as $tile_value){
            $output .= '<div class="tile '.$tile_value.'-tile"></div>';
        }
    }
            
    $output .= '</div>';

    return $output;
}


function getCSVContentInArray(String $rutaCSV, $definir_clave)
{
  $contenidoArchivo = trim(file_get_contents($rutaCSV));
  $lineasCSV = explode("\n", $contenidoArchivo);


  $encabezadoCadena = reset($lineasCSV);
  $encabezadoArray = explode(',', $encabezadoCadena);
  $encabezadoArrayNuevo = array_map('trim', $encabezadoArray);

  $coches = [];

  foreach ($lineasCSV as $clave => $linea) {
    if ($clave != 0) {
      $camposLinea = explode(',', $linea);

      $coche = array_combine($encabezadoArrayNuevo, $camposLinea);
      $coche = array_map('trim', $coche);

      $coches[$coche[$definir_clave]] = $coche;
    }
  }
  return $coches;
}


?>