<?php

/**
 * This is a FILTER POINT in Softaculous.
 * NOTE : You must rename this file to filter.php
 */

//////////////////////////////////////////////////////////////
//===========================================================
// filter.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if (!defined('SOFTACULOUS')) {

	die('Hacking Attempt');
}

// Uncommenting below line enables use of rsync to copy files during Clone, Staging and Push to Live
// define('SOFT_RSYNC_BIN', '/usr/bin/rsync');

// Uncommenting below line enables use of mysqldump to export database during Backup, Clone, Staging and Push to Live
// define('SOFT_DB_BACKUP_BIN', '/usr/bin/mysqldump');

// Uncommenting below line enables use of mysql binary to import database during Restore, Clone, Staging and Push to Live
// define('SOFT_DB_RESTORE_BIN', '/usr/bin/mysql');

// Uncommenting below line enables use of rm command to delete files while removing installations
// define('SOFT_REMOVE_BIN', '/usr/bin/rm');

// Uncommenting below line enables use of wp-cli command to search and replace urls and path of WordPress installation during Clone, Staging and Push to Live
// define('SOFT_USE_WP_CLI', '1');

/*
// Use this filter to trigger your function when an error is triggered in Softaculous
insert_filter('error_handle', 'my_error_handle', 1, 1);

// @param	array $error Errors occurred
function my_error_handle($error){
	// Add your custom code here
	
	$error['my_cust_err'] = 'My Custom Error';
	
	return $error;
}
*/

/*
// Use this filter to trigger your function when Install form settings are loaded in Softaculous
insert_filter('post_load_settings', 'my_post_load_settings', 1, 1);

// @param	array $settings Contains Install Form Fields
function my_post_load_settings($settings){
	// Add your custom code here
}
*/

/*
// Use this filter to trigger your function when Upgrade form settings are loaded in Softaculous
insert_filter('post_load_settings_upgrade', 'my_post_load_settings_upgrade', 1, 1);

// @param	array $settings Contains Upgrade Form Fields
function my_post_load_settings_upgrade($settings){
	// Add your custom code here
}
*/

/* 
// Use this filter to trigger your function before Softaculous Upgrade function is called
insert_filter('pre_softaculous_upgrade', 'my_pre_softaculous_upgrade', 1);

function my_pre_softaculous_upgrade(){
	// Add your custom code here
}
*/

/* 
// Use this filter to trigger your function after Softaculous Upgrade function is called
insert_filter('post_softaculous_upgrade', 'my_post_softaculous_upgrade', 1);

function my_post_softaculous_upgrade(){
	// Add your custom code here
}
*/

/* 
// This filter will be called before unzipping a file
insert_filter('pre_unzip', 'my_pre_unzip', 1, 3);

// Default value for $do is true
function my_pre_unzip($do, $zipfile, $destination_path){
	
	global $soft, $software, $scripts;
	
	// Are we installing WordPress ? 
	if(!empty($soft) && is_wordpress($soft)){
		// Ask Softaculous not to unzip the files
		$do = false;
	}
	
	return $do;
	
}
*/

/*
// Use this filter to trigger your function after a package is unzipped
insert_filter('post_unzip', 'my_post_unzip', 1);

function my_post_unzip(){
	// Add your custom code here
}
*/

/*
// Use this filter to add custom content after Top Scripts is rendered in Enduser Panel
insert_filter('post_top_scripts_interface', 'my_post_top_scripts_interface', 1);

function my_post_top_scripts_interface(){
	// Add your custom code here
}
*/

/* 
// Use this filter whenever you want to disable/add some of your navbar links in Enduser Panel (top right hand corner)
insert_filter('navbar_links', 'my_navbar_links', 1, 1);

// @param	array $navbar contains the navbar links
function my_navbar_links($navbar){
	// Add your custom code here
	
	unset($navbar['goto_email_settings']); //Example to disable email settings link
	unset($navbar['goto_backups']); //Example to disable backups link
	
	return $navbar;
}
*/

/*
// Use this filter to define the php binary path if you want to use custom php binary path
insert_filter('eu_php_bin', 'my_eu_php_bin', 1, 1);

// @param	string $php_bin Path of php binary
function my_eu_php_bin($php_bin){
	// Add your custom code here
	
	$php_bin = '/PATH/TO/PHPBIN';
	
	return $php_bin;
}
*/

/* 
// This filter will be called whenever an UPDATE becomes available for a script AND before an email is sent to the user informing him about the update
insert_filter('pre_update_email', 'my_pre_update_email', 1);

function my_pre_update_email(){
	global $globals, $ins_list, $updated_scripts, $scripts;
	
	// $ins_list		 	 - Will contain the details of the OUTDATED installations of all users immediately
							when an update becomes available
	// $updated_scripts	 - The scripts which just got updated
	// $scripts			 - Detailed information about all the scripts.
	
	foreach($ins_list as $username => $scriptwise){
		// Do what needs to be done !
		
		// $scriptwise will now contain the list of installations in the format of array(SCRIPTID => array());
		foreach($scriptwise as $_sid => $_ins){
			
			// Loop through the installations
			foreach($_ins as $kk => $vv){
							
			}
			
		}
		
	}
}
*/

/* 
// This filter will be called after a Domain is added
insert_filter('post_adddomain', 'my_post_adddomain', 1, 1);

// @param	string $did Domain ID of the domain added
function my_post_adddomain($did){
	global $softpanel, $globals;
	
	// Do stuff here
	// e.g. is for if you want to perform action only for apache
	
}
*/

/* 
// This filter will be called after a Domain is edited.
insert_filter('post_editdomain', 'my_post_editdomain', 1, 1);

// @param	string $did Domain ID of the domain edited
function my_post_editdomain($did){
	
	global $softpanel, $globals;
	
	// Do stuff here
	// e.g. is for if you want to perform action only for apache
	
}
*/

/* 
// This filter will be called before an installation process is started.
insert_filter('pre_install', 'my_pre_install', 1);

function my_pre_install(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

function my_activate_150_plugins($is_commerce, $installation)
{
	if (!$is_commerce) {
		shell_exec('/var/softaculous/wp/wp-cli plugin activate woocommerce --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate wholesalex --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate cartflows --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate woo-stripe-payment --path=' . $installation['softpath']);
		//shell_exec('/var/softaculous/wp/wp-cli plugin activate woo-advanced-shipment-tracking --path=' . $installation['softpath']);
		//shell_exec('/var/softaculous/wp/wp-cli plugin activate flexible-shipping --path=' . $installation['softpath']);
	} else {
		//shell_exec('/var/softaculous/wp/wp-cli plugin activate divi-builder --path=' . $installation['softpath']);
		//shell_exec('/var/softaculous/wp/wp-cli plugin activate lovethemes-seo --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate akismet --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate worker --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate wp-super-cache --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate admin-site-enhancements --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate ewww-image-optimizer --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate independent-analytics --path=' . $installation['softpath']);
		shell_exec('/var/softaculous/wp/wp-cli plugin activate better-wp-security --path=' . $installation['softpath']);
	}
}

// This filter will be called after a script is installed.
insert_filter('post_install', 'my_post_install', 1, 1);

// @param	array $installation Details of the new installation
function my_post_install($installation)
{
	global $soft, $software, $globals;

	$script_id = $installation['sid'];

	// !is_wordpress($soft)

	switch ($script_id) {

			//Divi theme
		case 10001:
			shell_exec('/var/softaculous/wp/wp-cli theme activate Divi --path=' . $installation['softpath']);
			break;

			//case 10021 axel theme ...
		case 10021:
			shell_exec('/var/softaculous/wp/wp-cli theme activate axel-child --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

			// note name of theme Zev...
		case 10006:
			shell_exec('/var/softaculous/wp/wp-cli theme activate zev-child --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

			// Deleted
			//case 10007:
			//shell_exec('/var/softaculous/wp/wp-cli theme activate macchina --path=' . $installation['softpath']);
			//break;

		case 10008:
			shell_exec('/var/softaculous/wp/wp-cli theme activate de-jure --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10009:
			shell_exec('/var/softaculous/wp/wp-cli theme activate Noile --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10010:
			shell_exec('/var/softaculous/wp/wp-cli theme activate radios --path=' . $installation['softpath']);
			my_activate_150_plugins(false, $installation);
			break;

		case 10012:
			shell_exec('/var/softaculous/wp/wp-cli theme activate pitoon --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10013:
			shell_exec('/var/softaculous/wp/wp-cli theme activate maori --path=' . $installation['softpath']);
			my_activate_150_plugins(false, $installation);
			break;

		case 10014:
			shell_exec('/var/softaculous/wp/wp-cli theme activate archi --path=' . $installation['softpath']);
			my_activate_150_plugins(false, $installation);
			break;

		case 10015:
			shell_exec('/var/softaculous/wp/wp-cli theme activate salvation --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10016:
			shell_exec('/var/softaculous/wp/wp-cli theme activate fabrik --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10017:
			shell_exec('/var/softaculous/wp/wp-cli theme activate buzzmag --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10018:
			shell_exec('/var/softaculous/wp/wp-cli theme activate magezix --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10019:
			shell_exec('/var/softaculous/wp/wp-cli theme activate qomfort --path=' . $installation['softpath']);
			my_activate_150_plugins(false, $installation);
			break;

		case 10020:
			shell_exec('/var/softaculous/wp/wp-cli theme activate flynext --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10022:
			shell_exec('/var/softaculous/wp/wp-cli theme activate ftech --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10023:
			shell_exec('/var/softaculous/wp/wp-cli theme activate zill --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10024:
			shell_exec('/var/softaculous/wp/wp-cli theme activate future --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10025:
			shell_exec('/var/softaculous/wp/wp-cli theme activate maxiz --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10026:
			shell_exec('/var/softaculous/wp/wp-cli theme activate gamxo --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10027:
			shell_exec('/var/softaculous/wp/wp-cli theme activate spotlight --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10028:
			shell_exec('/var/softaculous/wp/wp-cli theme activate dexon --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10029:
			shell_exec('/var/softaculous/wp/wp-cli theme activate hara-child --path=' . $installation['softpath']);
			my_activate_150_plugins(false, $installation);
			break;

		case 10030:
			shell_exec('/var/softaculous/wp/wp-cli theme activate tnews --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10031:
			shell_exec('/var/softaculous/wp/wp-cli theme activate flownews --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10032:
			shell_exec('/var/softaculous/wp/wp-cli theme activate vicodin --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10033:
			shell_exec('/var/softaculous/wp/wp-cli theme activate magazilla --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10034:
			shell_exec('/var/softaculous/wp/wp-cli theme activate buzzmag --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10035:
			shell_exec('/var/softaculous/wp/wp-cli theme activate blogosphere --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10036:
			shell_exec('/var/softaculous/wp/wp-cli theme activate gimont --path=' . $installation['softpath']);
			// Turned Off because theme is heavy by it's own...
			//my_activate_150_plugins(true, $installation);
			break;

		case 10037:
			shell_exec('/var/softaculous/wp/wp-cli theme activate callixMain --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10038:
			shell_exec('/var/softaculous/wp/wp-cli theme activate foodking --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10039:
			shell_exec('/var/softaculous/wp/wp-cli theme activate aqutex --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10040:
			shell_exec('/var/softaculous/wp/wp-cli theme activate constre --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10041:
			shell_exec('/var/softaculous/wp/wp-cli theme activate colaz --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10042:
			shell_exec('/var/softaculous/wp/wp-cli theme activate tecz --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10043:
			shell_exec('/var/softaculous/wp/wp-cli theme activate bizex --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10044:
			shell_exec('/var/softaculous/wp/wp-cli theme activate rezilla --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10045:
			shell_exec('/var/softaculous/wp/wp-cli theme activate ogenix --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10046:
			shell_exec('/var/softaculous/wp/wp-cli theme activate zibber --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10047:
			shell_exec('/var/softaculous/wp/wp-cli theme activate anada --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10048:
			shell_exec('/var/softaculous/wp/wp-cli theme activate attornix --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10049:
			shell_exec('/var/softaculous/wp/wp-cli theme activate reland --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10050:
			shell_exec('/var/softaculous/wp/wp-cli theme activate medibazar --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10051:
			shell_exec('/var/softaculous/wp/wp-cli theme activate clilab --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10052:
			shell_exec('/var/softaculous/wp/wp-cli theme activate zephys --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		case 10053:
			shell_exec('/var/softaculous/wp/wp-cli theme activate zosia --path=' . $installation['softpath']);
			my_activate_150_plugins(true, $installation);
			break;

		default:
			shell_exec('/var/softaculous/wp/wp-cli theme activate twentytwentyfour --path=' . $installation['softpath']);
	}
}


/* 
// This filter will be called whenever any mail is sent (e.g installing scripts, removing scripts, etc)
insert_filter('pre_mail', 'my_pre_mail', 1, 1);

// @param	array $array Details of the email to be sent.
function my_pre_mail($array){
	global $globals;
	
	// Do stuff here
	
	return $array;
}
*/

/* 
// This filter will be called right before an installation is being imported from enduser panel.
insert_filter('pre_import', 'my_pre_import', 1);

function my_pre_import(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

/* 
// This filter will be called after an installation is imported from enduser panel.
insert_filter('post_import', 'my_post_import', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_import($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This flter will be called right before an installation is upgraded.
insert_filter('pre_upgrade', 'my_pre_upgrade', 1, 1);

// @param	array $installation Details of the installation being upgraded
function my_pre_upgrade($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

/*
// This flter allows you to override Softaculous check for installation accessible
insert_filter('auto_upgrade_installation_accessible', 'my_auto_upgrade_installation_accessible', 1, 1);

// @param boolean $is_accessible true if installation is accessible else false
function my_auto_upgrade_installation_accessible($is_accessible){
    global $soft, $software, $globals;
    
    // Return true if you want to force upgrade even if the installation is not accessible via curl
    return true;
    
    // Return false if you do not want to allow auto upgrade
    return false;
}
*/

/* 
// This filter will be called after an installation is upgraded.
insert_filter('post_upgrade', 'my_post_upgrade', 1, 1);

// @param	array $installation Details of the installation upgraded
function my_post_upgrade($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
	}
	
}
*/

/* 
// This filter will be called right before an installation is removed.
insert_filter('pre_remove', 'my_pre_remove', 1, 1);

// @param	array $installation Details of the installation being removed
function my_pre_remove($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

/* 
// This filter will be called after an installation is removed.
insert_filter('post_remove', 'my_post_remove', 1, 1);

// @param	array $installation Details of the installation removed
function my_post_remove($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
	}
	
}
*/

/*
// Use this filter to modify the id of the script to be installed.
insert_filter('post_load_soft', 'my_post_load_soft', 1, 1);

// @param	array $soft Contains softid
// Since 4.8.0
function my_post_load_soft($soft){
	// Add your custom code here
	
	return $soft;
}
*/

/*
// Use this filter to trigger your function to set database details to be prefilled on install form
insert_filter('post_load_dbdetails', 'my_post_load_dbdetails', 1, 1);

// @param	array $dbdetails Prefilled DB details for the installation
function my_post_load_dbdetails($dbdetails){
	// Add your custom code here	
	
	$dbdetails['dbname'] = '';
	$dbdetails['dbusername'] = ''; // This can be used only in Softaculous Remote
	$dbdetails['dbuserpass'] = ''; // This can be used only in Softaculous Remote
	$dbdetails['dbhost'] = ''; // This can be used only in Softaculous Remote
	
	return $dbdetails;
}
*/

/*
// Use this filter if you want to use custom URLs for softaculous remote calls to perform tasks such as install, etc. 
insert_filter('remote_exec_url', 'my_remote_exec_url', 1, 1);

// @param	array $url URL where the script is to be installed
// Since 4.8.0
function my_remote_exec_url($url){
	
	// Add your custom code here
	echo $url; // E.g. http://example.com/sreq.php
	$parse = parse_url($url);
	$custom_url = 'domain.com';//This url should point to the location where the current domain being installed is pointing
	$url = str_replace($parse['host'], $custom_url, $url);
	echo $url; // E.g. http://domain.com/sreq.php
	return $url;
}
*/

/*
// This filter will be called before the cron is added.
insert_filter('pre_addcron', 'my_pre_addcron', 1, 1);

function my_pre_addcron($cron){
	global $soft, $software, $globals;
	
	//Add your custom cron command in $cron array.
	$cron['cron_min'] = '';
	$cron['cron_hour'] = ''; 
	$cron['cron_day'] = '';
	$cron['cron_month'] = '';
	$cron['cron_weekday'] = '';
	$cron['cron_command'] = '';
	
	return $cron;
}
*/

/*
// This filter will be called after the cron is added.
insert_filter('post_addcron', 'my_post_addcron', 1, 1);

function my_post_addcron($cron){
	global $soft, $software, $globals;
	
	//Add your custom code here.
}
*/

/*
// Use this filter to trigger your function and define which version of Softaculous you want to upgrade to
// Make sure you pass correct version of Softaculous you want to upgrade to, otherwise you will be upgraded to latest version
insert_filter('upgrade_softaculous_to_version', 'my_upgrade_softaculous_to_version', 1);
function my_upgrade_softaculous_to_version(){
	return '4.8.9'; // this example will upgrade Softaculous to 4.8.9
}
*/

/* 
// Use this filter to trigger your function and perform some tasks before Softaculous Upgrade check is performed
insert_filter('pre_softaculous_upgrade_check', 'my_pre_softaculous_upgrade_check', 1);

function my_pre_softaculous_upgrade_check(){
	// Add your custom code here
}
*/

/*
//Use this filter to unset the exist files from your domain root
insert_filter('check_files_exist', 'my_check_files_exist', 1, 1);

function my_check_files_exist($exists){
	
	//e.g if you want to unset .htaccess 
	
	if(in_array('.htaccess', $exists)){
		$htaccess_key = array_search('.htaccess', $exists);
		unset($exists[$htaccess_key]);
	}
	
	return $exists;
}
*/

/* 
//Use this filter to exclude files/folders from being copied from live installation to clone installation
insert_filter('exclude_files_clone', 'my_exclude_files_clone', 1, 2);

function my_exclude_files_clone($exclude_files, $softpath){
	
	// $exclude_files is expected as an array
	// Add files/folders to be excluded
	$exclude_files[] = $softpath.'/.htaccess';
	$exclude_files[] = $softpath.'/cache';
	
	return $exclude_files;
}
*/

/* 
//Use this filter to exclude files/folders from being copied from live installation to staging installation
insert_filter('exclude_files_staging', 'my_exclude_files_staging', 1, 2);

function my_exclude_files_staging($exclude_files, $softpath){
	
	// $exclude_files is expected as an array
	// Add files/folders to be excluded
	$exclude_files[] = $softpath.'/.htaccess';
	$exclude_files[] = $softpath.'/cache';
	
	return $exclude_files;
}
*/

/* 
//Use this filter to exclude files/folders from being copied from staging installation to live installation
insert_filter('exclude_files_pushtolive', 'my_exclude_files_pushtolive', 1, 2);

function my_exclude_files_pushtolive($exclude_files, $softpath){
	
	// $exclude_files is expected as an array
	// Add files/folders to be excluded
	$exclude_files[] = $softpath.'/.htaccess';
	$exclude_files[] = $softpath.'/cache';
	
	return $exclude_files;
}
*/

/*
//Use this filter to exclude files/folders from being imported
insert_filter('exclude_files_remoteimport', 'my_exclude_files_remoteimport', 1, 2);

function my_exclude_files_remoteimport($exclude_files, $softpath){
	
	// $exclude_files is expected as an array
	// Add files/folders to be excluded
	$exclude_files[] = $softpath.'/.htaccess';
	$exclude_files[] = $softpath.'/cache';
	
	return $exclude_files;
}
*/

/*
//Use this filter to exclude files/folders from being backed up
insert_filter('exclude_files_backup', 'my_exclude_files_backup', 1, 2);

function my_exclude_files_backup($exclude_files, $softpath){
	
	// $exclude_files is expected as an array
	// Add files/folders to be excluded
	$exclude_files[] = $softpath.'/.htaccess';
	$exclude_files[] = $softpath.'/cache';
	
	return $exclude_files;
}
*/

/* 
//Use this filter to pass the path to PHP binary which should be used to perform operations like Clone, Remote Import, etc.
insert_filter('soft_php_bin', 'my_soft_php_bin', 1, 1);

// @param	string $phpbin Path of php binary
function my_soft_php_bin($phpbin){
	
	// Note : The PHP binary should be a CLI PHP binary
	$phpbin = '/PATH/TO/PHPBIN'; //Define your php binary here
	
	return $phpbin;
}
*/


/* 
//Use this filter to make some changes in the installation details of the installation.
insert_filter('post_loadinstallations', 'my_post_loadinstallations', 1, 1);

// @param	array $data List of installations
function my_post_loadinstallations($data){
	
	// The below example is to update the database user and/or database password of the installations. 
	// Similarly you can use this filter to make changes to any installation details
	
	// Use your API to fetch the database login details
	$dbuser = '';
	$dbpass = '';
		
	foreach($data as $insid => $values){
		
		if(!empty($dbuser) && $dbuser != $values['softdbuser']){
			
			$data[$insid]['softdbuser'] = $dbuser;
			$tosave = 1;
		
		}
		
		if(!empty($dbpass) && $dbpass != $values['softdbpass']){
			
			$data[$insid]['softdbpass'] = $dbpass;
			$data[$insid]['display_softdbpass'] = $dbpass;
			$tosave = 1;
		
		}
	}
	
	//r_print($data);
	if(!empty($tosave)){
		saveinstallations($data);
	}
	
	return $data;
}
*/

/*
//Use this filter to make any changes to the list of outdated plugins received.
insert_filter('pre_upgrade_outdated_plugins', 'my_pre_upgrade_outdated_plugins', 1, 1);

// @param	array $plugins List of outdated plugins
function my_pre_upgrade_outdated_plugins($plugins){
	
	//Filter the list as per your need
	//Example of the plugins list you will get here
	r_print($plugins); // This will print the list of outdated plugins
	
	return $plugins;
}
*/

/* 
//Use this filter to make any changes to the outdated theme's data.
insert_filter('pre_upgrade_outdated_theme', 'my_pre_upgrade_outdated_theme', 1, 1);

// @param	object $theme_data Theme's data
function my_pre_upgrade_outdated_theme($theme_data){
	
	//Make changes as per your need
	//Example of the theme's api data you will get here
	r_print($theme_data); // This will print the list of outdated themes
	
	return $theme_data;
}
*/

/*
//Use this filter to define the IP where your domain should point in case the DNS is not propogated yet and the domain is pointing to old server
insert_filter('dns_server_ip', 'my_dns_server_ip', 1, 1);

// @param	string $domain The Domain to which the call will be made
function my_dns_server_ip($domain){
	
	$ip = '1.2.3.4'; //Define the IP where your domain should point
	
	return $ip;
}
*/

/*
//Use this filter to execute any code after the database is created during installation of a script
insert_filter('post_createdb', 'my_post_createdb', 1);

function my_post_createdb(){
	
	global $__settings;
	
	// Execute your code here
	echo $__settings['softdb']; // This will echo the  Database Name
	echo $__settings['softdbhost']; // This will echo the  Database  Host  
	echo $__settings['softdbuser']; // This will echo the  Database  User  
	echo $__settings['softdbpass']; // This will echo the  Database  Pass  
	echo $__settings['dbprefix']; // This will echo the  Table Prefix 
	
}
*/

/*
// Use this filter to modify the list of domain(s). 
insert_filter('domains_list', 'my_domains_list', 1, 1);

// @param	string $domains Domains list with domain name in the key and path to the domain in value
function my_domains_list($domains){
	
	// example to remove a domain name from the domains list
	unset($domains['example.com']);
	
	// example to add a domain name
	// Note : In case of Softaculous Remote and Enterprise, the domain you are adding here should be added in the panel
	$domains['example.com'] = '/home/example/public_html';
	
	// Return the list of domains
	return $domains;
}
*/

/*
// This filter will be called before the auto backup cron is added.
insert_filter('pre_addcron_auto_backup', 'my_pre_addcron_auto_backup', 1, 1);

function my_pre_addcron_auto_backup($cron){
	global $soft, $software, $globals;
	
	//Add your custom cron command in $cron array.
	$cron['min'] = '';
	$cron['hour'] = ''; 
	$cron['day'] = '';
	$cron['month'] = '';
	$cron['weekday'] = '';
	$cron['command'] = '';
	
	return $cron;
}
*/

/*
// This filter will be called after the auto backup cron is added.
insert_filter('post_addcron_auto_backup', 'my_post_addcron_auto_backup', 1, 1);

function my_post_addcron_auto_backup($cron){
	global $soft, $software, $globals;
	
	//Add your custom code here.
}
*/

/*
// This filter will be called before backup.
insert_filter('pre_backup', 'my_pre_backup', 1, 1);

function my_pre_backup($data){
	
	r_print($data); // This will print the data related to the current backing being performed
	//Add your custom code here.
}
*/

/*
// This filter will be called after backup.
insert_filter('post_backup', 'my_post_backup', 1, 1);

function my_post_backup($data){
	
	r_print($data); // This will print the data related to the current backing being performed
	//Add your custom code here.
}
*/

/*
// This filter will be called before starting the backup process, after the posted data is loaded.
insert_filter('post_load_backup_data', 'my_post_load_backup_data', 1, 1);

// @param	array $ins Details of the installation
function my_post_load_backup_data($ins){
	// Do stuff here
}
*/

/* 
// This filter will be called before starting the restore process of an installation.
insert_filter('pre_restore', 'my_pre_restore', 1, 2);

// @param	array $res_data Posted data for restore
// @param	array $backupinfo Details of the backups
function my_pre_restore($res_data, $backupinfo){
	// Do stuff here
}
*/

/*
//This filter can be used to modify the act in Softaculous. $act refers to the page that will be processed by Softaculous
insert_filter('pre_handle_acts', 'my_pre_handle_acts', 1, 1);

// @param	string $act act parameter in the URL
function my_pre_handle_acts($act){
	
	return $act;
}
*/

/*
// This filter can be used to determine if an action (e.g. clone, staging, pushtolive, manage_sets, etc) can be performed
insert_filter('can_perform_action', 'my_can_perform_action', 1, 1);

// @param	string $action Action name
function my_can_perform_action($action){
	global $l, $error;
	
	// Do stuff here
}
*/

/* 
// This filter will be called before the CLI process starts.
insert_filter('pre_cli_exec', 'my_pre_cli_exec', 1);

function my_pre_cli_exec(){
	global $globals;
	
	// Do stuff here
}
*/

/* 
// This filter can be used to change the Return To link on success pages
insert_filter('return_link', 'my_return_link', 1, 2);

// @param	string $return default return link on the page accessed. This is an html link, eg. <a href="">Return</a>
// @param	string $act act of the page accessed
function my_return_link($return, $act){
	
	// Do stuff here	
	return $return;
}
*/

/* 
// Use this filter to trigger your function before loading the ftp connection for the domain in Softaculous Remote
insert_filter('pre_loadftp', 'my_pre_loadftp', 1, 3);

// @param	array $res Domain data fetched from the database
// @param	string $softdomain domain data whose data is required
// @param	string $insid Installation id
function my_pre_loadftp($res, $softdomain, $insid){
	// Add your custom code here
	global $user, $__settings;
	
	// Do stuff here
	return $res;
}
*/

/* 
// This filter can be used to show a different local backup folder in the list of Backup locations on Enduser Settings page
insert_filter('show_local_backup_dir', 'my_show_local_backup_dir', 1, 1);

// @param	string $dir current local backup directory of the user
function my_show_local_backup_dir($dir){
	
	// Do stuff here
	return $dir;
}
 */

/* 
// This filter can be used to modify the existing list of FAQs displayed in enduser panel
insert_filter('faqs', 'my_faqs', 1, 1);

// @param	array $faqs current list of faqs
function my_faqs($faqs){
	
	// Add a FAQ
	$faqs['custom_faq_1']['question'] = 'Customized Question';
	$faqs['custom_faq_1']['answer'] = 'Customized Answer';
	
	// Unset an existing FAQ
	unset($faqs['softaculous_intro']);
	
	return $faqs;
}
*/
 
/*
//Use this filter to skip directory exist check
insert_filter('check_softpath_exist', 'my_check_softpath_exist', 1, 2);

function my_check_softpath_exist($softpath_exist, $softpath){
	
	//Return false so Softaculous will skip the existing directory check.
	return false;
	
}
*/

/* 
// Use this filter to return the files/folders list in a specific directory
// Softaculous will skip its process of listing and will use the array returned by this filter
insert_filter('pre_filelist', 'my_pre_filelist', 1, 3);

function my_pre_filelist($filelist, $scandir, $options){
	
	// $scandir is the directory for which you need to return the files/folders
	
	// $options contains the constrains you need to use while calculating the list
	// Example of $options array
	// $options = array('sub_directories' => $searchSubdirs, // 1 - to search in sub directories
	//				'directories_only' => $directoriesonly, // 1 - to look for directories only OR 0 - for files and dirs
	//				'maximum_level' => $maxlevel, // Maximum number of recursions for sub dirs | 'all' refers to no limit
	//				'start_level' => $level); // The sub-directory level to start with
	
	// Sample of the $filelist array you need to return 
	
	// File in the 1st level
	// ['/var/www/html/file.txt'] => Array
	//   (
	//       [level] => 1
	//       [dir] => 0
	//       [name] => file.txt
	//       [path] => /var/www/html/
	//   )
	
	// Directory in the 1st level
	// ['/var/www/html/dir'] => Array
	//   (
	//       [level] => 1
	//       [dir] => 1
	//       [name] => dir
	//       [path] => /var/www/html/
	//   )
	
	// File in the 2nd level
	// ['/var/www/html/dir/new.php'] => Array
	//   (
	//       [level] => 2
	//       [dir] => 0
	//       [name] => new.php
	//       [path] => /var/www/html/dir/
	//   )
	
	// Return the filelist array
	return $filelist;
	
}
*/

/* 
// Use this filter to modify the files/folders list in a specific directory calculated by Softaculous
insert_filter('post_filelist', 'my_post_filelist', 1, 3);

function my_post_filelist($filelist, $scandir, $options){
	
	// $scandir is the directory for which you need to return the files/folders
	
	// $options contains the constrains you need to use while calculating the list
	// Example of $options array
	// $options = array('sub_directories' => $searchSubdirs, // 1 - to search in sub directories
	//				'directories_only' => $directoriesonly, // 1 - to look for directories only OR 0 - for files and dirs
	//				'maximum_level' => $maxlevel, // Maximum number of recursions for sub dirs | 'all' refers to no limit
	//				'start_level' => $level); // The sub-directory level to start with
	
	// Sample of the $filelist array you need to return 
	
	// Modify the filelist array if you would like to make any changes to the list populated by Softaculous
	
	// Sample of the parameter $filelist
	
	// File in the 1st level
	// ['/var/www/html/file.txt'] => Array
	//   (
	//       [level] => 1
	//       [dir] => 0
	//       [name] => file.txt
	//       [path] => /var/www/html/
	//   )
	
	// Directory in the 1st level
	// ['/var/www/html/dir'] => Array
	//   (
	//       [level] => 1
	//       [dir] => 1
	//       [name] => dir
	//       [path] => /var/www/html/
	//   )
	
	// File in the 2nd level
	// ['/var/www/html/dir/new.php'] => Array
	//   (
	//       [level] => 2
	//       [dir] => 0
	//       [name] => new.php
	//       [path] => /var/www/html/dir/
	//   )
	
	return $filelist;
	
}
*/
 
/*
//Use this filter to modify the installation details before it is saved while importing the installation (by enduser)
insert_filter('pre_import_save', 'my_pre_import_save', 1, 1);

function my_pre_import_save($ins){
	
	// If you would like to save a WordPress installation into your custom WordPress package you can update SID
	// E.g.
	$ins['sid'] = 10001;
	
	// Similarly you can modify any details you want before saving the installation
	return $ins;
	
}
*/
 
/*
//Use this filter to modify the installation details before it is saved while importing the installation (by admin/CLI)
insert_filter('pre_admin_import_save', 'my_pre_admin_import_save', 1, 1);

function my_pre_admin_import_save($ins){
	
	// If you would like to save a WordPress installation into your custom WordPress package you can update SID
	// E.g.
	$ins['sid'] = 10001;
	
	// Similarly you can modify any details you want before saving the installation
	return $ins;
	
}
*/

/* //Use this filter to execute any code before the database is created during installation of a script
insert_filter('pre_createdb', 'my_pre_createdb', 1);

function my_pre_createdb(){
	
	global $__settings;
	
	// Execute your code here
	echo $__settings['softdb']; // This will echo the  Database Name
	echo $__settings['softdbhost']; // This will echo the  Database  Host  
	echo $__settings['softdbuser']; // This will echo the  Database  User  
	echo $__settings['softdbpass']; // This will echo the  Database  Pass  
	echo $__settings['dbprefix']; // This will echo the  Table Prefix 
	
}
 */

/* //Use this filter to overwrite the check to determine if an installation can be upgraded
insert_filter('is_upgradable', 'my_is_upgradable', 1, 3);

function my_is_upgradable($upgradableto, $soft, $softins){
	
	// If you do not want to allow upgrade return false
	return false;
	
	print_r($upgradableto); // This is an array with script ids and versions to which the current installation can be upgrade
	echo $soft; // Script id of the script which is being upgraded
	print_r($softins); // Array with all the details of the installation for which upgrade check is being done
	
	// Return the $upgradableto array to allow upgrade
	return $upgradableto;
	
}
 */

/* //Use this filter to make changes to the outdated plugins list (add or remove) that will be upgraded
insert_filter('pre_upgrade_plugins', 'my_pre_upgrade_plugins', 1, 3);

function my_pre_upgrade_plugins($outdated_plugins, $soft, $username){
	
	// Sample data of $outdated plugins
	//Array(
	//	[pagelayer/pagelayer.php] => stdClass Object ( 
	//		[id] => w.org/plugins/pagelayer 
	//		[slug] => pagelayer 
	//		[plugin] => pagelayer/pagelayer.php 
	//		[new_version] => 1.1.0 
	//		[url] => https://wordpress.org/plugins/pagelayer/ 
	//		[package] => http://downloads.wordpress.org/plugin/pagelayer.1.1.0.zip 
	//		[tested] => 5.4 
	//		[requires_php] => 5.5 
	//		[compatibility] => Array ( ) 
	//		[Name] => PageLayer 
	//	)
	//)
	
	// If you want to remove any plugin before upgrading
	unset($outdated_plugins['pagelayer/pagelayer.php']);
	
	print_r($outdated_plugins); // This is an array with the list of outdated plugins that will be upgraded
	echo $soft; // Script id of the script for which plugins are going to be upgraded
	echo $username; // Username of the user for which plugins are going to be upgraded
	
	// Return the $outdated_plugins array to continue with plugins upgrade
	return $outdated_plugins;
	
}
 */
 
/* //Use this filter to make changes to the outdated themes list (add or remove) that will be upgraded
insert_filter('pre_upgrade_themes', 'my_pre_upgrade_themes', 1, 3);

function my_pre_upgrade_themes($outdated_themes, $soft, $username){
	
	// Sample data of $outdated_themes
	//Array(
	//	[astra] => stdClass Object
	//		(
	//			[name] => Twenty Twenty
	//			[slug] => twentytwenty
	//			[version] => 1.2
	//			[preview_url] => https://wp-themes.com/twentytwenty
	//			[author] => wordpressdotorg
	//			[screenshot_url] => //ts.w.org/wp-content/themes/twentytwenty/screenshot.png?ver=1.2
	//			[rating] => 84
	//			[num_ratings] => 34
	//			[downloaded] => 757989
	//			[last_updated] => 2020-03-31
	//			[homepage] => https://wordpress.org/themes/twentytwenty/
	//			[download_link] => http://downloads.wordpress.org/theme/twentytwenty.1.2.zip
	//		)
	//	)
	//)
	
	// If you want to remove any theme before upgrading
	unset($outdated_themes['astra']);
	
	print_r($outdated_themes); // This is an array with the list of outdated themes that will be upgraded
	echo $soft; // Script id of the script for which themes are going to be upgraded
	echo $username; // Username of the user for which themes are going to be upgraded
	
	// Return the $outdated_themes array to continue with themes upgrade
	return $outdated_themes;
	
} 
*/

/* //Use this filter to print any custom message after Softaculous header is loaded, this filter will be called on all pages after loading the header
insert_filter('post_header', 'my_post_header', 1);

function my_post_header(){
	echo 'This is a custom message';
}
*/
 
/*
//Use this filter to modify the WordPress sets loaded. This filter includes both admin and enduser sets list. 
insert_filter('post_load_sets', 'my_post_load_sets', 1, 1);

function my_post_load_sets($sets){
	
	// To remove an admin set from the list
	// Note : _admin is added at the end of set name for admin sets
	unset($sets['SET_NAME_admin']);
	
	// To remove an enduser set from the list
	unset($sets['SET_NAME']);
	
	// To set the default state of the set as checked for installation
	$sets['SET_NAME']['default_value'] = 1;
	
	return $sets;
	
}
*/
 
/*
//Use this filter to modify the admin WordPress sets loaded. This filter includes only admin sets list. 
insert_filter('post_load_sets_admin', 'my_post_load_sets_admin', 1, 1);

function my_post_load_sets_admin($sets){
	
	// To remove an admin set from the list
	// Note : _admin is added at the end of set name for admin sets
	unset($sets['SET_NAME_admin']);
	
	// To set the default state of the set as checked for installation
	$sets['SET_NAME_admin']['default_value'] = 1;
	
	return $sets;
	
}
*/

/* 
// Use this filter to modify the current url detected by Softaculous
insert_filter('get_current_url', 'my_get_current_url', 1, 1);

// @param	array $url The detected URL
function my_get_current_url($url){
	global $soft, $software, $globals;
	
	// Change the URL here
	//$url = str_replace(':2083', '', $url);
	
	return $url;
	
}
*/

/* 
// This filter will be called before an installation is edited
insert_filter('pre_edit_installation', 'my_pre_edit_installation', 1);

function my_pre_edit_installation(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

/* 
// This filter will be called after an installation is edited
insert_filter('post_edit_installation', 'my_post_edit_installation', 1, 1);

// @param	array $installation Details of the installation being edited
function my_post_edit_installation($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
	
}
*/

/* 
//Use this filter to print some message on the screen before the overview of a software is displayed
insert_filter('pre_software_overview_theme', 'my_pre_software_overview_theme', 1, 1);

function my_pre_software_overview_theme($soft){
	
	if(is_wordpress($soft)){
		// Print some message on WordPress Overview page
	}
	
	// Print some message on Overview page of all scripts
	
	return true;
	
} 
*/

/* 
//Use this filter to print custom message on the install form of a software is displayed
insert_filter('pre_software_setup_theme', 'my_pre_software_setup_theme', 1, 1);

function my_pre_software_setup_theme($soft){
	
	$html = '';
	
	if(is_wordpress($soft)){
		// Print some message on WordPress Install page
	}
	
	// Print some message on Install page of all scripts
	
	$html = 'This is a test message';
	
	return $html;
	
} 
*/

/* 
//Use this filter to change the installation id (insid) generated by Softaculous during installation, cloning, staging, etc
insert_filter('post_insid_generated', 'my_post_insid_generated', 1, 1);

function my_post_insid_generated($insid){
	
	global $soft; // $soft will have the sid of the script currently being installed, cloned, staged, etc
	
	// Use your algorithm to generate the insid
	$insid = mt_rand(100000,999999);
	
	return $insid;
	
} 
*/

/* 
//Use this filter to change the features suggestions generated by Softaculous
insert_filter('feature_suggestions', 'my_feature_suggestions', 1, 2);

function my_feature_suggestions($loaded_suggestions, $act){
	
	// $act is the current page user is browsing
	
	// this array contains a list of feature suggestions based on the page user is browsing with the title description and link to the docs 
	// e.g. array structure below
	
	//    [wordpress_manager] => Array
	//    (
	//        [title] => WordPress Manager
	//        [description] => Manage your WordPress installations from one place using the WordPress Manager feature
	//        [link] => https://www.softaculous.com/docs/enduser/wordpress-manager/
	//    )
	
	// You can add a custom feature suggestion as follows
	
	// $loaded_suggestions['custom_suggestion'] = array(
	// 							'title' => 'Custom Suggestion Title',
	// 							'description' => 'Custom Suggestion Description',
	// 							'link' => 'https://example.com/custom-feature-link/'
	// 							);
	
	// Or You can remote an existing feature suggestion as follows
	// unset($loaded_suggestions['search_scripts']);
	
	return $loaded_suggestions;
	
} 
*/

/*
// Use this filter when you wish to pass your own replace data during wp-cli search replace
insert_filter('pre_replace_data', 'my_pre_replace_data', 1, 1);

function my_pre_replace_data($replace_data){
	global $soft, $globals, $source_data, $__settings;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
		// Define your own replace_data array
		$replace_data = array();
		$replace_data[$source_data['softurl']] = $__settings['softurl'];
		$replace_data[$source_data['softpath']] = $__settings['softpath'];
	}

	return $replace_data;
}
*/

/*
//Use this filter to modify the rsync command during clone
insert_filter('clone_rsync_command', 'my_soft_rsync_command', 1, 1);

//Use this filter to modify the rsync command during staging
insert_filter('staging_rsync_command', 'my_soft_rsync_command', 1, 1);

//Use this filter to modify the rsync command during push to live
insert_filter('pushtolive_rsync_command', 'my_soft_rsync_command', 1, 1);

function my_soft_rsync_command($command){
	global $soft;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		// Do things only if its WordPress
		// $command .= " --delete"; //Make changes in rsync command as per your need
	}
	return $command;
}
*/

/*
// This filter will be called before softaculous starts importing the files
insert_filter('pre_remote_import_files', 'my_pre_remote_import_files', 1, 1);

// @param	array $settings Source server details
function my_pre_remote_import_files($settings){
	global $software, $globals;
	// Add your custom code here
}
*/

/*
// This filter will be called after an installation is imported from enduser panel.
insert_filter('post_remote_import', 'my_post_remote_import', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_remote_import($installation){
	global $software, $globals;
	// Add your custom code here
}
*/

/*
//Use this filter to perform any action after a language file is loaded
insert_filter('lang_loaded', 'my_lang_loaded', 1, 2);

function my_lang_loaded($language, $file){
	
	global $l;
	
	// Add your custom translations here
	if($language == 'english' && $file == 'software'){
		$l['choose_domain_exp'] = 'My custom description for choose domain';
	}
}
*/

/*
// Use this filter to define a custom CLI act
insert_filter('cli_act', 'my_cli_act', 1, 2);
function my_cli_act($act, $cli_data){
	global $argv, $globals, $softpanel, $l, $error, $SESS, $user, $server;
	
	if($act == '--custom-act'){
		include_once($globals['path'].'/custom-act.php');
		exit(0);
	}
	
	return true;
	
}
*/

/*
// This filter will be called before redirecting to add domain page when there are no domains present in the user's account
insert_filter('add_domain_page', 'my_add_domain_page', 1, 1);
function my_add_domain_page($page){
	global $argv, $globals, $softpanel, $l, $error, $SESS, $user, $server;
	
	// The return value must be a valid act
	return 'custom_addsite';
	
}
*/

/*
// This filter will be called before showing the option to allow Softaculous to fetch the database config details if the database connection fails with the existing credentials
insert_filter('fetch_db_details', 'my_fetch_db_details', 1, 1);

function my_fetch_db_details($status){

	// Default status is true
	// Return true to show the checkbox and false to not show the checkbox to automatically detect database credentials
	return true;
}

*/

/*
//This filter will be called before registering the Softaculous Wordpress Manager Icon to change Softaculous Wordpress Manager Icon link
insert_filter('wordpress_manager_icon_link', 'my_wordpress_manager_icon_link', 1, 1);

function my_wordpress_manager_icon_link($url){
	
	//add your custom url here Eg: softaculous/index.live.php?act=software&soft=10001
	$url = 'softaculous/index.live.php?act=software&soft=10001';
	
	// The return value must be string
	return $url;
	
}

*/

/* 
//Use this filter to print/echo on the Domains list page in Softaculous Remote
insert_filter('post_aefer_domains_theme', 'my_post_aefer_domains_theme', 1, 1);

function my_post_aefer_domains_theme(){
	// add anything you need to print/echo on the Domains list page in Softaculous Remote
	// echo 'This message is displayed on the domains page';
}
*/

/* 
//Use this filter to print any content before the footer is rendered
insert_filter('pre_footer_theme', 'my_pre_footer_theme', 1, 1);

function my_pre_footer_theme(){
	// add anything you need to print/echo before the footer is rendered
	// echo 'This message is displayed before footer';
}
*/

/* 
// Use this filter to trigger your function before loading the ftp connection for the domain in Softaculous Remote
insert_filter('pre_loadftp', 'my_pre_loadftp', 1, 3);

// @param	array $res Domain data fetched from the database
// @param	string $dom domain/installation data whose FTP data is required
// @param	string $insid Installation id
function my_pre_loadftp($res, $dom, $insid = ''){
	
	// You can overwrite the FTP credentials here
	$res['server_host'] = 'server.host.com';
	$res['ftp_user'] = 'ftp_username';
	$res['ftp_pass'] = 'ftp_password';
	$res['protocol'] = 'ftps'; // Supported protocols ftp/ftps/sftp
	$res['ftp_encrypted'] = 0;
	$res['ftp_path'] = '/public_html'; // relative path to domain directory after FTP connection
	$res['diff_path'] = '/home/user1'; // full path in which FTP user lands
	$res['backup_dir'] = '/home/user1/backups'; // full path to the directory where you would like to store Softaculous Backups
	
	return $res;
}
*/

/*
//Use this filter to modify the WP CLI Search and Replace command during clone, staging, push to live
insert_filter('wpcli_search_replace_command', 'my_wpcli_search_replace_command', 1, 1);

function my_wpcli_search_replace_command($command){
	global $soft;
	
	$dbprefix = __wp_get_dbprefix();
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		// $command .= " --skip-tables=".$dbprefix."users"; //Make changes in search and replace command as per your need
	}
	return $command;
}
*/

/* 
// Use this filter when you wish to do stuff before an installation is cloned
insert_filter('pre_clone', 'my_pre_clone', 1);

function my_pre_clone(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
	}
	
}
*/

/* 
// This filter will be called before the CLI clone process starts
insert_filter('pre_clone_cli', 'my_pre_clone_cli', 1, 1);

// @param	array $installation Details of the installation imported
function my_pre_clone_cli($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the files are copied during clone process
insert_filter('post_copy_files_clone', 'my_post_copy_files_clone', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_files_clone($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the database is copied during clone process
insert_filter('post_copy_database_clone', 'my_post_copy_database_clone', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_database_clone($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after search and replace is done during clone process
insert_filter('post_search_replace_clone', 'my_post_search_replace_clone', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_search_replace_clone($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after an installation is cloned.
insert_filter('post_clone', 'my_post_clone', 1, 1);

// @param	array $installation Details of the installation cloned
function my_post_clone($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress	
	}
	
}
*/

/* 
// Use this filter when you wish to do stuff before an installation is staged
insert_filter('pre_staging', 'my_pre_staging', 1);

function my_pre_staging(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
	}
	
}
*/

/* 
// This filter will be called before the CLI staging process starts
insert_filter('pre_staging_cli', 'my_pre_staging_cli', 1, 1);

// @param	array $installation Details of the installation imported
function my_pre_staging_cli($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the files are copied during staging process
insert_filter('post_copy_files_staging', 'my_post_copy_files_staging', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_files_staging($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the database is copied during staging process
insert_filter('post_copy_database_staging', 'my_post_copy_database_staging', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_database_staging($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after search and replace is done during staging process
insert_filter('post_search_replace_staging', 'my_post_search_replace_staging', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_search_replace_staging($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after an installation is staged.
insert_filter('post_staging', 'my_post_staging', 1, 1);

// @param	array $installation Details of the installation staged
function my_post_staging($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress	
	}
	
}
*/

/* 
// Use this filter when you wish to do stuff before a staging installation is pushed to live
insert_filter('pre_pushtolive', 'my_pre_pushtolive', 1);

function my_pre_pushtolive(){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress
	}
	
}
*/

/* 
// This filter will be called before the CLI push to live process starts
insert_filter('pre_pushtolive_cli', 'my_pre_pushtolive_cli', 1, 1);

// @param	array $installation Details of the installation imported
function my_pre_pushtolive_cli($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called before push to live backup process starts
insert_filter('pre_backup_pushtolive', 'my_pre_backup_pushtolive', 1, 1);

// @param	array $installation Details of the installation imported
function my_pre_backup_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after push to live backup process is completed
insert_filter('post_backup_pushtolive', 'my_post_backup_pushtolive', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_backup_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the files are copied during push to live process 
insert_filter('post_copy_files_pushtolive', 'my_post_copy_files_pushtolive', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_files_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after the database is copied during push to live process
insert_filter('post_copy_database_pushtolive', 'my_post_copy_database_pushtolive', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_copy_database_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after search and replace is done during push to live process
insert_filter('post_search_replace_pushtolive', 'my_post_search_replace_pushtolive', 1, 1);

// @param	array $installation Details of the installation imported
function my_post_search_replace_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){ 
		//Do things only if its WordPress 
	}
}
*/

/* 
// This filter will be called after an installation is pushed to live.
insert_filter('post_pushtolive', 'my_post_pushtolive', 1, 1);

// @param	array $installation Details of the installation pushed to live
function my_post_pushtolive($installation){
	global $soft, $software, $globals;
	
	// Do stuff here e.g. is as follows
	if(is_wordpress($soft)){
		//Do things only if its WordPress	
	}
	
}
*/

/* // This filter will be called before saving the session while logging in using createSession parameter
insert_filter('save_session_data', 'my_save_session_data', 1, 1);

// @param	array $sess_data Session data being saved by Softaculous
function my_save_session_data($sess_data){
	global $soft, $software, $globals;
	
	// Add/Edit contents of session data being saved
	// NOTE : This value is saved in database so make sure you sanitize the value before returning it
	$primary_domain = optREQ('primary_domain'); // optREQ sanitizes the value received in $_GET/$_POST
	$sess_data['primary_domain'] = $primary_domain;
	
	return $sess_data;
	
} */
