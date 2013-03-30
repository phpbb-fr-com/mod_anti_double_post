<?php
/**
 *
 * @package umil
 * @author WileCoyote for http://www.wu-systems.at
 * @version $Id$ install_adp.php, v2.0.10 2012/07/31 11:36 WileCoyote Exp $
 * @copyright (c) 2012 wu-systems.at
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'ACP_ADP';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'adp_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_adp';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	'2.0.12' => array(
		// nothing changed in this version
	),

	'2.0.11' => array(
		// nothing changed in this version
	),

	'2.0.10' => array(
		// nothing changed in this version
	),

	'2.0.9' => array(
		// nothing changed in this version
	),

	'2.0.8' => array(
		// nothing changed in this version
	),

	'2.0.7' => array(
		// nothing changed in this version
	),

	'2.0.6' => array(
		// nothing changed in this version
	),

	'2.0.5' => array(
		// nothing changed in this version
	),

	'2.0.4' => array(
		// Add permission settings
		'permission_add' => array(
			array('u_adp_allow', true),
		),

		// Set up some permission defaults
		'permission_unset' => array(
			array('ROLE_USER_FULL', 'u_adp_allow'),
			array('ROLE_USER_STANDARD', 'u_adp_allow'),
    		array('REGISTERED', 'u_adp_allow', 'group'),
    		array('REGISTERED_COPPA', 'u_adp_allow', 'group'),
		),

		// Add the new anti-double post forums columns to the forums table
		'table_column_add' => array(
			array('phpbb_forums', 'adp_enable', array('TINT:1', 1)),
			array('phpbb_forums', 'adp_admins', array('TINT:1', 0)),
			array('phpbb_forums', 'adp_modos', array('TINT:1', 0)),
			array('phpbb_forums', 'adp_auto_edit', array('TINT:1', 1)),
			array('phpbb_forums', 'adp_text_edit', array('VCHAR', '-- %D --')),
			array('phpbb_forums', 'adp_always', array('TINT:1', 1)),
			array('phpbb_forums', 'adp_days', array('INT:11', 1)),
			array('phpbb_forums', 'adp_hours', array('INT:11', 0)),
			array('phpbb_forums', 'adp_mins', array('INT:11', 0)),
			array('phpbb_forums', 'adp_secs', array('INT:11', 0)),
		),

		//Cache purge
		'cache_purge' => array(
			'template', // All of them
			array(), // Purge the forum's cache folder
		),
	),
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
