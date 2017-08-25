<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_citis
**/

define('_JEXEC', 1);
define('JPATH_BASE', dirname(__FILE__) . '/../..' );
define('DS', DIRECTORY_SEPARATOR);
require_once(JPATH_BASE.DS.'includes'.DS.'defines.php');
require_once(JPATH_BASE.DS.'includes'.DS.'framework.php');
JFactory::getApplication('site')->initialise();

if(!isset($_REQUEST['namecity'])) {
require JModuleHelper::getLayoutPath('mod_citis');
}
else {
require_once dirname(__FILE__) . '/helper.php';
$id_city = modCitisHelper::getTitle($_REQUEST['namecity']);
echo $id_city;
}

