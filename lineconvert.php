<?php

/**
 * Define the folder(note the ending slash) containing the mediawiki's files.
 *  
 * YOU SHOULD PLACE THEM OUTSIDE THE DOCUMENT ROOT OF YOUR WEB SERVER!!!
 */

define("MEDIAWIKI_PATH", "/opt/Projects/mediawiki-1.26.2/");

/* Include our helper class */
require_once "mediawiki-zhconverter.inc.php";

while (false !== ($line = fgets(STDIN))) {
    echo MediaWikiZhConverter::convert($line, $argv[1]);
}

?>
