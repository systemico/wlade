<?php
require __DIR__ . '/../vendor/autoload.php';
use LanguageDetection\Language;

class Idioma{
    /**
    *
    **/
    public function detect($url){
      //Identificamos los idiomas asignados al sitio web para esto leemos un JSON
      //http(s)://url/languages.json
      ///--- ESCRIBIR LA FUNCIÓN
      //Leemos el contenido base del sitio web para dejar el texto plano.
      $pagina = file_get_contents($url);
      $pagina =strip_tags($pagina);
      //Analizamos el idioma
      $ld = new Language;
      return $ld->detect($pagina)->whitelist('es', 'en', 'ru')->bestResults()->__toString();
    }
}//Fin de la clase
?>
