<?php
/**
 * Hooks pour inclure des ressources CSS/JS personnalisées
 */

/**
 * Hook exécuté après l'ouverture du corps de la page
 */
if (!function_exists('printHeader')) {
    function printHeader() {
        global $conf;
       
        // Vérifier qu'on utilise le thème moderne
        if ($conf->theme == 'moderne') {
            echo '<link rel="stylesheet" type="text/css" href="'.DOL_URL_ROOT.'/theme/moderne/custom.css?'.filemtime(DOL_DOCUMENT_ROOT.'/theme/moderne/custom.css').'">';
        }
    }
}
?>