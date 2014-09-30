<?php
/**
 * Performs install/uninstall methods for the Pending Post Alert plugin
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author	   Tailor Vijay <tailor.vj@gmail.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module	   Pending Post Alert Installer
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */

class PendingPostAlert_Install {

	/**
	 * Constructor to load the shared database library
	 */
	public function __construct()
	{
		$this->db = Database::instance();
	}

	/**
	 * Creates the required database tables for the Growl plugin
	 */
	public function run_install()
	{
		// Create the database tables.
		// Also include table_prefix in name
		//$this->db->query('DROP TABLE `'.Kohana::config('database.default.table_prefix').'pendingpostalert_settings`');
		$this->db->query('CREATE TABLE IF NOT EXISTS `'.Kohana::config('database.default.table_prefix').'pendingpostalert_settings` (
								`id` tinyint(4) NOT NULL,
								`pendingpostalert_emails` text DEFAULT NULL,
								PRIMARY KEY (`id`)
							) ENGINE=MyISAM DEFAULT CHARSET=utf8;');
		
		// Create settings row
		$this->db->query('INSERT INTO `'.Kohana::config('database.default.table_prefix').'pendingpostalert_settings` (`id`) VALUES (1)');
	}

	/**
	 * Deletes the database tables for the Growl module
	 */
	public function uninstall()
	{
		$this->db->query('DROP TABLE `'.Kohana::config('database.default.table_prefix').'pendingpostalert_settings`');
	}
}