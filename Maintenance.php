<?php
/**
 * Web interface for various maintenance scripts
 *
 * @file
 * @ingroup Extensions
 * @author Ryan Schmidt
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:Maintenance Documentation
 */

if( !defined('MEDIAWIKI') ) {
	echo "This file is an extension to the MediaWiki software and is not a valid access point";
	die( 1 );
}

// !!!!!!!!!
// BEGIN EXTENSION CONFIGURATION SECTION
// !!!!!!!!!

// Whether or not to show the "Output globals at the end of processing for debugging" checkbox
// NOTE: enabling this can reveal system information such as environment variables
$wgMaintenanceDebug = false;

// !!!!!!!!!
// END EXTENSION CONFIGURATION SECTION
// !!!!!!!!!

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Maintenance',
	'author' => 'Ryan Schmidt',
	'version' => '2.2.0',
	'descriptionmsg' => 'maintenance-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Maintenance',
);

// Set up the new special page
$dir = dirname( __FILE__ ) . '/';
$wgMessagesDirs['Maintenance'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Maintenance'] = $dir . 'Maintenance.i18n.php';
$wgExtensionMessagesFiles['MaintenanceAlias'] = $dir . 'Maintenance.alias.php';
$wgAutoloadClasses['SpecialMaintenance'] = $dir . 'Maintenance_body.php';
$wgAutoloadClasses['SpecialMaintenanceException'] = $dir . 'Maintenance_body.php';

$wgSpecialPages['Maintenance'] = 'SpecialMaintenance';

// New user right - required to access Special:Maintenance
$wgAvailableRights[] = 'maintenance';
