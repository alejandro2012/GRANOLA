<?php
list($_dir,$_trash) = explode("gd_loader",dirname(__FILE__));
define("WORKPATH", str_replace("\\","/",$_dir."") );

list($_dir,$_trash) = explode("granola_diet",dirname(__FILE__));
define("COREPATH", str_replace("\\","/",$_dir."granola_core") );

define("WORKPHPCLASS", WORKPATH."/gd_class");
define("TEMPLATE", WORKPATH."/gd_template");
define("CONFIG", WORKPATH."/gd_config");
define("CACHE", WORKPATH."/gd_cache");
define("COLLECTOR", WORKPATH."/gd_collector");

require_once ( COREPATH.'/smarty/libs/Smarty.class.php');

$arr = parse_ini_file(CONFIG."/granola_diet.conf");

foreach($arr AS $nx => $xn )
        {
    define($nx,$xn);
        }
?>

