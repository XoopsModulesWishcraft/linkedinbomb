<?php
// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
// Based on:								     //
// myPHPNUKE Web Portal System - http://myphpnuke.com/	  		     //
// PHP-NUKE Web Portal System - http://phpnuke.org/	  		     //
// Thatware - http://thatware.org/					     //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
include(dirname(dirname(dirname(__FILE__)))."/mainfile.php");

$GLOBALS['myts'] = MyTextSanitizer::getInstance();

$module_handler = xoops_gethandler('module');
$config_handler = xoops_gethandler('config');
$GLOBALS['linkedinbombModule'] = $module_handler->getByDirname('linkedinbomb');
$GLOBALS['linkedinbombModuleConfig'] = $config_handler->getConfigList($GLOBALS['linkedinbombModule']->getVar('mid')); 

xoops_load('pagenav');	
xoops_load('xoopslists');
xoops_load('xoopsformloader');

include_once $GLOBALS['xoops']->path('class'.DS.'xoopsmailer.php');
include_once $GLOBALS['xoops']->path('class'.DS.'tree.php');

include_once $GLOBALS['xoops']->path('modules'.DS.'linkedinbomb'.DS.'include'.DS.'formobjects.linkedinbomb.php');
include_once $GLOBALS['xoops']->path('modules'.DS.'linkedinbomb'.DS.'include'.DS.'forms.a.linkedinbomb.php');
include_once $GLOBALS['xoops']->path('modules'.DS.'linkedinbomb'.DS.'include'.DS.'functions.php');

xoops_loadLanguage('main', 'linkedinbomb');

if (!isset($GLOBALS['xoopsTpl']) || !is_object($GLOBALS['xoopsTpl'])) {
	include_once(XOOPS_ROOT_PATH."/class/template.php");
	$GLOBALS['xoopsTpl'] = new XoopsTpl();
}

?>