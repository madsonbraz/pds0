<?php
include_once("config.php");

// include and create object
include(PHPGRID_LIBPATH."inc/jqgrid_dist.php");

$db_conf = array(
    "type"      => PHPGRID_DBTYPE,
    "server"    => PHPGRID_DBHOST,
    "user"      => PHPGRID_DBUSER,
    "password"  => PHPGRID_DBPASS,
    "database"  => PHPGRID_DBNAME
);
$g = new jqgrid($db_conf);
// set few params
$opt["caption"] = "Programação de Saída";
//$g->set_options($opt);

// set database table for CRUD operations
$g->table = "pds_programacao";

// render grid and get html/js output
$out = $g->render("list1");

echo $out;
?>
<div>
	<?php echo $out?>
	</div>