<?php defined('SYSPATH') or die('No direct script access.');
/**
* Model for Pending Post Alert Plugin
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Tailor Vijay <tailor.vj@gmail.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     Pending Post Alert Model
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */

class PendingPostAlert_Model extends ORM
{
	// Database table name
	protected $table_name = 'pendingpostalert_settings';
}
