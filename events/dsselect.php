<?php
/**
* PHP Source File
* @author	Alyx Association <info@alyx.it>
* @version 2.0.0
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
*/

require_once("../require.inc.php");
$system = new ClsSystem(true);
$xml = new ClsXML("dsselect.xml");
$event = new ClsEvent($xml);
$event->managerRequest();

function html_load()
{
	global $event;
	$code = "
		function custom_fnz(obj)
		{
			alert('Valore: ' + obj.value);
		}
		SYSTEMEVENT.addAfterCustomFunction('DSSELECT', 'change', 'custom_fnz');
		";
	$event->setCodeJs($code);
}
?>