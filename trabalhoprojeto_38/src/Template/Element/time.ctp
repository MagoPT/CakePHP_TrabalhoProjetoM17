<?php
date_default_timezone_set("UTC"); //Local da hora padrão
echo __('Dia: ').date('d/m'); //Dia e ano
echo '<br>';
echo __('Hora: ').date('H:i'); //Horas e minutos

?>
