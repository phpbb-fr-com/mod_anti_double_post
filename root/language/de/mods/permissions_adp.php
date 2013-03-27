<?php
/** 
*
* permissions_adp [Deutsch - Du]
*
* @package language
* @author WileCoyote for http://www.wu-systems.at
* @version $Id: permissions_adp.php,v 2.0.10 2012/07/31 12:53:34 WileCoyote Exp $
* @copyright (c) 2012 wu-systems.at 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


// Adding the permissions
$lang = array_merge($lang, array(
	'acl_u_adp_allow'		=> array('lang' => 'Kann aufeinanderfolgende Beiträge verfassen', 'cat' => 'post'),
));

?>