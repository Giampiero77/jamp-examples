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
$xml = new ClsXML("not_exist.xml");
$event = new ClsEvent($xml);
$event->managerRequest();

function before_exception_error($exception) 
{
	$exception->param['title'] = "Nuovo titolo";
    $exception->param['message'] = "Nuovo messaggio di errore";
	return true;
}
?>