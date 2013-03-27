<?php
/** 
*
* info_acp_adp [Deutsch - Du]
*
* @package language
* @author WileCoyote for http://www.wu-systems.at
* @version $Id: info_acp_adp.php,v 2.0.10 2012/07/31 12:53:34 WileCoyote Exp $
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

$lang = array_merge($lang, array(
    'ACP_ADP'               => 'Anti Double Post',
	'ADP_DOUBLE_POST'		=> 'Du kannst keinen weiteren Beitrag erstellen, weil du den letzten Beitrag in diesem Thema verfasst hast.<br /><br />%sBitte bearbeite stattdessen deinen letzten Beitrag%s.',

	'FORUM_ADP'				=> 'Anti-Double Post MOD',
	'ADP_ENABLE'			=> 'MOD Aktivierung',
	
	'ADP_ADMINS'			=> 'Administratoren können aufeinanderfolgende Beiträge verfassen',
	'ADP_MODOS'				=> 'Moderatoren können aufeinanderfolgende Beiträge verfassen',
	
	'ADP_AUTO_EDIT'			=> 'Dem letzten Beitrag hinzufügen',
	'ADP_AUTO_EDIT_EXPLAIN'	=> '<strong>Ja</strong> : Aufeinanderfolgende Beiträge werden dem letzten Beitrag im Thema hinzugefügt.<br/><strong>Nein</strong> : Eine Fehlermeldung anzeigen.', 
	'ADP_TEXT_EDIT'			=> 'Separator',
	'ADP_TEXT_EDIT_EXPLAIN'	=> 'Dieser Text wird zwischen dem letzten und dem doppelten Beitrag eingefügt.<br />Verwende <strong>%D</strong> um die Beitragszeit des doppelten Beitrags einzufügen.', 
	
	'ADP_ALWAYS'			=> 'Aufeinanderfolgende Beiträge immer verbieten.',
	'ADP_ALWAYS_EXPLAIN'	=> '<strong>Ja</strong> : Aufeinanderfolgende Beiträge sind immer verboten. Die nachfolgenden Einstellungen werden nicht berücksichtigt.<br/><strong>Nein</strong> : Aufeinanderfolgende Beiträge werden mit nachfolgenden Einstellungen zugelassen',
	'ADP_DAYS'				=> 'Anzahl der Tage',
	'ADP_DAYS_EXPLAIN'		=> 'Anzahl der Tage in denen keine aufeinanderfolgenden Beiträge verfasst werden können.',
	'ADP_HOURS'				=> 'Anzahl der Stunden',
	'ADP_HOURS_EXPLAIN'		=> 'Anzahl der Stunden in denen keine aufeinanderfolgenden Beiträge verfasst werden können.',
	'ADP_MINS'				=> 'Anzahl der Minuten',
	'ADP_MINS_EXPLAIN'		=> 'Anzahl der Minuten in denen keine aufeinanderfolgenden Beiträge verfasst werden können.',
	'ADP_SECS'				=> 'Anzahl der Sekunden',
	'ADP_SECS_EXPLAIN'		=> 'Anzahl der Sekunden in denen keine aufeinanderfolgenden Beiträge verfasst werden können.',
	'ADP_APPLY_TO_ALL'				=> 'Auf alle Foren anwenden',
	'ADP_APPLY_TO_ALL_EXPLAIN'		=> '<strong>WARNUNG :</strong> Wenn du diese Option wählst, werden die vorgenommenen Einstellungen für alle Foren übernommen.',	
	
	
	'ADDED_PERMISSIONS'		=> 'Du hast erfolgreich Anti Double Post MOD\'s Berechtigungen deiner Datenbank hinzugefügt.',	
));

?>